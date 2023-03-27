<?php
namespace App\Filters\V1;

use Illuminate\Http\Request;

class CategoryFilter{
    protected $allowedParameters = [
        'voucher_id' => ['eq'],
        'merchant_id' => ['eq'],
        'voucher_name' => ['eq', 'like'],
        'voucher_code' => ['eq'],
        'discount' => ['eq', 'lt', 'lte', 'gt', 'gte'],
        'total_claimed' => ['eq', 'lt', 'lte', 'gt', 'gte'],
        'description' => ['eq', 'like'],
        'status' => ['eq'],
        'date' => ['eq', 'lt', 'lte', 'gt', 'gte']
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'gt' => '>',
        'lte' => '<=',
        'gte' => '>=',
        'like' => 'like',
        'ne' => '!='
    ];

    public function transform(Request $request){
        $eloquentQuery = [];

        foreach ($this->allowedParameters as $parameters => $operators) {
            $query = $request->query($parameters);

            if (!isset($query)){
                continue;
            }

            $column = $parameters;

            foreach ($operators as $operator){
                if(isset($query[$operator])){
                    $eloquentQuery[] = [$column, $this->operatorMap[$operator], $query[$operator]];
                }
            }
        }
        return $eloquentQuery;
    }
}
?>
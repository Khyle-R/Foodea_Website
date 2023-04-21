<?php
namespace App\Filters\V1;

use Illuminate\Http\Request;

class CategoryFilter{
    protected $allowedParameters = [
        'category_id' => ['eq'],
        'description' => ['like', 'eq'],
        'merchant_id' => ['eq'],
        'main_category' => ['eq', 'like'],
        'sub_category' => ['eq', 'like'],
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
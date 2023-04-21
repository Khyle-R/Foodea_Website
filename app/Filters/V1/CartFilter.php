<?php
namespace App\Filters\V1;

use Illuminate\Http\Request;

class CartFilter{
    protected $allowedParameters = [
        'customer_id' => ['eq'],
        'product_id' => ['eq'],
        'restaurant_id'  => ['eq',],
        'quantity'  => ['eq', 'lt', 'lte', 'gt', 'gte'],
        'total'  => ['eq', 'lt', 'lte', 'gt', 'gte'],
        'status' => ['eq', 'ne'],
        'payment_type' => ['eq', 'like'],
        'date' => ['eq']
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
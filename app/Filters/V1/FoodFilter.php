<?php
namespace App\Filters\V1;

use Illuminate\Http\Request;

class FoodFilter{
    protected $allowedParameters = [
        'product_id' => ['eq'],
        'merchant_id' => ['eq'],
        'category_id' => ['eq'],
        'product_name' => ['eq', 'like'],
        'calories' => ['eq', 'lt', 'lte', 'gt', 'gte'],
        'price' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'stock' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'status' => ['ne', 'eq'],
        'description' => ['eq']
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
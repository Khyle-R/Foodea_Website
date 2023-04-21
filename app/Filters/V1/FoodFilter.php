<?php
namespace App\Filters\V1;

use Illuminate\Http\Request;

class FoodFilter{
    protected $allowedParameters = [
        'product_id' => ['eq'],
        'merchant_id' => ['eq'],
        'category_id' => ['eq'],
        'category_name' => ['eq', 'like'],
        'ingredients'  => ['eq', 'like'],
        'product_name'  => ['eq', 'like'],
        'price'  => ['eq', 'lte', 'lt', 'gt', 'gte'],
        'calories'  => ['eq', 'lte', 'lt', 'gt', 'gte'],
        'product_image'  => ['eq', 'like'],
        'stock' => ['eq', 'lte', 'lt', 'gt', 'gte'],
        'status'  => ['eq', 'like'],
        'description' => ['eq', 'like']
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
<?php
namespace App\Filters\V1;

use Illuminate\Http\Request;

class ConsumedFoodFilter{
    protected $allowedParameters = [
        'user_id' => ['eq'],
        'food_name' => ['eq', 'like'],
        'calories' => ['eq', 'gt', 'gte', 'lt', 'lte'],
        'date' => ['eq', 'gt', 'gte', 'lt', 'lte']
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
<?php
namespace App\Filters\V1;

use Illuminate\Http\Request;

class UserFilter{
    protected $allowedParameters = [
        'user_id' => ['eq'],
        'firstname' => ['eq','like'],
        'middlename' => ['eq','like'],
        'lastname' => ['eq','like'],
        'height' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'weight' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'gender' => ['eq', 'like', 'ne'],
        'bmi' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'email' => ['eq', 'like', 'ne'],
        'password' => ['eq', 'ne'],
        'address' => ['eq', 'like'],
        'contact_number' => ['eq'],
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
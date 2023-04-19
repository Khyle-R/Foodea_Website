<?php
namespace App\Filters\V1;

use Illuminate\Http\Request;

class RiderFilter{
    protected $allowedParameters = [
        'rider_id' => ['eq', 'lte', 'lt', 'gt', 'gte'],
        'firstname' => ['eq', 'like'],
        'middlename' => ['eq', 'like'],
        'lastname' => ['eq', 'like'],
        'age' => ['eq', 'lte', 'lt', 'gte', 'gt'],
        'gender' => ['eq', 'like'],
        'birthdate' => ['like', 'eq'],
        'email' => ['eq', 'like'],
        'mobile_number' => ['eq'],
        'address' => ['eq', 'like'],
        'city' => ['like', 'eq'],
        'barangay' => ['eq', 'like'],
        'zip_code' => ['eq','like']
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
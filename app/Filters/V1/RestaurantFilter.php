<?php
namespace App\Filters\V1;

use Illuminate\Http\Request;

class RestaurantFilter{
    protected $allowedParameters = [
        'merchantinfo_id' => ['eq'],
        'merchant_id' => ['eq'],
        'business_type' => ['eq', 'like'],
        'business_name' => ['eq', 'like'],
        'date_founded' => ['eq', 'like'],
        'country' => ['eq', 'like'],
        'address' => ['eq', 'like'],
        'city' => ['eq', 'like'],
        'barangay' => ['eq', 'like'],
        'street' => ['eq', 'like'],
        'postal_code' => ['eq', 'like'],
        'store_number' => ['eq', 'like'],
        'store_email' => ['eq', 'like'],
        'mission' => ['eq', 'like'],
        'vision' => ['eq', 'like'],
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
<?php
namespace App\Filters\V1;

use Illuminate\Http\Request;

class TransactionFilter{
    protected $allowedParameters = [
        'transaction_id' => ['eq'],
        'order_key' => ['eq'],
        'merchant_id' => ['eq'],
        'customer_id' => ['eq'],
        'rider_id' => ['eq'],
        'product_id' => ['eq'],
        'order_status' => ['eq', 'like'],
        'date' => ['eq', 'like', 'gt', 'gte', 'lte', 'lt']
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
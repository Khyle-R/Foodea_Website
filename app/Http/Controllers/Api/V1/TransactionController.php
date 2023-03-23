<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Filters\V1\TransactionFilter;
use App\Http\Requests\V1\StoreRiderRequest;
use App\Http\Requests\V1\UpdateRiderRequest;
use App\Models\tbl_transaction;

class TransactionController extends Controller
{
    public function index(Request $request){
        $filter = new TransactionFilter();
        $queryItems = $filter->transform($request);

        if (!isset($queryItems)||count($queryItems) == 0 ) {
            return tbl_transaction::all();
        } else {
            return tbl_transaction::where($queryItems)->get();
        }
    }

    public function store(StoreTransactionRequest $request){
        return tbl_transaction::create($request->all());
    }

    public function show(Request $request, tbl_transaction $tbl_transaction){
        $id = $request->segment(count(request()->segments()));
        return $tbl_transaction::where('transaction_id', $id)->get();
    }

    public function destroy(Request $request, tbl_transaction $tbl_transaction){
        $id = $request->segment(count(request()->segments()));
        return $tbl_transaction::where('transaction_id', $id)->delete();
    }

    public function update(UpdateTransactionRequest $request, tbl_transaction $tbl_transaction){
        $tbl_transaction->update($request->all());
    }
}

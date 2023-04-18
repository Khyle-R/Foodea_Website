<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Filters\V1\RiderFilter;
use App\Http\Requests\V1\StoreRiderRequest;
use App\Http\Requests\V1\UpdateRiderRequest;
use App\Models\tbl_rider_accounts;

class RiderController extends Controller
{
    public function index(Request $request){
        $filter = new RiderFilter();
        $queryItems = $filter->transform($request);

        if (!isset($queryItems)||count($queryItems) == 0 ) {
            return tbl_rider_accounts::with('rider_documents')->get();
        } else {
            return tbl_rider_accounts::with('rider_documents')->where($queryItems)->get();
        }
    }

    public function store(StoreRiderRequest $request){
        return tbl_rider_accounts::create($request->all());
    }

    public function show(Request $request, tbl_rider_accounts $tbl_rider_accounts){
        $id = $request->segment(count(request()->segments()));
        return $tbl_rider_accounts::where('rider_id', $id)->get();
    }

    public function destroy(Request $request, tbl_rider_accounts $tbl_rider_accounts){
        $id = $request->segment(count(request()->segments()));
        return $tbl_rider_accounts::where('rider_id', $id)->delete();
    }

    public function update(UpdateRiderRequest $request, tbl_rider_accounts $tbl_rider_accounts){
        $tbl_rider_accounts->update($request->all());
    }
}

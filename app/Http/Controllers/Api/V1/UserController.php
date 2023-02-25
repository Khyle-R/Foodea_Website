<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Filters\V1\UserFilter;
use App\Models\AppUser;

class UserController extends Controller
{
    public function index(Request $request){
        $filter = new UserFilter();
        $queryItems = $filter->transform($request);

        if (!isset($queryItems)||count($queryItems) == 0 ) {
            return AppUser::all();
        } else {
            return AppUser::where($queryItems)->get();
        }
    }
}

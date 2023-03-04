<?php

namespace App\Http\Controllers\Api\V1;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Filters\V1\FavoritesFilter;
use App\Http\Requests\V1\StoreFavoriteRequest;
use App\Models\Favorites;

class FavoritesController extends Controller
{
    public function index(Request $request){
        $filter = new FavoritesFilter();
        $queryItems = $filter->transform($request);

        if (!isset($queryItems)||count($queryItems) == 0 ) {
            return Favorites::all();
        } else {
            return Favorites::where($queryItems)->get();
        }
    }

    public function store(StoreFavoriteRequest $request){
        return Favorites::create($request->all());
    }
}

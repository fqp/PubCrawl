<?php

namespace App\Http\Controllers;

use App\Models\Route;

class RoutesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function index() {
        $routes = Route::all();
        return response()->json($routes);
    }

    public function show($id) {
        $route = Route::find($id);
        return response()->json($route);
    }

    public function attractions($id) {
        $attractions = Route::find($id)->attractions()->get();
        return response()->json($attractions);
    }

}

<?php

namespace App\Http\Controllers;

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
        $results = app('db')->select("SELECT * FROM routes");
        return response()->json($results);
    }

    public function show($id) {
        $result = app('db')->select("SELECT * FROM routes WHERE id=" . $id);
        return response()->json($result);
    }

}

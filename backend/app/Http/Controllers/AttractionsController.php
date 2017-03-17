<?php

namespace App\Http\Controllers;

class AttractionsController extends Controller
{
    public function index() {
        $results = app('db')->select("SELECT * FROM attractions");
        return response()->json($results);
    }

    public function show($id) {
        $result = app('db')->select("SELECT * FROM attractions WHERE id = " . $id);
        return response()->json($result);
    }

    public function types()
    {
        $results = app('db')->select("SELECT DISTINCT(type) FROM attractions");
        return response()->json($results);
    }

    public function searchbytype($type)
    {
        $results = app('db')->select("SELECT * FROM attractions WHERE type LIKE '%" . $type . "%'");
        return response()->json($results);
    }
}

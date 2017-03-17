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
        // TODO fetch all routes
        return null;
    }

    public function show($id) {
        // TODO fetch specific route
        return $id;
    }

}

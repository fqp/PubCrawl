<?php

namespace App\Http\Controllers;

use App\Models\Attraction;

class AttractionsController extends Controller
{
    public function index() {
        $attractions = Attraction::all();
        return response()->json($attractions);
    }

    public function show($id) {
        $attraction = Attraction::where('id', $id)->get();
        return response()->json($attraction);
    }

    public function routes($id) {
        $attraction = Attraction::find($id)->routes()->get();
        return response()->json($attraction);
    }
}

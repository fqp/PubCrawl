<?php

use App\Models\Route;
use App\Models\Attraction;
use Illuminate\Database\Seeder;

class AttractionRouteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$attractions = Attraction::where('type', 'museum')->get();
    	foreach ($attractions as $attraction) {
    		$attraction->routes()->sync([1]);
    	}

    	$attractions = Attraction::where('type', 'sport')->get();
    	foreach ($attractions as $attraction) {
    		$attraction->routes()->sync([3]);
    	}

    	$attractions = Attraction::where('type', 'architecture / art')->get();
    	foreach ($attractions as $attraction) {
    		$attraction->routes()->sync([2]);
    	}

    	$attractions = Attraction::where('type', 'market')->get();
    	foreach ($attractions as $attraction) {
    		$attraction->routes()->sync([4]);
    	}

    }
}

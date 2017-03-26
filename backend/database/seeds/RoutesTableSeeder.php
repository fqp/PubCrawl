<?php

use App\Models\Route;
use Illuminate\Database\Seeder;

class RoutesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Route::create([
        	'name' => 'Museum Route',
        	'desc' => 'The route for people with purple pants'
        ]);

        Route::create([
        	'name' => 'Architecture Route',
        	'desc' => 'For the designers amongst us'
        ]);

        Route::create([
        	'name' => 'Sport Route',
        	'desc' => 'For the ones who wont take any beer at the pubs'
        ]);

        Route::create([
        	'name' => 'Market Route',
        	'desc' => 'For the \'3 halen, 2 betalen\' amongst us'
        ]);
    }
}

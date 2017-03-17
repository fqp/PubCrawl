<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('/api/hello-world', function() use ($app) {
	return 'Hello world';
});

$app->get('/api/routes', 'RoutesController@index');
$app->get('/api/routes/{id}', 'RoutesController@show');

$app->get('/api/attractions', 'AttractionsController@index');
$app->get('/api/attractions/{id}', 'AttractionsController@show');
$app->get('/api/types', 'AttractionsController@types');
$app->get('/api/types/{type}', 'AttractionsController@searchbytype');
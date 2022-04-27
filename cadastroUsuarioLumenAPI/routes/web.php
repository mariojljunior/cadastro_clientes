<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return 'API REST com ' . $router->app->version();
});

$router->group(['prefix' => 'clientes'], function() use($router){

    $router->get('/', 'ClientesController@index');
    $router->get('/{cliente}', 'ClientesController@show');

    $router->post('/','ClientesController@store');

    $router->put('/{cliente}', 'ClientesController@update');

    $router->delete('/{cliente}', 'ClientesController@destroy');
});

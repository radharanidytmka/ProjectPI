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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {     
    //$router->get('smk', 'SMKController@index');     
    $router->get('smk', 'SMKController@indexAtAkreditasi');
    //$router->get('smk/{id}', 'SMKController@show');     
    $router->get('smk/{id}', 'SMKController@showAkreditasi');    
    $router->post('smk', 'SMKController@store');     
    $router->put('smk/{id}', 'SMKController@update');     
    $router->delete('smk/{id}', 'SMKController@delete');     
});
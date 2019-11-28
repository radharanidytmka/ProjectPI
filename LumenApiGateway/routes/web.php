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

$router->get('/mapel','MapelController@show');
$router->get('/mapel/{id}','MapelController@showID');
$router->post('/mapel','MapelController@store');
$router->put('/mapel/{id}','MapelController@update');
$router->delete('/mapel/{id}','MapelController@delete');

$router->get('/smk','SMKController@show');
$router->get('/smk/{id}','SMKController@showID');
$router->post('/smk','SMKController@store');
$router->put('/smk/{id}','SMKController@update');
$router->delete('/smk/{id}','SMKController@delete');

$router->get('/user','UserController@show');
$router->get('/user/{id}','UserController@showID');
$router->post('/user','UserController@create');
$router->put('/user/{id}','UserController@update');
$router->delete('/user/{id}','UserController@delete');
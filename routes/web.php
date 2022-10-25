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

$router->get('login','AuthController@login');

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['middleware'=>'auth'], function() use($router){
$router->get('/topics', 'TopicController@index');
$router->get('/topics/{id}', 'TopicController@show');
$router->post('/topics', 'TopicController@store');
$router->delete('/topics/{id}', 'TopicController@destroy');

$router->get('/users', 'UserController@index');
$router->get('/users/{id}', 'UserController@show');
$router->post('/users', 'UserController@store');
$router->delete('/users/{id}', 'UserController@destroy');
});

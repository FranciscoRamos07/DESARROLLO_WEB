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
    return $router->app->version();
});


$router->get('/saludo',function(){
    return 'Hola mi nombre es Francisco Ramos';
});


$router->post('/saludo', function(){
    return 'Hola Mi nombre es francisco';

});


$router->put('/saludo',function(){
    return 'hola mundo';
});

$router->delete('/saludo',function(){
    return 'hola que tal';
});

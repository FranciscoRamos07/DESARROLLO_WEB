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


//$router->get('/saludo/{nombre}',function($nombre){
//    return 'hola '.$nombre;
//});


$router->post('/saludo', function(){
    return 'Hola Mi nombre es: ';

});


$router->put('/saludo',function(){
    return 'hola ';
});

$router->delete('/saludo',function(){
    return 'hola que tal';
});



$router->get('/saludo/{edad}',function($edad){

    echo 'mi edad es '.$edad;

    if ($edad < 18) {
        return ' eres mayor de edad';}

    elseif($edad >=18 && $edad <=100){
        {return ' eres mayor de edad';}

    }
    else{
        return'edad erronea ';
    }









});

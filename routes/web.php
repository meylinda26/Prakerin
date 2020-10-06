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


$router->get('/home', function () {
    return view('home');
});
$router->get('/login', function () {
    return view('login');
});
$router->get('/', function () {
    return view('load');
});



// Route::get('/', function() {
// 	return view('home');
// });

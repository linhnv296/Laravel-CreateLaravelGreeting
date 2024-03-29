<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {

    echo 'Hello World!';

});

Route::get('/lrvgreet', function(){
    echo "hello ajnomoto";
});

Route::get('/greet/{name?}',  function ($name = null){
    if ($name){
        echo "Hello ".$name;
    }else{
        echo "Hello World!";
    }
});
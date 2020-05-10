<?php

use Illuminate\Support\Facades\Route;

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


    // return 'some text just returned'; ## laravel is clever enough to send it as a text/html
    // or 

    // return ['name1'=>'pizza1', 'name2'=>'pizza2'];
    ## laravel is clever enough to send it as a json object(file)

    // or

    #return view('/pizzas'); // go and create the view pizzas.blade.php 

    // return view('/pizzas', ['type'=>'Hawuiian']);
    //  $pizza=[
    //      'type'=>'Hawuiian',
    //       'base'=>'cheese',
    //       'price'=>10
    //  ];

    

Route::get('/pizzas', 'PizzaController@index')->middleware('auth');

Route::get('/pizzas/create', 'PizzaController@create')->middleware('auth');;

Route::post('/pizzas', 'PizzaController@store');
// using wild cards to send dynamically date throegh routes to the uri and use same date in the 
// view >>> instead of static typing the id we can use it dynamically
Route::get('/pizzas/{id}', 'PizzaController@show')->middleware('auth');

Route::delete('/pizzas/{id}', 'PizzaController@destroy')->middleware('auth');
 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    // return view('welcome');
    return "Hi about page";
});


Route::get('/contact', function () {
    // return view('welcome');
    return "Hi contact page";
});


Route::get('/post/{id}/{name}', function ($id, $name) {
    // return view('welcome');
    return "Hello " . $name . " Your id number " . $id; 
});




Route::group(['middleware' => ['web']], function () {


    
});


// Route::get('/dbtest', function () {
//     return view('dbtest');
// });


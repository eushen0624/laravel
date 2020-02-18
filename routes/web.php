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

// Route::get('/', function () {
//     return view('profile');
// });

// Route::get('/blade1', function(){
// 	return view('blade1');
// });

// Route::get('/blade2', function(){
// 	return view('blade2');
// });

// Route::get('/blade3', function(){
// 	return view('blade3');
// });

// Route::get('/', 'Controller@index');

Route::get('/profile', function(){
	return view('profile');
});
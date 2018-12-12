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
    return view('index');
});
Route::get('awal', function () {
    return view('index');
});
Route::get('anak', function () {
    return view('index2');
});
Route::get('remaja', function () {
    return view('index3');
});
Route::get('dewasa', function () {
    return view('index4');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

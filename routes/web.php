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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create-product', 'HomeController@createProduct');
Route::get('/stock', 'HomeController@Stock');
Route::get('/product/{id}', 'HomeController@singleProduct')->name('singleProduct');
// Route::get('/report', 'HomeController@report');
// Route::get('/investment', 'HomeController@investment');
// Route::get('/expense', 'HomeController@expense');
// Route::get('detail/{cardetail}', 'HomeController@cardetail');
// Route::get('detail/{id}/edit', 'HomeController@edit');
// Route::get('/customerForm', 'HomeController@cusform');
// Route::get('/finalreport', 'HomeController@finalrep');
// Route::get('/sellsreport', 'HomeController@sells');

Route::post('/create-product', 'PostController@createProduct');
Route::post('/update-stock', 'PostController@updateStock');
Route::post('/delete-stock', 'PostController@deleteStock');
// Route::post('/expense', 'PostController@postexpense');
// Route::post('/customerForm', 'PostController@postcusform');
// Route::post('/update', 'PostController@update');

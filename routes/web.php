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
//     return view('home');
// });
Route::get('/','HomeController@index');
Route::get('/login','AdminController@index');
Route::get('/dashboard','AdminController@home');
Route::post('/dashboard','AdminController@login');
Route::get('/logout','SuperAdminController@logout');

Route::get('/add_category','CategoryController@index');
Route::post('/add_category','CategoryController@category_entry');
Route::get('/list_category','CategoryController@list_category');

Route::get('/add_manufacture','ManufactureController@index');
Route::post('/add_manufacture','ManufactureController@manufacture_entry');
Route::get('list_manufacture','ManufactureController@list_manufacture');

Route::get('/add_product','ProductController@index');
Route::get('/list_product','ProductController@list_product');
Route::post('/product_entry','ProductController@entry_product');
Route::get('/view/{id}','ProductController@single_product_view');
Route::get('/edit_product/{id}','ProductController@edit_product');
Route::post('/product/update','ProductController@update');
Route::get('/delete_delete/{id}','ProductController@delete');

Route::get('/add_slider','SliderController@index');
Route::get('/list_slider','SliderController@list_slider');
Route::post('/slider_entry','SliderController@slider_entry');
Route::get('/edit_slider/{id}','SliderController@edit_slider');
Route::post('/slider/update','SliderController@update_slider');
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


Route::get('/draft', 'draftController@guest');
Route::get('/', 'IndexController@guest');
Route::get('/index', 'IndexController@guest');
Route::get('/product', 'productController@guest');
Route::get('/productList', 'productListController@guest');
Route::get('/productItems', 'productItemsController@guest');
Route::get('/report', 'reportController@guest');
Route::get('/user', 'IndexController@user');
Route::get('/account', 'AccountController@index');


Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

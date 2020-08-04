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
    return view('front-end/index');
});

Route::get('/about', function () {
    return view('front-end/about');
});
Route::get('/index', function () {
    return view('front-end/index');
});

Route::get('/blog', function () {
    return view('front-end/blog');
});
Route::get('/cart', function () {
    return view('front-end/cart');
});
Route::get('/admin',function (){
    return view('dashboard/index');
});

Route::resource('admins','AdminController');
Route::resource('carts','CartController');
Route::resource('categories','CategoryController');
Route::resource('contacts','ContactController');
Route::resource('products','ProductController');
Route::resource('labels','LabelController');
Route::resource('pages','PageController');
Route::resource('orders','OrderController');
Route::resource('populars','PopularController');

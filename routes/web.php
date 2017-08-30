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

Route::get('/', function () {return view('index');});
Route::get('index', function () {return view('index');});
Route::get('404', function () {return view('404');});
// Route::get('about', function () {return view('about');});
// Route::get('blog-home-1', function () {return view('blog-home-1');});
// Route::get('blog-home-2', function () {return view('blog-home-2');});
// Route::get('blog-post', function () {return view('blog-post');});
// Route::get('contact', function () {return view('contact');});
// Route::get('faq', function () {return view('faq');});
// Route::get('full-width', function () {return view('full-width');});
// Route::get('portfolio-1-col', function () {return view('portfolio-1-col');});
// Route::get('portfolio-2-col', function () {return view('portfolio-2-col');});
// Route::get('portfolio-3-col', function () {return view('portfolio-3-col');});
// Route::get('portfolio-4-col', function () {return view('portfolio-4-col');});
// Route::get('portfolio-itemTemp', function () {return view('portfolio-itemTemp');});
// Route::get('pricing', function () {return view('pricing');});
// Route::get('services', function () {return view('services');});
// Route::get('sidebar', function () {return view('sidebar');});


Route::get('portfolio-item', function () {return view('portfolio-item');});
Route::get('addevent', function () {return view('master/addevent');});
Route::get('EO', function () {return view('master/EO');});
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

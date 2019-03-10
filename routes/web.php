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
    return view('landing');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/article', function () {
    return view('article');
});
Route::get('/friends', function () {
    return view('friends');
});
Route::get('/comics', function () {
    return view('comics');
});
Route::get('/search', function () {
    return view('search');
});
Route::get('/add', function () {
    return view('add');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
/*
Route::get('/landing',function()
{
    return view('landing');
});*/
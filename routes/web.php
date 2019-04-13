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

Route::get('/comics', function () {
    return view('comics');
});
Route::get('/search', function () {
    return view('search');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/friends/{id}','Friend@showU');

Route::get('/profile/{id}', 'UserController@show');
Route::post('/addfriend', 'Friend@eSolicitud');

Route::post('/login','loginController@check');
Route::get('/add',  'ComicController@create');

Route::post('/add',  'ComicController@store');
Route::get('/register',  'UserController@create');
Route::post('/register',  'UserController@store');
/*
Route::get('/landing',function()
{
    return view('landing');
});*/
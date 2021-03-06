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

Route::get('/edit/{id}','ComicController@editShow');
Route::post('/editC','ComicController@comicEdit');

Route::get('/home','ComicController@Home');

Route::get('/comics/{id}','ComicController@showCom');
Route::post('/ComicD','ComicController@ComicD');

Route::get('/article/{id}', 'ComicController@showArt');
Route::post('/articleA','ComicController@comicAdd');
Route::post('/articleL','ComicController@comicLikes');

Route::post('/commentA','ComController@store');

Route::get('/search', 'SearchController@load');
Route::post('/searchS', 'SearchController@lockOn');

Route::get('/login', 'loginController@cook');


Route::get('/friends/{id}','Friend@showU');
Route::post('/friendA','Friend@friendA');

Route::get('/profile/{id}', 'UserController@showUs');
Route::post('/addfriend', 'Friend@eSolicitud');

Route::post('/login','loginController@check');

Route::get('/add',  'ComicController@create');
Route::post('/addC',  'ComicController@store');

Route::get('/register',  'UserController@create');
Route::post('/register',  'UserController@store');
/*
Route::get('/landing',function()
{   zfhtqeu1xculgtjn
    return view('landing');
});*/
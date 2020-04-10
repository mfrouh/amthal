<?php

use Illuminate\Support\Facades\Route;

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
// Route::get('/lang/{lang}', function ($lang) {
//     if(session()->get('lang'))
//     {
//         session()->put('lang',$lang);
//         return back();
//     }
// });
// Route::group(['middleware'=>['lang']], function () {
Route::resource('/post','PostController');
Route::resource('/article','ArticleController');
Route::resource('/writer','WriterController');
Route::resource('/book','BookController');

Route::get('/aqwal','PageController@aqwal');
Route::get('/amthal','PageController@amthal');
Route::get('/','PageController@main');
Route::get('/writers','PageController@writers');
Route::get('/books','PageController@books');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// });

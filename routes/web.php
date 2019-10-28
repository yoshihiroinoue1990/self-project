<?php
use App\Http\Middleware\HelloMiddleware;
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
    return view('welcome');
});

Route::get('hello','HelloController@index');
Route::POST('hello','HelloController@post');

Route::get('hello/other','HelloController@other' );


Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');

Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/update', 'HelloController@update');

Route::get('hello/show', 'HelloController@show');

Route::get('person','PersonController@index');

Route::get('person/find','PersonController@find');
Route::post('person/find','PersonController@search');

Route::get('person/add','PersonController@add');
Route::post('person/add','PersonController@create');

Route::get('hello/session','HelloController@ses_get');
Route::post('hello/session','HelloController@ses_put');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout','HelloController@logout');
Route::post('/logout','HelloController@logout');

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


Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/hi/', function () {
    return view('hi');
});

Route::get('/lc', function () {
    return view('lc');
});

//проверка авторизации для ЛК
Route::get('/lc',['middleware'=>['auth'],'uses' =>'IndexController@lc', 'as'=>'lc']);

Route::get('/edit/{id}',['middleware'=>['auth'],'uses' =>'IndexController@edit', 'as'=>'edit']);


Route::get('/', 'IndexController@index');
//показ товаров
Route::get('ptovari/{id}', 'IndexController@show')->name('ptovariShow');

Route::get('/lc', 'IndexController@showInfoUser');
//Route::get('lc/{id}', 'IndexController@showInfoUser')->name('showInfoUserShow');

//добавление товаров
Route::get('page/add',['middleware'=>['auth'],'uses' =>'IndexController@add', 'as'=>'add']);
//обращение POST
Route::post('page/add', 'IndexController@store')->name('tovarStore');

Route::get('page/login', [
'as' => 'user-login',
'uses'=>'AuthController@getLogin']);

Route::post('page/login', 'AuthController@postLogin')->name('postLogin');

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/edit/{id}','IndexController@edit')->name('editTovar');
Route::post('/update/{id}','IndexController@update');


Route::resource('article', 'ArticleController');

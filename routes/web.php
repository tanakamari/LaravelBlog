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

//defaultページ
Route::get('/',  'PostController@index');

//一覧ページ
Route::get('/posts', 'PostController@index');

//作成ページ
//Route::get('/posts/create', 'PostController@create');

//作成処理
Route::post('/posts', 'PostController@store');

//詳細ページ
Route::get('/posts/{id}', 'PostController@show');   //idを正規表現で取得する

//編集ページ
//Route::get('/posts/{id}/edit', 'PostController@edit');

//編集処理
Route::put('/posts/{id}', 'PostController@update');

//削除処理
//Route::delete('/posts/{id}', 'PostController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth', 'can:admin']], function () {
    //作成ページ
    Route::get('/posts/create', 'PostController@create');

    //編集ページ
    Route::get('/posts/{id}/edit', 'PostController@edit');

    //削除処理
    Route::delete('/posts/{id}', 'PostController@destroy');
});

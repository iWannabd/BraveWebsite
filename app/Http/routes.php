<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@home');
Route::get('/ikutcerpen', 'PagesController@formcerpen');
Route::get('/ikutkartul', 'PagesController@formkartul');
Route::get('/ikutsains', 'PagesController@formsains');


Route::post('/ikutcerpen','FormCerpenController@simpan');
Route::post('/ikutkartul','FormKartulController@simpan');
Route::post('/ikutsains','FormSainsController@simpan');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

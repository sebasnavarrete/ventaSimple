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

Route::get('/', ['as' =>'/', 'uses' => 'HomeController@index']);
Route::get('administracion', ['as' =>'administracion', 'uses' => 'HomeController@admin']);
Route::resource('dashboard', 'DashboardController');
Route::resource('productos', 'ProductosController');
//Route::get('message', ['as' =>'message', 'uses' => 'MessageController@index']);
//Route::get('message/send/{num}/{text}', 'MessageController@send');
//Route::get('message/register/{num}', 'MessageController@register');
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

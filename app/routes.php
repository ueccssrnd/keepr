<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    return View::make('index');
});
Route::get('admin',function(){
	return View::make('admin');
});
Route::get('register',function(){
	return View::make('register');
});
Route::post('register/adduser', array('uses' => 'RegisterController@register'));
Route::post('timeIn',array('uses' => 'AjaxController@doLogin'));
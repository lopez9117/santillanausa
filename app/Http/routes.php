<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('test',function(){
	$user = new App\User;
	$user->name = 'eduard';
	$user->email = 'luiselm017@gmail.com';
	$user->password = bcrypt('123456');
	$user->role ='estudiante';
	$user->save();

	return $user;

});

Route::get('cursos' ,[ 'as' => 'cursos', 'uses' =>'CoursesController@index']);

Route::get('login','Auth\AuthController@showLoginForm');
Route::post('login','Auth\AuthController@login');
Route::get('logout','Auth\AuthController@logout');



Route::get('usuarios' ,[ 'as' => 'usuarios', 'uses' =>'UsersController@index']);
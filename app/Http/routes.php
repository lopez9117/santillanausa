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

Route::get('roles', function () {
    
    	return App\Role::with('user')->get();
});

Route::get('test',function(){
	$user = new App\User;
	$user->name = 'usuario_profesor';
	$user->email = 'profesor@santillanausa.com';
	$user->password = bcrypt('123456');
	$user->save();

	return $user;

});

Route::get('test2',function(){
	$roles = new App\Role;
	$roles->name = 'estudiante';
	$roles->display_name = 'estudiante del sistema';
	$roles->description ='Usuario estudiante capas de visualizar cursos';
	$roles->save();

	return $roles;

});


Route::get('cursos' ,[ 'as' => 'cursos', 'uses' =>'CoursesController@index']);

Route::get('login','Auth\AuthController@showLoginForm');
Route::post('login','Auth\AuthController@login');
Route::get('logout','Auth\AuthController@logout');



Route::get('usuarios' ,[ 'as' => 'usuarios', 'uses' =>'UsersController@index']);
/*Route::get('api/users' ,function(){
	return Datatables::eloquent(App\User::query())->make(true);


});*/
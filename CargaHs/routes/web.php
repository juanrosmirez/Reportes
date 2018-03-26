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
    return view('welcome');
});


Route::get('/welcome/', function () {
   return 'Mostrando detalle del usuario '	.$_GET['id'];
});


Route::get('/usuarios', 'UserController@index');

Route::get('/usuarios/{id}', 'UserController@show')->where('id','\d+');

Route::get('/prueba/{name}/{nickname?}', function ($id, $nickname = null) {

	if($nickname)
		return 'Nombre: '	. $id . ' ' . 'NickName: ' . $nickname;
	else
   		return 'Nombre: '. $id;
});

Route::get('/welcome/nuevo', function () {
   return 'Prueba';
 });

//EXPRESION REGULAR QUE REPRESENA NUMEROS '[0-9]+' y '\d+'
//EXPRESION REGULAR QUE REPESENTA LETRAS '\w+'

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


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

use App\Principal as Principal;

Route::get('/', function () {
	$data = Principal::indexValues();
    return view('layouts.template', $data);
});

Route::get('login', 'Auth\LoginController@showLoginForm');

Route::get('/usuario', 'UserController@listar');
Route::get('/usuario/criar', 'Auth\RegisterController@showRegistrationForm');

Route::get('/perfil/criar', 'PerfilController@criar');
Route::post('/perfil/criar', 'PerfilController@persistir');
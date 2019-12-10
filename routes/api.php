<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/**INICIO DE SESION */
Route::resource('login','UsuariosController')->except([
    'create', 'edit', 'update', 'destroy', 'show'
]);

Route::post('login/iniciar','UsuariosController@iniciarSesion');

/**ACUDIENTES */
Route::get('acudientes','AcudientesController@index');
Route::post('acudientes','AcudientesController@store');
Route::post('acudientes/usuario','AcudientesController@acudientes');

/**NOTIFICACIONES */
Route::post('notificar','NotificacionesController@notificar');
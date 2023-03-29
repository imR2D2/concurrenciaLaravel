<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\NewsController;

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::view('/','index');
Route::get('/',[NewsController::class,'inicio']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>['auth']],function(){
    Route::view('admin', 'admin.index');

    Route::get('roles', [RoleController::class,'index']);
    Route::post('crear-roles', [RoleController::class,'save']);
    Route::view('agregar-rol','roles.crear');
    Route::get('editar-rol/{id}',[RoleController::class,'edit']);
    Route::post('actualizar-rol/{id}', [RoleController::class,'update']);
    Route::get('eliminar-rol/{id}', [RoleController::class,'delete']);

    Route::get('permisos', [PermissionController::class,'index']);
    Route::post('crear-permisos', [PermissionController::class,'save']);
    Route::view('agregar-permiso','permisos.crear');
    Route::get('editar-permiso/{id}',[PermissionController::class,'edit']);
    Route::post('actualizar-permiso/{id}', [PermissionController::class,'update']);
    Route::get('eliminar-permiso/{id}', [PermissionController::class,'delete']);

    Route::get('usuarios', [UserController::class,'index']);
    Route::post('crear-usuario', [UserController::class,'save']);
    Route::view('agregar-usuarios','user.crear');
    Route::get('editar-usuario/{id}',[UserController::class,'edit']);
    Route::post('actualizar-usuario/{id}', [UserController::class,'update']);
    Route::get('eliminar-usuario/{id}', [UserController::class,'delete']);

    Route::get('grupos', [GroupController::class,'index']);
    Route::get('crear-grupo', [GroupController::class,'save']);
    Route::get('actualizar-grupo/{id}', [GroupController::class,'update']);
    Route::get('eliminar-grupo/{id}', [GroupController::class,'delete']);

    Route::get('noticias', [NewsController::class,'index']);
    Route::post('crear-noticia', [NewsController::class,'save']);
    Route::view('agregar-noticia','news.crear');
    Route::get('editar-noticia/{id}',[NewsController::class,'edit']);
    Route::post('actualizar-noticia/{id}', [NewsController::class,'update']);
    Route::get('eliminar-noticia/{id}', [NewsController::class,'delete']);
});
<?php

//Route::get('/', function(){	return View::make('hello');});
Route::get('/', function(){ return Redirect::to('usuarios');});
Route::get('usuarios', array('uses' => 'UsuariosController@mostrarUsuarios'));
Route::get('usuarios/nuevo', array('uses' => 'UsuariosController@nuevoUsuario'));
Route::post('usuarios/crear', array('uses' => 'UsuariosController@crearUsuario'));
Route::get('usuarios/{id}', array('uses'=>'UsuariosController@verUsuario'));

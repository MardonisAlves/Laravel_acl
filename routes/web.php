<?php

Route::group(['prefix' => 'painel'] , function(){

//PostController
Route::get('posts', 'Painel\PostController@index');

//PermissionController
Route::get('permissions', 'Painel\PermissionController@index');
Route::get('permission/{id}/roles', 'Painel\PermissionController@roles');

// RolesController
Route::get('roles', 'Painel\RoleController@index');
Route::get('role/{id}/permissions', 'Painel\RoleController@permissions');

// UserController
Route::get('users', 'Painel\UserController@index');
Route::get('user/{id}/roles', 'Painel\UserController@roles');

//Painel Controller
Route::get('/', 'Painel\PainelController@index');
});
Auth::routes();


Route::get('/', function () {
    return view('Portal.home.index');
});

Route::get('/home' , 'Portal\SiteController@index');


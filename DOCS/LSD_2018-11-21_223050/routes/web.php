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


Route::resource('role', 'RoleController');
Route::resource('user', 'UserController');
Route::resource('permission', 'PermissionController');
Route::resource('permission_role', 'Permission_roleController');
Route::resource('role_user', 'Role_userController');
Route::resource('login_attempts', 'login_attemptsController');
Route::resource('story', 'StoryController');
Route::resource('chapter', 'ChapterController');
Route::resource('scene', 'SceneController');
Route::resource('ressource', 'RessourceController');
Route::resource('ressourcetype', 'RessourceTypeController');

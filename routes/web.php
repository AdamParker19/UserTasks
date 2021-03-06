<?php

use Illuminate\Support\Facades\Route;
use Http\Controllers\UserValidationController;

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


Route::get('/', 'App\Http\Controllers\UserValidationController@createUserForm');
Route::post('/', 'App\Http\Controllers\UserValidationController@UserForm');
Route::get('/task', 'App\Http\Controllers\TaskValidationController@createTaskForm');
Route::post('/task', 'App\Http\Controllers\TaskValidationController@TaskForm');
<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\Controller::class, 'index']);

Route::get('/groups/create', [App\Http\Controllers\StudentController::class, 'showCreateGroupForm']);

Route::get('/groups', [App\Http\Controllers\StudentController::class, 'showGroupList']);

Route::post('/groups', [App\Http\Controllers\StudentController::class, 'createGroup']);

Route::get('/groups/{id}', [App\Http\Controllers\StudentController::class, 'showGroup']);

Route::post('/groups/{group}/students', [App\Http\Controllers\StudentController::class, 'createStudent']);

Route::get('/groups/{id}/students/create', [App\Http\Controllers\StudentController::class, 'showCreateStudentForm']);

Route::get('/groups/{group}/students/{id}', [App\Http\Controllers\StudentController::class, 'showStudent']);

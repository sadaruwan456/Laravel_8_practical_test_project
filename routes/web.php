<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RestoController;
use App\Http\Controllers\NewUserController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\RegisterController;




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

Route::get('/header', function () {
    return view('header');
});


// Route::post('/users', [UserController::class, 'getdata']);

Route::view('/noaccess', 'noaccess');



// this is a group middleware mapping
// Route::group(['middleware' => ['agecheck']] , function () {
//     Route::view('/home', 'home');
// Route::get('/login',[RestoController::class, 'index']);

// });


// this is route middleware apply
Route::view('/home', 'home')->middleware('agecheck');
Route::get('/login',[RestoController::class, 'index'])->middleware('agecheck');

// Route::get('/user',[NewUserController::class, 'index']);
Route::get('/user',[UserController::class, 'getdata']);


Route::view('/upload', 'upload');
Route::view('/newuser', 'register');

Route::post('file', [UploadController::class, 'index']);

//input data
Route::post('regi', [RegisterController::class, 'index']);

// delete data
Route::get('remo/{id}', [RegisterController::class, 'delete']);

// search data
Route::get('edit/{id}', [RegisterController::class, 'editData']);

// update data
Route::post('/update', [RegisterController::class, 'updateDate']);



// Route::get('remove/{{id}}', [UserController::class, 'delete']);


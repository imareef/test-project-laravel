<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

 Route::get('/', function () {
     return view('welcome');
 });


Route::group(['prefix' => '/panel', 'middleware' => ['auth:web', \App\Http\Middleware\LogUserActivity::class]], function () {
    Route::view('/show', "panel.index")->name('panel1');
    Route::get('/users/{user}/logs', [UserController::class, 'logs'])->name('logs');
    Route::resource('users', UserController::class)->only(['index', 'store', 'edit', 'update', 'destroy', 'create']);
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});


Route::group(['middleware' => 'guest'], function () {
Route::view('login', "panel.login")->name('login');
Route::post('login', [AuthController::class,'doLogin'])->name('do.login');

});

<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Blogcontroller;

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api')->name('logout');
    Route::post('/refresh', [AuthController::class, 'refresh'])->middleware('auth:api')->name('refresh');
    Route::post('/me', [AuthController::class, 'me'])->middleware('auth:api')->name('me');
});

Route::group([
    'middleware' => 'api',
], function ($router) {
    Route::get('/blog',[Blogcontroller::class,'index'])->middleware('auth:api')->name('index');
    Route::post('/blog',[Blogcontroller::class,'create'])->middleware('auth:api')->name('create');
    Route::put('/blog/{id}',[Blogcontroller::class,'update'])->middleware('auth:api')->name('update');
    Route::delete('/blog/{id}',[Blogcontroller::class,'delete'])->middleware('auth:api')->name('delete');

});
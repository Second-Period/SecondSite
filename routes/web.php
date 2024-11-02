<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/laravel', function () {
    return view('welcome');
})->name('home');

Route::get('/about', fn () => view('page.products.about'))->name('about');

Route::get('/cadastro', fn () => view('page.auth.registerUser'))->name('cadastro');
Route::post('/cadastro', [UserController::class, 'createUser'])->name('registerUser');

Route::get('/log', fn () => view('page.auth.loginUser'))->name('loginUser');
Route::post('/log', [AuthController::class, 'authentication'])->name('authUser');

Route::get('/',[ProductsController::class, 'render_products'])->name('page_home');

Route::middleware(['auth', 'verified',AdminMiddleware::class])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/dashboard', fn () => view('admin.dashboard'))->name('dashboard');
        Route::get('/user',[UserController::class, 'index'])->name('users.index');
        Route::get('/products',[ProductsController::class, 'index'])->name('products.index');
        Route::get('/products/create',[ProductsController::class, 'renderiza_tela'])->name('products.render');
        Route::post('/products/create',[ProductsController::class, 'create'])->name('products.create');
        Route::get('/products/{id}',[ProductsController::class, 'detail'])->name('products.detail');
        Route::put('/products/{id}',[ProductsController::class, 'update'])->name('products.update');
        Route::post('/products/{id}',[ProductsController::class, 'delete'])->name('products.delete');
    });
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
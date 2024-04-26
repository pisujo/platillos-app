<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/admin', function () {
    return view('layouts.index');
});*/

Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
//Route::resource('/productos', ProductController::class);
Route::resource('/productos', ProductController::class,
[
    'names' => [
        'index' => 'productos.index',
        'create' => 'productos.create',
        'store' => 'productos.store',
        'show' => 'productos.show',
        'edit' => 'productos.edit',
        'update' => 'productos.update',
        'destroy' => 'productos.destroy',
    ]
]);
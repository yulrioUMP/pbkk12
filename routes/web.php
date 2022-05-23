<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', [TestController::class, 'beranda']);

// Route::get('/beranda', function () {
//     return view('beranda');
// });

Route::middleware('auth')->group(function () {
    Route::get('/karya', function () {
        return view('portpolio');
    });
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'checkRole:user,admin'])->group(function () {
    Route::get('/tentang', [App\Http\Controllers\RoleController::class, 'tentang']);
    Route::get('/kontak', [App\Http\Controllers\RoleController::class, 'kontak']);
});

Route::middleware(['auth', 'checkRole:admin'])->group(function () {
    Route::get('/log', [App\Http\Controllers\RoleController::class, 'log']);
});

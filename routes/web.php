<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

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



/* --------------------------- Admin Routes --------------------------- */

Route::prefix('admin')->group(function(){

    Route::get('/login', [AdminController::class, 'LoginForm'])->name('login_form');
    Route::get('/login/autenticando', [AdminController::class, 'Login'])->name('admin.login');
    Route::get('/Painel', [AdminController::class, 'Index'])->name('admin.index');
});





/* --------------------------- Frontend Routes --------------------------- */

/* --------------------------- Geral Routes --------------------------- */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

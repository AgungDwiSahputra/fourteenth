<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
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

Route::get('/', function () {
    return redirect()->route('login');
});
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['role:management'])->group(function () {
    Route::get('/management/', [PageController::class, 'index_management'])->name('index.management');
});
Route::middleware(['role:ops'])->group(function () {
    Route::get('/ops/', [PageController::class, 'index_ops'])->name('index.ops');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/signin', [AuthController::class, 'login'])->name('login');
    Route::post('/forgot_pass', [AuthController::class, 'forgot_pass'])->name('forgot_pass');
    Route::post('/signin/process', [AuthController::class, 'login_process'])->name('login.post');
});
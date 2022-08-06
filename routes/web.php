<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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
    return view('page.home');
})->name('home');

Route::get('information', function () {
    return view('page.information');
})->name('information');

Route::get('contact', function () {
    return view('page.contact');
})->name('contact');


Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginPost'])->name('login.post');

Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('pages', [PageController::class, 'index'])->name('admin.page');
    Route::get('pages-list', [PageController::class, 'list']);
    Route::get('pages-edit/{id}', [PageController::class, 'edit']);

});

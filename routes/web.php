<?php

use App\Http\Controllers\Web\Home;
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

Route::get('', fn () => view('web.pages.landing.index'));

Route::get('home', [Home\HomeController::class, 'index'])->middleware(['auth', 'verified', 'password.confirm'])->name('home');

<?php

use App\Http\Controllers\Auth\LoginController;
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

//Route for Pages
Route::get('/', [LoginController::class, 'view_login']);


//Routes for Authentications
Auth::routes();

//Route for Home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


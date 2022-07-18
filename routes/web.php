<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
    return view('welcome');
});
Route::get("login",[StudentController::class,'Studentlogin'])->middleware('alreadyLoggedIn');
Route::get("register",[StudentController::class,'Register'])->middleware('alreadyLoggedIn');
Route::post("register-user",[StudentController::class,'registerUser'])->name('register-user');
Route::post("login-user",[StudentController::class,'loginUser'])->name('login-user');
Route::get("dashboard",[StudentController::class,'dashBoard'])->middleware('isLoggedIn');
Route::get("logout",[StudentController::class,'logOut']);


<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\SignupPetaniController;
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
    return view('index',[
        "title" => "Nuswantara Garden"
    ]);
});






Route::get('/create-project', function () {
    return view('petani.createproject',[
        "title" => "Create Project"
    ]);
});

Route::get('/profilpetani', function () {
    return view('petani.profilpetani');
});

Route::get('/profiluser', function () {
    return view('user.profiluser');
});

Route::get('/project', [ProjectController::class,'index']);
Route::get('/project/{project:slug}', [ProjectController::class,'show'] );

Route::get('/signup-user', [SignupController::class,'index']);
Route::post('/signup-user', [SignupController::class,'signup']);
Route::get('/signup-petani', [SignupController::class,'indexPetani']);
Route::post('/signup-petani', [SignupController::class,'signupPetani']);

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'PostLogin']);
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/home', [HomeController::class,'index'])->middleware('auth:user');
Route::get('/homepetani', [HomeController::class,'indexPetani'])->middleware('auth:petani');
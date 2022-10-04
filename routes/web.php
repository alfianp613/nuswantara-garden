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


Route::get('/login-petani', function () {
    return view('petani.login-petani',[
        "title" => "Petani Login"
    ]);
});

Route::get('/homepetani', function () {
    return view('petani.homepetani',[
        "title" => "Home"
    ]);
});

Route::get('/create-project', function () {
    return view('petani.createproject',[
        "title" => "Create Project"
    ]);
});

Route::get('/project', [ProjectController::class,'index']);
Route::get('/project/{project:slug}', [ProjectController::class,'show'] );

Route::get('/signup-user', [SignupController::class,'index']);
Route::post('/signup-user', [SignupController::class,'signup']);

Route::get('/login-user', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login-user', [LoginController::class,'signin']);
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/home', [HomeController::class,'index'])->middleware('auth');

Route::get('/signup-petani', [SignupPetaniController::class,'index']);
Route::post('/signup-petani', [SignupPetaniController::class,'signup']);
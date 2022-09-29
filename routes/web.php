<?php

use App\Http\Controllers\ProjectController;
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

Route::get('/login-user', function () {
    return view('login-user',[
        "title" => "User Login"
    ]);
});

Route::get('/login-petani', function () {
    return view('login-petani',[
        "title" => "Petani Login"
    ]);
});

Route::get('/signup-user', function () {
    return view('signupuser',[
        "title" => "User Sign Up"
    ]);
});

Route::get('/signup-petani', function () {
    return view('signuppetani',[
        "title" => "Petani Sign Up"
    ]);
});

Route::get('/home', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/homepetani', function () {
    return view('homepetani',[
        "title" => "Home"
    ]);
});

Route::get('/create-project', function () {
    return view('createproject',[
        "title" => "Create Project"
    ]);
});

Route::get('/project', [ProjectController::class,'index']);
Route::get('/project/{project:slug}', [ProjectController::class,'show'] );
<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SignupController;
<<<<<<< HEAD
=======
use App\Http\Controllers\SignupPetaniController;
use App\Http\Controllers\DashboardPostController;
>>>>>>> 989398649c5ee7ecdb58cc0cfa9b43580ae6f585
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
})->middleware('guest');








Route::get('/profilpetani', function () {
    return view('petani.profilpetani');
});



Route::get('/dashboard', function () {
    return view('dashboard.index');
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


Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth:petani');
Route::get('/profiluser', function () {
    return view('user.profiluser',[
        "title" => "Profile"
    ]);
});

Route::get('/petani/{user:id}', [ProfilController::class,'show'] );

Route::get('/create-project', function () {
    return view('petani.createproject',[
        "title" => "Create Project"
    ]);
});

Route::get('/create-project/createslug', [ProjectController::class,'checkSlug'])->middleware('auth:petani');
Route::resource('/create-project/create', ProjectController::class)->middleware('auth:petani');

Route::get('/donasi/{project:slug}/{user:id}', [PaymentController::class,'indexdonate'])->middleware('auth:user');
Route::post('/donasi/{project:slug}/{user:id}', [PaymentController::class,'donate'])->middleware('auth:user');
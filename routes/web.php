<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\DashboardProjectController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\QueryDashboard;
use Facade\Ignition\QueryRecorder\Query;
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

// Route::get('/profilpetani', function () {
//     return view('petani.profilpetani');
// });





Route::get('/project', [ProjectController::class,'index']);
Route::get('/project/{project:slug}', [ProjectController::class,'show'] );

Route::get('/signup-user', [SignupController::class,'index']);
Route::post('/signup-user', [SignupController::class,'signup']);
Route::get('/signup-petani', [SignupController::class,'indexPetani']);
Route::post('/signup-petani', [SignupController::class,'signupPetani']);

Route::post('/api/kota', [SignupController::class,'fetchKota']);

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'PostLogin']);
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/home', [HomeController::class,'index'])->middleware('auth:user');
Route::get('/homepetani', [HomeController::class,'indexPetani'])->middleware('auth:petani');




Route::get('/user/{user:id}', [ProfilController::class,'showUser']);

Route::get('/petani/{user:id}', [ProfilController::class,'show'] );

Route::get('/create-project', function () {
    return view('petani.createproject',[
        "title" => "Create Project"
    ]);
});

Route::get('/create-project/createslug', [ProjectController::class,'checkSlug'])->middleware('auth:petani');

Route::get('/donasi/{project:slug}/{user:id}', [PaymentController::class,'indexdonate'])->middleware('auth:user');
Route::post('/donasi/{project:slug}/{user:id}', [PaymentController::class,'donate'])->middleware('auth:user');


Route::get('/dashboard/myprofile/{user:id}', [ProfilController::class,'showDashboard']);
Route::get('/dashboard', [DashboardController::class,'index'])->middleware('auth:petani');
Route::resource('/dashboard/project', DashboardProjectController::class)->middleware('auth:petani');
Route::get('/dashboard/project/{project:slug}/{petani:nik}/payment', [PaymentController::class,'indexpencairan'])->middleware('auth:petani');
Route::post('/dashboard/project/{project:slug}/{petani:nik}/payment', [PaymentController::class,'pencairan'])->middleware('auth:petani');
Route::post('/dashboard/project/{project:slug}/{petani:nik}/payment', [PaymentController::class,'pencairan'])->middleware('auth:petani');


Route::get('/admin/dashboard', function () {
    return view('admin.index');
});

Route::get('/test', [QueryDashboard::class,'test']);
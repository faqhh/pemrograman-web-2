<?php

use App\Http\Controllers\DashbordController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\TugasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/salam', function () {
    return view('salam',[
        "nama"=>"Muhammad Nur Faqih",
        "umur"=>25
    ]);
});

Route::get('/nilai', function () {
    return view('nilai');
});

Route::get('/formulir', function () {
    return view('formulir');
});

Route::get('/form',[FormController::class, 'index']);
Route::POST('/hasil',[FormController::class, 'hasil']);

Route::get('/tugasform',[FormController::class, 'index']);
Route::POST('/tugashasil',[TugasController::class, 'hasil']);

Route::group(['middleware' => ['auth', 'peran:admin-manager']], function(){
    Route::prefix('admin')->group(function(){
        Route::get('/dashboard', [DashbordController::class, 'index']);
        Route::get('/produk', [ProdukController::class, 'index']);
        Route::get('/produk/create',[ProdukController::class, 'create']);
        Route::POST('/produk/store',[ProdukController::class, 'store']);
        Route::get('/produk/edit/{id}',[ProdukController::class, 'edit']);
        Route::post('/produk/update/{id}',[ProdukController::class, 'update']);
        Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);
        Route::get('/logout', [DashbordController::class, 'logout']);
    });
});
Route::get('/frontend', function () {
    return view('frontend');
});

Route::prefix('frontend')->group(function () {
    Route::get('/dashboard',[FrontendController::class, 'index']);
    Route::get('/abaut',[FrontendController::class, 'about']);
    Route::get('/produk',[FrontendController::class, 'produk']);
    Route::get('/store',[FrontendController::class, 'store']);

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

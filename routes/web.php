<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/',[frontendController::class,'index'])->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix'=>'admin','middleware'=>['admin','auth'],'namespace'=>'admin'],function(){
   Route::get('home',[AdminController::class,'index'])->name('admin.home');
});
Route::group(['prefix'=>'user','middleware'=>['user','auth'],'namespace'=>'user'],function(){
    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
 });

 Route::get('admin/logout',[AdminController::class,'Logout'])->name('admin.logout');


 // Category controller
 Route::get('admin/Create',[CategoryController::class,'index'])->name('admin.index');
 Route::post('admin/category_store',[CategoryController::class,'storeCat'])->name('store.Category');

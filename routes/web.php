<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\Auth\AdminRegister;
use App\Http\Controllers\CategoryController;

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

Route::get('/web/dashboard', function () {
    return redirect('dashboard');
});

Route::group(['prefix'=>'admin','middleware'=>['admin:admin']],function(){
    Route::get('/login',[AdminController::class,'loginForm']);
    Route::post('/login',[AdminController::class,'Store'])->name('admin.login');

    Route::get('register',[AdminRegister::class,'AdminRegister']);
    Route::post('register/store',[AdminRegister::class,'AdminRegisterStore'])->name('admin.register');
});
Route::get('admin/logout',[AdminRegister::class,'LogoutAdmin'])->name('admin.logout');



Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard',function () {
    return view('admin.admin_dashboard');
})->name('admin.dashboard');

Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('add-category',[CategoryController::class,'add_category'])->name('add_category');
Route::post('store-category',[CategoryController::class,'categoryStore'])->name('category.store');

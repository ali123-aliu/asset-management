<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\AccessoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::redirect('/', '/login');
//Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
//Route::redirect('/admin','/admin/dashboard');
Route::group(['prefix'=>'/admin','middleware'=>['is_admin']],function (){

    Route::get('/home',[DashboardController::class,'index'])->name('admin.home');
//    Route::get('/home',[DashboardController::class,'index'])->name('dashboard');
    Route::resource('/assets',AssetController::class);
    Route::resource('/brands',BrandController::class);
    Route::get('/all-in-one',[AccessoryController::class,'all_in_one'])->name('all_in_one');
    Route::get('/systems',[AccessoryController::class,'systems'])->name('systems');
    Route::get('/laptop',[AccessoryController::class,'laptop'])->name('laptop');
    Route::get('/printers',[AccessoryController::class,'printers'])->name('printers');
    Route::get('/accessory',[AccessoryController::class,'accessory'])->name('accessory');
    Route::get('/logout',[DashboardController::class,'logout'])->name('admin.logout');

});

Auth::routes();
Route::get('/logout',[DashboardController::class,'logout'])->name('custom.logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

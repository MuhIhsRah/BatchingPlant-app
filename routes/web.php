<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\sesiController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\driverController;
use App\Http\Controllers\truckController;
use App\Http\Controllers\TruckController_;
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

Route::middleware(['guest'])->group(function(){
    Route::get('/',[sesiController::class,'index'])->name('login');
    Route::post('/',[sesiController::class,'login']);
});
Route::middleware(['auth'])->group(function(){
    Route::get('/admin',[adminController::class,'index']);
    Route::get('/admin/operator',[adminController::class,'operator'])->middleware('userAkses:Operator');
    Route::get('/admin/supervisor',[adminController::class,'supervisor'])->middleware('userAkses:Supervisor');
    Route::get('/logout',[sesiController::class,'logout']);
    Route::get('/user-settings',[adminController::class,'supervisor'])->middleware('userAkses:Supervisor');
    
    Route::get('/user-settings', function () {
    return view('usersettings');
    });
});

Route::get('/home', function () {
//    return view('home');
    return redirect('/admin');
});
Route::get('/control', function () {
    return view('control');
});
Route::get('/general-settings', function () {
    return view('generalsettings');
});
Route::get('/material-settings', function () {
    return view('materialsettings');
});
Route::get('/data-material', function () {
    return view('datamaterial');
});
Route::get('/mix-design', function () {
    return view('mixdesign');
});
/*
Route::get('/data-customer', function () {
    return view('datacustomer');
});
Route::get('/data-truck', function () {
    return view('datatruck');
});
*/
Route::get('/report', function () {
    return view('report');
});

//page driver
Route::get('/data-driver',[driverController::class,'index2']);
Route::get('/create-driver', [driverController::class,'create2']);
Route::post('store2',[driverController::class,'store2']);
Route::get('delete2/{id}',[driverController::class,'delete2']);

//page truck
Route::get('/data-truck',[truckController::class,'index1']);
Route::get('/create-truck', [truckController::class,'create1']);
Route::post('store1',[truckController::class,'store1']);
Route::get('delete1/{id}',[truckController::class,'delete1']);

//page customer
Route::get('/data-customer',[customerController::class,'index']);
Route::get('/create-customer', [customerController::class,'create']);
Route::post('store',[customerController::class,'store']);
Route::get('deletee/{id}',[customerController::class,'deletee']);



/*
Route::get('/', function () {
    return view('login');
});
*/

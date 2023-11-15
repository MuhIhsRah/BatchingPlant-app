<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\sesiController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\driverController;
use App\Http\Controllers\materialController;
use App\Http\Controllers\matsetController;
use App\Http\Controllers\mixdesignController;
use App\Http\Controllers\truckController;
use App\Http\Controllers\controlController;
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

Route::middleware(['guest'])->group(function () {
    Route::get('/', [sesiController::class, 'index'])->name('login');
    Route::post('/', [sesiController::class, 'login']);
});
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [adminController::class, 'index']);
    Route::get('/admin/operator', [adminController::class, 'operator'])->middleware('userAkses:Operator');
    Route::get('/admin/supervisor', [adminController::class, 'supervisor'])->middleware('userAkses:Supervisor');
    Route::get('/logout', [sesiController::class, 'logout']);

    //page user
    Route::get('/user-settings', [sesiController::class, 'index4'])->middleware('userAkses:Supervisor');
    Route::get('/create-user', [sesiController::class, 'create4'])->middleware('userAkses:Supervisor');
    Route::post('store4', [sesiController::class, 'store4']);
    Route::get('delete4/{id}', [sesiController::class, 'delete4']);

    //page mix design
    Route::get('/mix-design', [mixdesignController::class, 'index6']);
    Route::get('/create-mixdesign', [mixdesignController::class, 'create6']);
    Route::post('store6', [mixdesignController::class, 'store6']);
    Route::get('delete6/{id}', [mixdesignController::class, 'delete6']);

    //page material settings
    Route::get('/material-settings', [matsetController::class, 'index5']);
    Route::get('/create-matset', [matsetController::class, 'create5']);
    Route::post('store5', [matsetController::class, 'store5']);
    Route::get('delete5/{id}', [matsetController::class, 'delete5']);

    //page material
    Route::get('/data-material', [materialController::class, 'index3']);
    Route::get('/create-material', [materialController::class, 'create3']);
    Route::post('store3', [materialController::class, 'store3']);
    Route::get('delete3/{id}', [materialController::class, 'delete3']);

    //page driver
    Route::get('/data-driver', [driverController::class, 'index2']);
    Route::get('/create-driver', [driverController::class, 'create2']);
    Route::post('store2', [driverController::class, 'store2']);
    Route::get('delete2/{id}', [driverController::class, 'delete2']);

    //page truck
    Route::get('/data-truck', [truckController::class, 'index1']);
    Route::get('/create-truck', [truckController::class, 'create1']);
    Route::post('store1', [truckController::class, 'store1']);
    Route::get('delete1/{id}', [truckController::class, 'delete1']);

    //page customer
    Route::get('/data-customer', [customerController::class, 'index']);
    Route::get('/create-customer', [customerController::class, 'create']);
    Route::post('store', [customerController::class, 'store']);
    Route::get('deletee/{id}', [customerController::class, 'deletee']);
    
Route::get('/control', [controlController::class, 'index7']);
Route::post('/postData', [controlController::class, 'postData']);
});
Route::get('/home', function () {
    return redirect('/admin');
});
/*
Route::get('/control', function () {
    return view('control');
});
*/


Route::get('/general-settings', function () {
    return view('generalsettings');
});
Route::get('/report', function () {
    return view('report');
});
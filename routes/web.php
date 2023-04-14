<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServiceScheduleController;

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

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
    
    Route::group(['prefix' => 'admin'], function () {
        // Admin Dashboard
        Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        
        Route::group(['prefix' => 'services'], function(){
            // Services
            Route::get('/', [ServiceController::class, 'index'])->name('services');
            Route::get('/{service}', [ServiceController::class, 'show'])->name('services.show');
            Route::get('/create', [ServiceController::class, 'create'])->name('services.create');
            Route::post('/store', [ServiceController::class, 'store'])->name('services.store');
            Route::delete('/{service}', [ServiceController::class, 'destroy'])->name('services.destroy');
            // Services Schedules
            Route::group(['prefix' => '/{service}/schedules'], function(){
                Route::get('/', [ServiceScheduleController::class, 'index'])->name('schedule.index');
                Route::get('/{schedule}', [ServiceScheduleController::class, 'show'])->name('schedule.show');
                Route::get('/edit', [ServiceScheduleController::class, 'edit'])->name('schedule.edit');
                Route::post('/store', [ServiceScheduleController::class, 'store'])->name('schedule.store');
            });
        });
    });
});

require __DIR__.'/auth.php';

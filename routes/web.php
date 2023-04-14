<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookableSlotController;
use App\Http\Controllers\BookingPeopleController;
use App\Http\Controllers\ServiceScheduleController;

Route::group(['middleware' => ['auth', 'verified']], function () {
    // Dashboard
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
    
    // Admin Routes
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

    // User Routes
    Route::group(['prefix' => 'user'], function(){
        // User Dashboard
        Route::get('/', [UserController::class, 'dashboard'])->name('user.dashboard');

        Route::group(['prefix' => 'booking'], function(){
            Route::get('/', [BookableSlotController::class, 'index'])->name('bookable.index');
            Route::get('/{slot}/people', [BookingPeopleController::class, 'create'])->name('booking.people.create');
            Route::post('/{slot}/people', [BookingPeopleController::class, 'store'])->name('booking.people.store');
        });

        Route::get('/schedules', [BookingController::class, 'index'])->name('booking.index');
    });
});

require __DIR__.'/auth.php';

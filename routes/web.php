<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeachersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::prefix('/students')
    ->controller(StudentsController::class)
    ->group(function () {
        Route::get('/', 'index');
        Route::get('/create', 'create');
        Route::get('/{student}', 'show');

        Route::get('/{student}/edit', 'edit');
        Route::put('/{student}', 'update');

        Route::delete('/{student}', 'destroy');

        Route::post('/', 'store');
    });

Route::prefix('/teachers')
    ->controller(TeachersController::class)
    ->group(function () {
        Route::get('/', 'index');
        Route::get('/create', 'create');
        Route::get('/{teacher}', 'show');

        Route::get('/{teacher}/edit', 'edit');
        Route::put('/{teacher}', 'update');

        Route::delete('/{teacher}', 'destroy');

        Route::post('/', 'store');
    });
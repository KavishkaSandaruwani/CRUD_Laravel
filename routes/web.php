<?php

use App\Http\Controllers\CreateController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;




Route::get('/', [CreateController::class, 'index'])->name('home');


Route::prefix('create')->group(function(){
    Route::get('/', [CreateController::class, 'index'])->name('create');
    Route::post('/store', [CreateController::class, 'store'])->name('create.store');
    Route::get('/{task_id}delete', [CreateController::class, 'delete'])->name('create.delete');
    Route::get('/{task_id}edit', [CreateController::class, 'edit'])->name('create.edit');
    Route::post('/{task_id}update', [CreateController::class, 'update'])->name('create.update');
    Route::get('/{task_id}show', [CreateController::class, 'show'])->name('create.show');
});


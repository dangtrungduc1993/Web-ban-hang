<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('home', function () {
    return view('home');
});

Route::prefix('categories')->group(function () {
    Route::get('',[CategoryController::class, 'index'])->name('categories.index');
    Route::get('create',[CategoryController::class, 'create'])->name('categories.create');
    Route::post('create',[CategoryController::class, 'store'])->name('categories.store');
    Route::get('{id}/update',[CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('{id}/update',[CategoryController::class, 'update'])->name('categories.update');
    Route::get('{id}/detail',[CategoryController::class, 'show']);
    Route::delete('{id}/delete',[CategoryController::class, 'destroy'])->name('categories.delete');
});

<?php

use Illuminate\Support\Facades\Route;

/*--------------Tasks-------------------------------*/
Route::get('/', [App\Http\Controllers\HomeController::class, 'main'])->name('main');
Route::post('/create-task', [App\Http\Controllers\HomeController::class, 'createTask'])->name('createTask');
Route::get('/task/{id}', [App\Http\Controllers\HomeController::class, 'getTaskById']);
Route::get('/delete-task/{id}', [App\Http\Controllers\HomeController::class, 'deleteTask']);
Route::get('/edit-task/{id}', [App\Http\Controllers\HomeController::class, 'editTask']);
Route::post('/update-task', [App\Http\Controllers\HomeController::class, 'updateTask'])->name('updateTask');
Route::post('/filter-task', [App\Http\Controllers\HomeController::class, 'filterTask'])->name('filterTask');


/*--------------Sale-------------------------------*/
Route::get('/sale', [App\Http\Controllers\SaleController::class, 'sale'])->name('sale');
Route::post('/sale-coming', [App\Http\Controllers\ComingController::class, 'saleComing'])->name('saleComing');


/*--------------Warehouse-------------------------------*/
Route::get('/coming', [App\Http\Controllers\ComingController::class, 'coming'])->name('coming');
Route::post('/create-coming', [App\Http\Controllers\ComingController::class, 'createComing'])->name('createComing');
Route::post('/search', [App\Http\Controllers\ComingController::class, 'search'])->name('search');
Route::post('/test', [App\Http\Controllers\ComingController::class, 'test'])->name('test');
Route::post('/edit-coming', [App\Http\Controllers\ComingController::class, 'editComing'])->name('editComing');

/*------------------Remainder------------------------------------*/
Route::get('/remainder', [App\Http\Controllers\ComingController::class, 'remainder'])->name('remainder');
Route::get('/remainder/{id}', [App\Http\Controllers\ComingController::class, 'getRemainderById']);
Route::get('/edit-remainder/{id}', [App\Http\Controllers\ComingController::class, 'editremainder']);
Route::post('/filter-remainder', [App\Http\Controllers\ComingController::class, 'filterRemainder'])->name('filterRemainder');

/*--------------Clients-------------------------------*/
Route::get('/client', [App\Http\Controllers\ComingController::class, 'client'])->name('client');

/*--------------Analitika-------------------------------*/
Route::get('/analitika', [App\Http\Controllers\ComingController::class, 'analitika'])->name('analitika');
Route::get('/analitika-otchet', [App\Http\Controllers\ComingController::class, 'analitikaOtchet'])->name('analitikaOtchet');


/*--------------Qrcode and Barcode-------------------------------*/
Route::get('/qrcode-barcode', [App\Http\Controllers\ComingController::class, 'qrcode'])->name('qrcode');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

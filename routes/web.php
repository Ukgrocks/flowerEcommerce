<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignController;
use App\Http\Controllers\FlowerController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::post('remove/{id}',[FlowerController::class,'removeitem']);

Route::post('addtokart/{id}',[FlowerController::class,'dashboard']);
Route::get('addtokart',[FlowerController::class,'dashing']);

Route::get('display_flower/shopping/{shop_id}/{id}',[FlowerController::class,'shopdelete']);

Route::get('shopping',[FlowerController::class,'shop']);
Route::get('display_flower/{id}',[FlowerController::class,'display_flower']);

Route::view('save_flower','add_flower')->name('save_flower');
Route::post('save_flower',[FlowerController::class,'add_flower']);

Route::get('loggin',[SignController::class,'loggingout'])->name('loginpage');
Route::post('loggin',[SignController::class,'match']);

Route::view('signup','signup')->name('signuppage');
Route::post('signup',[SignController::class,'submission']);

Route::post('checkout',[FlowerController::class,'checkout']);

Route::get('check',[FlowerController::class,'clearkart']);
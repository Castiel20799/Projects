<?php

use Illuminate\Support\Facades\Route;
use Database\Factories\CategoryFactory;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;

Route::get('/',[CategoryController::class,'index'] );

Route::get('/categories/create',[CategoryController::class,'create'] );
Route::post('/categories/store',[CategoryController::class,'store'] );

Route::get('/categories/edit/{id}',[CategoryController::class,'edit'] );
Route::post('/categories/update/{id}',[CategoryController::class,'update'] );

Route::post('/categories/show/{id}',[CategoryController::class,'show'] );

Route::delete('/categories/delete/{id}',[CategoryController::class,'destroy'] );

Route::get('/register',[RegisterController::class,'create'] );
Route::post('/register',[RegisterController::class,'store'] );

Route::get('/login',[LoginController::class,'create'] );
Route::post('/login',[LoginController::class,'store'] );
Route::delete('/logout',[LoginController::class,'destroy'] );



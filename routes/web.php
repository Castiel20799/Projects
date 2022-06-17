<?php

use App\Http\Controllers\CategoryController;
use Database\Factories\CategoryFactory;
use Illuminate\Support\Facades\Route;

Route::get('/',[CategoryController::class,'index'] );

Route::get('/categories/create',[CategoryController::class,'create'] );
Route::post('/categories/store',[CategoryController::class,'store'] );

Route::get('/categories/edit/{id}',[CategoryController::class,'edit'] );
Route::post('/categories/update/{id}',[CategoryController::class,'update'] );

Route::post('/categories/show/{id}',[CategoryController::class,'show'] );

Route::delete('/categories/delete/{id}',[CategoryController::class,'destroy'] );



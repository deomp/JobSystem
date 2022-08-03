<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;

Route::group([
	'middleware' => 'api',
	'prefix' => 'auth'
    
], function (){
    //Authentication
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::post('/user-profile', [AuthController::class, 'userProfile']);

    
});

Route::group(['middleware' => 'api'], function ($router) {
    Route::resource('/categories', CategoryController::class);
    #Route::resource('/applications', ApplicationController::class);
});

//Home
Route::get('/home', [HomeController::class, 'index']);


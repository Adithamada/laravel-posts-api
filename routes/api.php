<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1')->group(function(){
    //post
    Route::get('post',[PostController::class,'index']);
    Route::post('post',[PostController::class,'store']);
    Route::get('post/{id}',[PostController::class,'show']);
    Route::put('post/{id}/update',[PostController::class,'update']);
    Route::delete('post/{id}/delete',[PostController::class,'destroy']);
    //category
    Route::get('category',[CategoryController::class,'index']);
    Route::post('category',[CategoryController::class,'store']);
    Route::get('category/{id}',[CategoryController::class,'show']);
    Route::put('category/{id}/update',[CategoryController::class,'update']);
    Route::delete('category/{id}/delete',[CategoryController::class,'destroy']);
});

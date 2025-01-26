<?php

use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1')->group(function(){
    Route::get('post',[PostController::class,'index']);
    Route::post('post',[PostController::class,'store']);
    Route::get('post/{id}',[PostController::class,'show']);
    Route::put('post/{id}/update',[PostController::class,'update']);
    Route::delete('post/{id}/delete',[PostController::class,'destroy']);
});

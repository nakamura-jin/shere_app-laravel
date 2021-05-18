<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::apiResource('/user', UserController::class);
Route::apiResource('/post', PostController::class);
Route::apiResource('/comment', CommentController::class);
Route::apiResource('/like', LikeController::class);

Route::get('/v1/users/user/{email}', [UserController::class, 'findUser']); 

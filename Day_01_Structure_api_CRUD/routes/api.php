<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('v1')->group(function () {
    //public rooute
    Route::middleware('throttle:10,1')->group(function () {
        Route::post('/register', [AuthController::class, 'register']);
        Route::post('/login', [AuthController::class, 'login']);
    });

    //protected route

    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::apiResource('posts', PostController::class);
        // Route::apiResource('/posts.comments', CommentController::class);
        Route::post('/posts/{post}/comments', [PostController::class, 'storeComment']);
        Route::get('/user/{id}', [UserController::class, 'show']);
        Route::post('/posts/{post}/comments', [CommentController::class, 'store']);
        Route::put('/comments/{comment}', [CommentController::class, 'update']);
        Route::delete('/comments/{comment}', [CommentController::class, 'destroy']);
    });

    // Route::get('/test-chunk', function () {

    //     \App\Models\Post::chunkById(100, function ($posts) {
    //         foreach ($posts as $post) {
    //             logger("Processing Post ID: " . $post->id);
    //         }
    //     });

    //     return "Done";
    // });

    Route::get('/test-cursor', function () {

        foreach (Post::cursor() as $post) {
            logger("Processing Post ID: " . $post->id);
        }

        return "Done";
    });
});
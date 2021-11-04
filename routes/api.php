<?php


//use App\Http\Controllers;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|

*/
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts' , [App\Http\Controllers\postController::class, 'index']);

Route::post('/post' , [App\Http\Controllers\postController::class, 'store']);

Route::get('/posts/{id}' , [App\Http\Controllers\postController::class, 'show']);

Route::put('/posts/{id}' , [App\Http\Controllers\postController::class, 'update']);

Route::delete('/posts/{id}' , [App\Http\Controllers\postController::class, 'destory']);

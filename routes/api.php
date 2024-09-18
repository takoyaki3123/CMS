<?php

use App\Http\Controllers\CarouselController;
use App\Http\Controllers\ClassListModelController;
use \App\Http\Controllers\ClassType;
use App\Http\Controllers\FileModelController;
use App\Http\Controllers\SuggestClassController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/classType',[ClassType::class,'index']);
Route::post('/classTypeUpload',[ClassType::class,'update']);
Route::post('/classList',[ClassListModelController::class,'findByTypeID']);
Route::post('/AllClassList',[ClassListModelController::class,'getAllClassList']);
Route::post('/classDetail',[ClassListModelController::class,'show']);
Route::post('/login',[UserController::class,'login']);
Route::post('/register',[UserController::class,'store']);
Route::post('/userUpdate',[UserController::class,'update']);
Route::post('/suggestClass',[SuggestClassController::class,'index']);
Route::post('/carouselImg',[CarouselController::class,'index']);
Route::post('/upload',[FileModelController::class,'store']);
Route::post('/homeVisionUpload',[CarouselController::class,'update']);
Route::post('/homeTrendUpload',[SuggestClassController::class,'update']);


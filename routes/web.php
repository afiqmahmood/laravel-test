<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login',[LoginController::class,'index']);
Route::post('login',[LoginController::class,'checklogin']);

Route::get('logout',[LoginController::class,'logout']);

Route::get('register',[RegisterController::class,'index']);
Route::post('register',[RegisterController::class,'registerUser']);

Route::get('profile',[ProfileController::class,'index']);
Route::post('profile',[ProfileController::class,'profileupdate']);

//Route::get('list-stories',[StoryController::class,'mainpage']);
Route::get('add-story',[StoryController::class,'addStory']);

Route::get('main',[StoryController::class,'index']);

Route::get('store',[StoryController::class,'store']);
Route::post('store',[StoryController::class,'storepost']);


Route::resource('stories', StoryController::class);

Route::get('/', function () {
    return redirect('/main');
});
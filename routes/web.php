<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\UserController;
Route::get('/', function () {
    return view('welcome');
});

Route::resource('users',UserController::class);
// Route::get('/users',[UserController::class,'index']);
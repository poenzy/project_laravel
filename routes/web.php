<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\DataController;

Route::get('/', [LandingPageController::class, 'index']);
Route::get('/', [DataController::class, 'index']);
// Route::get('/', function () {
//     return view('welcome');
// });

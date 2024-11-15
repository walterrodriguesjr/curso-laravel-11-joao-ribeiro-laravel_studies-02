<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'showView']);

Route::get('/setSession', [MainController::class, 'setSession']);
Route::get('/viewSession', [MainController::class, 'viewSession']);
Route::get('/clearSession', [MainController::class, 'clearSession']);

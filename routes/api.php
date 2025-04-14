<?php
use Illuminate\Support\Facades\Route;
// comes automatically from composer and no need to include in our folder structure.

use App\Http\Controllers\UserController;

Route::apiResource('users', UserController::class);

/**
 * CODE AUTHOR: AADYA PARASAR
 */

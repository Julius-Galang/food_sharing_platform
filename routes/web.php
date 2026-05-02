<?php

use App\Http\Controllers\FoodPostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FoodPostController::class, 'index']);

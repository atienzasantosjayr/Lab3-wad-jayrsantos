<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\AchievementsController;

Route::get('/', [ProfileController::class, 'index']);
Route::get('/goal', [GoalController::class, 'index']);
Route::get('/achievements', [AchievementsController::class, 'index']);



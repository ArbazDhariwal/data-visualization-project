<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataVisualizationController;



Route::get('/', [DataVisualizationController::class, 'index']);
Route::post('/execute-query', [DataVisualizationController::class, 'executequery']);

<?php

use Illuminate\Support\Facades\Route;

Route::post('/evaluation', [\App\Http\Controllers\EvaluationController::class, 'store']);

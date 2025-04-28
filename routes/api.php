<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EvenementController;

Route::apiResource('evenements', EvenementController::class);



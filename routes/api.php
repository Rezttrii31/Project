<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaaController;

Route::apiResource('mahasiswaa', MahasiswaaController::class);
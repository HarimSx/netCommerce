<?php

use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

Route::get('/companies', [CompaniesController::class, 'index']);

Route::post('/tasks/create', [TasksController::class, 'store']);

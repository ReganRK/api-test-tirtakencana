<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MobileConfigController;
use App\Http\Controllers\CustomertthDetailController;
use App\Http\Controllers\CustomertthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/customers', [CustomerController::class, 'index']);
Route::get('/totalhadiah', [CustomertthDetailController::class, 'index']);
Route::put('/updateterima/{id}', [CustomertthController::class, 'updateReceivedSuccess']);
Route::put('/updatetolak/{id}', [CustomertthController::class, 'updateRecievedFail']);


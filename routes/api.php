<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DeviceRegistrationController;
use App\Http\Controllers\Api\SyncController;
use App\Http\Controllers\Api\ApiStatusController;
use App\Http\Controllers\Api\SyncJsonDecodeController;




Route::post('/device', [DeviceRegistrationController::class, 'handleDevice']);
Route::post('/sync', [SyncController::class, 'store']);
Route::get('/status', [ApiStatusController::class, 'getStatus']);
Route::post('/syncjsondecode', [SyncJsonDecodeController::class, 'syncData']);

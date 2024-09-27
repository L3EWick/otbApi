<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\JsonResponse;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiStatusController extends Controller
{
    public function getStatus(): JsonResponse
    {
        return response()->json(['online' => true], 200);
    }
}

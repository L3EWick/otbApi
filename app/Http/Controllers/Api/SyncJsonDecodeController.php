<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\QuantidadeLocal;
use Illuminate\Support\Facades\Validator;

class SyncJsonDecodeController extends Controller
{
    public function syncData(Request $request)
    {
        $validatedData = $request->validate([
            'quantity' => 'required|integer',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'uniqueId' => 'required|string|exists:registered_devices,uuid',
            'name' => 'required|string',
        ]);

        $existingData = QuantidadeLocal::where('quantity', $validatedData['quantity'])
            ->where('latitude', $validatedData['latitude'])
            ->where('longitude', $validatedData['longitude'])
            ->where('uniqueId', $validatedData['uniqueId'])
            ->first();

        if ($existingData) {
            return; 
        }

        $quantidadeLocal = QuantidadeLocal::create([
            'quantity' => $validatedData['quantity'],
            'latitude' => $validatedData['latitude'],
            'longitude' => $validatedData['longitude'],
            'uniqueId' => $validatedData['uniqueId'],
            'nome' => $validatedData['name'],
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Cadastro salvo com sucesso!',
            'data' => $quantidadeLocal,
        ], 201);
    }
}
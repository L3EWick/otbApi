<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\QuantidadeLocal;
use Illuminate\Support\Facades\Validator;

class SyncController extends Controller
{
    public function store(Request $request)
    {
        // Validar os dados da requisição
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|string',
            'latitude' => 'required|string',
            'longitude' => 'required|string',
            'uniqueId' => 'required|string|exists:registered_devices,uuid',
            'name' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Dados inválidos.',
                'errors' => $validator->errors(),
            ], 422);
        }

        $existingData = QuantidadeLocal::where('quantity', $request->quantity)
            ->where('latitude', $request->latitude)
            ->where('longitude', $request->longitude)
            ->where('uniqueId', $request->uniqueId)
            ->first();

        if ($existingData) {
            return; 
        }


        $quantidadeLocal = QuantidadeLocal::create([
            'quantity' => $request->quantity,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'uniqueId' => $request->uniqueId,
            'nome' => $request->name,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Cadastro salvo com sucesso!',
            'data' => $quantidadeLocal,
        ], 201);
    }
}
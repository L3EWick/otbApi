<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\UnregisteredDevice;
use App\Models\RegisteredDevice;
use App\Http\Controllers\Controller;

class DeviceRegistrationController extends Controller
{
    public function handleDevice(Request $request)
    {
        $uniqueId = $request->input('uniqueId');

        if (empty($uniqueId)) {
            $uniqueId = Str::random(8);
            UnregisteredDevice::create(['uuid' => $uniqueId]);

            return response()->json([
                'uniqueId' => $uniqueId,
                'message' => 'Por favor, contate a administração para registrar o dispositivo.'
            ]);
        }

        $registeredDevice = RegisteredDevice::where('uuid', $uniqueId)->first();

        if ($registeredDevice) {
            return response()->json([
                'uniqueId' => $registeredDevice->uuid,
                'id' => $registeredDevice->id,
                'nome' => $registeredDevice->nome,
                'cpf' => $registeredDevice->cpf,
                'telefone' => $registeredDevice->telefone,
                'registered' => true,
                'message' => 'ID encontrado e registrado.'
            ]);
        } else {
            return response()->json([
                'message' => 'Dispositivo não registrado. Por favor, contate a administração para registrar o dispositivo.'
            ], 404);
        }
    }
}

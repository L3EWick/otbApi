<?php

namespace App\Http\Controllers;
use App\Models\UnregisteredDevice;
use App\Models\RegisteredDevice;
use Illuminate\Http\Request;

class RegisterDeviceController extends Controller
{
    public function index(){
        $registered = RegisteredDevice::all();

        return view('pages.registerDevice.index', compact('registered'));
    }
    public function create(){
        $uuids = UnregisteredDevice::all();

        return view('pages.registerDevice.create', compact('uuids'));
    }
    public function store(Request $request)
    {
        $device = new RegisteredDevice;
        $device->uuid = $request->uuid;
        $device->cpf = $request->cpf;
        $device->telefone = $request->telefone;
        $device->nome = $request->nome;
    
        $device->save();
    
        $unregistered = UnregisteredDevice::where('uuid', $request->uuid)->first();
    
        if ($unregistered) {
            $unregistered->delete();
        }
    
        return redirect()->route('registerdevice');
    }
    
}

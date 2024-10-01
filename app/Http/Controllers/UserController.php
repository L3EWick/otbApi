<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('pages.usuario.index', compact('users'));
    }

    public function create()
    {
        return view('pages.usuario.create');
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->name  = $request->name;
        $user->email = $request->email;
        $user->nivel = $request->nivel;
        $user->password = 'pmm123456';
        
        $user->save();

        return redirect('/user'); 
    }
    
    public function edit($id)
    {
        $usuario = User::find($id);

        if (Auth::user()->nivel == "User") {
            return redirect('/user')->with('error', 'Você não pode acessar essa rota!');
        }

        return view('pages.usuario.edit', compact('usuario'));
    }

    
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name  = $request->name;
        $user->email = $request->email;
        $user->nivel = $request->nivel;
        $user->save();
        
        return redirect(url('/user'));
    }

    public function resetSenha($id)
    {
        $user = User::find($id);
        $user->password = 'pmm123456';
        $user->save();
        return redirect(url('/user'));
    }

    public function AlteraSenha()
    {
        $usuario = Auth::user();
        return view('pages.usuario.altera_senha', compact('usuario'));    
    }

        public function postalterasenha(Request $request)
    {
        $this->validate($request, [
            'password_atual'        => 'required',
            'password'              => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6'
        ]);
        $usuario = User::find(Auth::user()->id);
        if (Hash::check($request->password_atual, $usuario->password))
        {
            $usuario->update(['password' => bcrypt($request->password)]);            
            return redirect('/')->with('sucesso','Senha alterada com sucesso.');
        }
        else
        {
            return back()->withErrors('Senha atual não confere');
        }
    }


}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Inscricao;

class ValidaRotaMeuVoto
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $cpf = substr($request->path(), 8);
        // dd($cpf);

        $votacao = Inscricao::where('tipo','!=', 'OBSERVADOR')->where('cpf',$cpf)->get();

        if(count($votacao) > 0){
            return $next($request);
        }else{
            return redirect('/votacao');
        }

    }
}

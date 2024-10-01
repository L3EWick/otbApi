<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Exports\ConfirmadosExport;
use App\Exports\RecusadosExport;
use App\Exports\VotacaoFinalExport;

use Excel;


class ExportController extends Controller
{
   public function index()
   {

    return view('pages.export.index');
   }


   public function recusados()
   {
    return Excel::download(new RecusadosExport, 'recusados.xlsx');
   }

   public function confirmados()
   {
     return Excel::download(new ConfirmadosExport, 'confirmados.xlsx');
   }

   public function votacaofinal()
   {
    return Excel::download(new VotacaoFinalExport, 'final.xlsx');
   }
}

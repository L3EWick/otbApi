<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Inscricao;
use App\Models\Votacao;
use App\Models\Gts;
use carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {


    
        return view('welcome');
    }


}


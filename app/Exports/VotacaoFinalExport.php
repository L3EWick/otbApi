<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;


class VotacaoFinalExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $resultado = DB::table('votacao as v')
                    ->select(
                        'v.nome_voto',
                        DB::raw('COUNT(v.nome_voto) as quantidade_votos'),
                        'i.foto'
                    )
                    ->leftJoin('inscricao as i', 'v.nome_voto', '=', 'i.nome')
                    ->groupBy('v.nome_voto', 'i.foto')
                    ->orderByDesc('quantidade_votos')
                    ->get();


        return $resultado;
    }

    public function map($delegados): array
    {
        return [
            $delegados->nome_voto,
            $delegados->quantidade_votos,
        ];
    }

    public function headings(): array
    {
        return [
            'Nome',
            'Quantidades de Votos',
        ];
    }
}

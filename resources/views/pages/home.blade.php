@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Home'])

    <div class="container-fluid py-4">
        <div class="row">

            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-2">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total de Candidatos a Delegado</p>
                                    <h5 class="font-weight-bolder">
                                        {{$qtd_total_delegado}}
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-2">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total de Participantes</p>
                                    <h5 class="font-weight-bolder">
                                        {{$qtd_total_participante}}
                                    </h5>                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-2">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total de Observadores</p>
                                    <h5 class="font-weight-bolder">
                                        {{$qtd_total_observador}}
                                    </h5>                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-2">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total de Convidados</p>
                                    <h5 class="font-weight-bolder">
                                        {{$qtd_total_convidado}}
                                    </h5>                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-2">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total de Candidatos a Delegados Aptos</p>
                                    <h5 class="font-weight-bolder">
                                        {{$qtd_delegado_apt}}
                                    </h5>                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-2">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total de Inscrições</p>
                                    <h5 class="font-weight-bolder">
                                        {{$qtd_total_inscricoes}}
                                    </h5>                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-2">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Quantidade de Inscrições GT 1</p>
                                    <h5 class="font-weight-bolder">
                                        {{$qtd_gt_1}}
                                    </h5>                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-2">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Quantidade de Inscrições GT 2</p>
                                    <h5 class="font-weight-bolder">
                                        {{$qtd_gt_2}}
                                    </h5>                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-2">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Quantidade de Inscrições GT 3</p>
                                    <h5 class="font-weight-bolder">
                                        {{$qtd_gt_3}}
                                    </h5>                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-2">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Quantidade de Inscrições GT 4</p>
                                    <h5 class="font-weight-bolder">
                                        {{$qtd_gt_4}}
                                    </h5>                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-2">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Quantidade de Inscrições GT 5</p>
                                    <h5 class="font-weight-bolder">
                                        {{$qtd_gt_5}}
                                    </h5>                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           

            

          
                       
        </div>
    </div>
@endsection

@push('js')
@endpush

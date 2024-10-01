@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
<link rel="stylesheet" href="assets/css/jquery.dataTables.min.css"> 
@section('content')
    @include('layouts.navbars.auth.topnav')
    <div class="container-fluid px-2">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12 mb-lg-0 mb-4">
                    <div class="card mt-4">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-6 d-flex align-items-center">
                                    <h6 class="mb-0">Alteração de Permissão</h6>
                                </div>
                                `
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="row">
                            
                                <form  action="{!! route('user.update', $usuario->id) !!}" method="post">
                                    {!! method_field('PUT') !!}
                                    {{ csrf_field() }}
                                    
                                    <div class="row">

                                        <div class="form-group row">
                                            <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                                <label class="control-label" >Nome</label>
                                                <input type="text" id="name" name="name"value="{{$usuario->name}}"  class="form-control" placeholder="Nome" minlength="4" maxlength="100" required >	
                                            </div>

                                            <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                                <label class="control-label" >Email</label>
                                                <input type="email" id="email" name="email" value="{{$usuario->email}}" class="form-control" placeholder="Email" minlength="4" maxlength="100" required >	
                                            </div>
                                            <div class="form-group col-md-4 col-sm-4 col-xs-12">     
                                                    <label class="control-label" >Permissão</label>
                                                    <select name="nivel" id="nivel" class="form-control"  required>
                                                    
                                                        @if (Auth::user()->nivel == "Admin")
                                                            <option value="User">User</option>
                                                            <option selected value="Admin">Admin</option>
                                                        @endif
                                                        @if (Auth::user()->nivel == "Super-Admin")
                                                            <option value="User">User</option>
                                                            <option value="Admin">Admin</option>
                                                            <option selected value="Super-Admin">Super-Admin</option>
                                                        @endif
                                                        @if ($usuario->nivel == "User")
                                                            <option selected value="User">User</option>
                                                            <option value="Admin">Admin</option>
                                                        @endif
                                                    
                                                    
                                                    
                                                    </select>
                                            </div>

                                           </div>
                                                                            
                                    </div>
                                    
                                    <div class="ln_solid"> </div>
                                    <div class="footer text-center"> {{-- col-md-3 col-md-offset-9 --}}
                                        <button type="submit" id="btn_salvar" class="botoes-acao btn btn-round btn-success ">
                                            <span class="icone-botoes-acao mdi mdi-send"></span>
                                            <span class="texto-botoes-acao"> SALVAR </span>
                                            <div class="ripple-container"></div>
                                        </button>	
                                    
                                        <button id="btn_cancelar" class="botoes-acao btn btn-round btn-primary" >
                                            <span class="icone-botoes-acao mdi mdi-backburger"></span>   
                                            <span class="texto-botoes-acao"> CANCELAR </span>
                                            <div class="ripple-container"></div>
                                        </button>
                                    
                                        
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection

@push('scripts')

	<script type="text/javascript">
		$(document).ready(function() {
			var tempo = 0;
			var incremento = 500;
			
			@if (session('sucesso'))
				swal('Parabéns!', '{{ session('sucesso') }}' ,'success');
			@endif
			
	      {{-- Testar se há algum erro, e mostrar a notificação --}}
			var tempo = 0;
			var incremento = 500;
	      @if ($errors->any())
	         @foreach ($errors->all() as $error)
	            setTimeout(function(){funcoes.notificationRight("top", "right", "danger", "{{ $error }}"); }, tempo);
	            tempo += incremento;
	         @endforeach
			@endif

		});

		//botão de cancelar
		$("#btn_cancelar").click(function(){
			event.preventDefault();
			window.location.href = "{{ URL::route('home') }}"; 
		});


	</script>


@endpush





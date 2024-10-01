@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
<link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.css" rel="stylesheet">

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
                                    <h6 class="mb-0">Novo Usuario</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="row">
                                <form action="{{url('/registerdevice/store')}}"  method="POST"> 
                                    {{ csrf_field() }}

                                    <div class="card-body pt-4 p-3">
                                        
                                        <div class="form-group row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                                      <label for="uuid" class="control-label">Token</label>
                                                      <select id="uuid" name="uuid" >
                                                          <option value="">Digite o Token...</option>
                                                          @foreach($uuids as $uuid)
                                                                  <option value="{{ $uuid->uuid }}">{{ $uuid->uuid }}</option>
=                                                          @endforeach
                                                      </select>
                                                  </div>
                                              </div>
                                              <div class="col-md-6">
                                                <label class="control-label" >Nome</label>
                                                <input type="text" id="nome" name="nome"  class="form-control" placeholder="Nome" minlength="4" maxlength="100" required >	
                                              </div>
                                              <div class="col-md-6">
                                                <label class="control-label" >CPF</label>
                                                <input type="text" id="cpf" name="cpf"  class="form-control" placeholder="000.000.000-00" minlength="4" maxlength="14" required >	
                                              </div>
                                              <div class="col-md-6">
                                                <label class="control-label" >Telefone</label>
                                                <input type="text" id="telefone" name="telefone"  class="form-control" placeholder="(21)90000-0000" minlength="4" maxlength="15" required >	
                                              </div>
                                          </div>

                                         

                                    </div>

                                
    
                            
                                
                                <div class="clearfix"></div>
                                    <div class="ln_solid" style="align-itens: center;"> </div>
                                        <div class="footer"> 
                                            <button hidden type="submit"></button>

                                    
                                            <button type="submit" id="btn_salvar" class="botoes-acao btn btn-round btn-success ">
                                                <span class="icone-botoes-acao mdi mdi-send"></span>
                                                <span class="texto-botoes-acao"> SALVAR </span>
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

@push('js')
<script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>

<script>
  new TomSelect('#uuid', {
            maxItems: 1,
            plugins: {
                remove_button: {
                    title: 'Remover o item',
                }
            },
            sortField: {
                field: 'text',
                direction: 'asc'
            },
        });
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const cpfInput = document.getElementById('cpf');
    const phoneInput = document.getElementById('telefone');

    cpfInput.addEventListener('input', function() {
        this.value = this.value
            .replace(/\D/g, '') 
            .replace(/(\d{3})(\d)/, '$1.$2') 
            .replace(/(\d{3})(\d)/, '$1.$2') 
            .replace(/(\d{3})(\d{1,2})$/, '$1-$2');
    });

    phoneInput.addEventListener('input', function() {
    this.value = this.value
        .replace(/\D/g, '') 
        .replace(/^(\d{2})(\d)/, '($1) $2') 
        .replace(/(\d{5})(\d)/, '$1-$2')
        .replace(/(-\d{4})\d+?$/, '$1'); 
});

});
</script>



@endpush

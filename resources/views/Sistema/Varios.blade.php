@extends('Plantilla/plantilla')

@section('content')
    <div id="ribbon">
        <ol class="breadcrumb">
            <li><a href="{{ url("home")}}">Inicio</a></li>
            <li>Varios</li>
        </ol>
    </div>
    <!-- Small boxes (Stat box) -->
    <div class="container">
        <div class="row" >
          <div class="col-md-12">
              <div class="panel panel-default" id="panel-profin">
                  <div class="panel-heading text-center textoHeader">Registro Varios {{ $year }}</div>
                  <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> Hay problemas con tus Entradas<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/varios/save') }}">
                                {{ csrf_field() }}
                                <input type="text" name="_year" hidden value="{{ $year }}">
                                <div class="form-group">
                                    <label for="tipo" class="col-md-4 control-label">Varios: </label>
                                    <div class="col-md-6">
                                      <select class="form-control" name="tipo">
                                          <option value="Nacional">Nacional</option>
                                          <option value="Internacional">Internacional</option>
                                      </select>
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('nombre') ? ' has-error' : '' }}">
                                    <label for="nombre" class="col-md-4 control-label">Descripcion: </label>

                                    <div class="col-md-6">
                                        <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required>

                                        @if ($errors->has('nombre'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('nombre') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('numero') ? ' has-error' : '' }}">
                                    <label for="numero" class="col-md-4 control-label">Cantidad: </label>

                                    <div class="col-md-6">
                                        <input id="numero" type="text" class="form-control" name="numero" value="{{ old('numero') }}" required>

                                        @if ($errors->has('numero'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('numero') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('costo') ? ' has-error' : '' }}">
                                    <label for="costo" class="col-md-4 control-label">Costo: </label>

                                    <div class="col-md-6">
                                        <input id="costo" type="text" class="form-control" name="costo" value="{{ old('costo') }}" required>
                                        @if ($errors->has('costo'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('costo') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            <i class="fa fa-btn fa-user"></i> Registrar
                                        </button>
                                    </div>
                                </div>
                            </form>
                        <br><br>
                        {{$success = Session::get('success')}}
                        @if ($success)
                            <div class="alert alert-success">
                                <strong>!!Felicidades!!</strong>Se Creo el Varios Correctamente <br><br>
                            </div>
                        @endif
                    </div>
                </div>


            </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default" id="panel-profin">
                <div class="panel-heading text-center textoHeader">Detalle Sobepreso</div>
                <div class="panel-body">
                  <form style="padding: 10px;">
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="ambos" checked>
                        Ambos
                      </label>
                    </div>
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="nacional">
                        Nacional
                      </label>
                    </div>
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="internacional">
                        Internacional
                      </label>
                    </div>
                  </form>
                  <table class="table  table-bordered table-striped" id="datos">
                      <thead>
                        <tr style="font-size: 14px;" class="info">
                          <th>Tipo</th>
                          <th>Nombre</th>
                          <th>Cantidad</th>
                          <th>Precio</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody id="datos">
                      <?php $total = 0; ?>
                      @foreach($trans as $t)
                         <tr>
                             <th>{{ $t->tipo}}</th>
                             <th>{{ $t->nombre }}</th>
                             <th>{{ $t->numero }}</th>
                             <th>{{ number_format($t->costo, 2) }}</th>
                             <th>{{ number_format($t->total, 2) }}</th>
                             <?php $total = $total + $t->total; ?>
                         </tr>
                       @endforeach
                       <tr>
                         <th></th>
                         <th></th>
                         <th></th>
                         <th>Total </th>
                         <th>{{ number_format($total, 2) }}</th>
                       </tr>
                      </tbody>
                  </table>
                </div>
            </div>
          </div>
        </div>
    </div>
@endsection
@push('scripts')
<script>
    $(function() {

      $( "input[type=radio]" ).on( "click", function() {
        if($( "input:checked" ).val() == "ambos"){
          <?php $total = 0; ?>
          $("#datos > tbody").html("");
          @foreach ($trans as $t)

            $('#datos > tbody:last-child').append('<tr><th>' + '{{ $t->tipo }}' + '</th>' +
                                                      '<th>' + '{{ $t->nombre }}' + '</th>' +
                                                      '<th>' + '{{ $t->numero }}' + '</th>' +
                                                      '<th>' + '{{ number_format($t->costo, 2) }}' + '</th>' +
                                                      '<th>' + '{{ number_format($t->total, 2) }}' + '</th></tr>');
                                                      <?php $total = $total + $t->total; ?>

          @endforeach
          $('#datos > tbody:last-child').append('<tr><th>' + '' + '</th>' +
                                                    '<th>' + '' + '</th>' +
                                                    '<th>' + '' + '</th>' +
                                                    '<th>' + 'Total: ' + '</th>' +
                                                    '<th>' + '{{ number_format($total, 2) }}' + '</th></tr>');
        }
        if($( "input:checked" ).val() == "nacional"){
          <?php $total = 0; ?>
          $("#datos > tbody").html("");
          @foreach ($trans as $t)
            @if($t->tipo == 'Nacional'){

            $('#datos > tbody:last-child').append('<tr><th>' + '{{ $t->tipo }}' + '</th>' +
                                                      '<th>' + '{{ $t->nombre }}' + '</th>'+
                                                      '<th>' + '{{ $t->numero }}' + '</th>' +
                                                      '<th>' + '{{ number_format($t->costo, 2) }}' + '</th>' +
                                                      '<th>' + '{{ number_format($t->total, 2) }}' + '</th></tr>');
                                                        <?php $total = $total + $t->total; ?>
            }
            @endif
          @endforeach
          $('#datos > tbody:last-child').append('<tr><th>' + '' + '</th>' +
                                                    '<th>' + '' + '</th>' +
                                                    '<th>' + '' + '</th>' +
                                                    '<th>' + 'Total: ' + '</th>' +
                                                    '<th>' + '{{ number_format($total, 2) }}' + '</th></tr>');
        }
        if($( "input:checked" ).val() == "internacional"){
          <?php $total = 0; ?>
          $("#datos > tbody").html("");
          @foreach ($trans as $t)
            @if($t->tipo == 'Internacional'){

            $('#datos > tbody:last-child').append('<tr><th>' + '{{ $t->tipo }}' + '</th>' +
                                                      '<th>' + '{{ $t->nombre }}' + '</th>' +
                                                      '<th>' + '{{ $t->numero }}' + '</th>' +
                                                      '<th>' + '{{ number_format($t->costo, 2) }}' + '</th>' +
                                                      '<th>' + '{{ number_format($t->total, 2) }}' + '</th></tr>');
                                                        <?php $total = $total + $t->total; ?>
            }
            @endif
          @endforeach
          $('#datos > tbody:last-child').append('<tr><th>' + '' + '</th>' +
                                                    '<th>' + '' + '</th>' +
                                                    '<th>' + '' + '</th>' +
                                                    '<th>' + 'Total: ' + '</th>' +
                                                    '<th>' + '{{ number_format($total, 2) }}' + '</th></tr>');
        }
        //console.log( $( "input:checked" ).val() + " is checked!" );
      });



    });
</script>
@endpush

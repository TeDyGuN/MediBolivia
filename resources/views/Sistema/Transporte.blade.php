@extends('Plantilla/plantilla')

@section('content')
    <div id="ribbon">
        <ol class="breadcrumb">
            <li><a href="{{ url("home")}}">Inicio</a></li>
            <li>Transporte</li>
        </ol>
    </div>
    <!-- Small boxes (Stat box) -->
    <div class="container">
        <div class="row" >
          <div class="col-md-12">
              <div class="panel panel-default" id="panel-profin">
                  <div class="panel-heading text-center textoHeader">Registro Transporte</div>
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
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/transporte/save') }}">
                                {{ csrf_field() }}
                                <input type="text" name="_year" hidden value="{{ $year }}">
                                <div class="form-group">
                                    <label for="tipo" class="col-md-4 control-label">Tipo </label>
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
                                        <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">

                                        @if ($errors->has('nombre'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('nombre') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('salida') ? ' has-error' : '' }}">
                                    <label for="salida" class="col-md-4 control-label">Salida: </label>

                                    <div class="col-md-6">
                                        <input id="salida" type="text" class="form-control" name="salida" value="{{ old('salida') }}">

                                        @if ($errors->has('salida'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('salida') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('llegada') ? ' has-error' : '' }}">
                                    <label for="llegada" class="col-md-4 control-label">Llegada: </label>

                                    <div class="col-md-6">
                                        <input id="llegada" type="text" class="form-control" name="llegada" value="{{ old('llegada') }}">

                                        @if ($errors->has('llegada'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('llegada') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('numero') ? ' has-error' : '' }}">
                                    <label for="numero" class="col-md-4 control-label">Cantidad: </label>

                                    <div class="col-md-6">
                                        <input id="numero" type="text" class="form-control" name="numero" value="{{ old('numero') }}">

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
                                        <input id="costo" type="text" class="form-control" name="costo" value="{{ old('costo') }}">
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
                                <strong>!!Felicidades!!</strong>Se Creo el Transporte Correctamente <br><br>
                            </div>
                        @endif
                    </div>
                </div>


            </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default" id="panel-profin">
                <div class="panel-heading text-center textoHeader">Detalle Transporte</div>
                <div class="panel-body">
                  <table class="table  table-bordered table-striped">
                      <thead>
                        <tr style="font-size: 14px;" class="info">
                          <th>Tipo</th>
                          <th>Nombre</th>
                          <th>Salida</th>
                          <th>Llegada</th>
                          <th>Cantidad</th>
                          <th>Precio</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach($trans as $t)
                           <tr>
                               <th>{{ $t->tipo}}</th>
                               <th>{{ $t->nombre }}</th>
                               <th>{{ $t->salida }}</th>
                               <th>{{ $t->llegada }}</th>
                               <th>{{ $t->numero }}</th>
                               <th>{{ $t->costo }}</th>
                               <th>{{ $t->total }}</th>
                           </tr>
                       @endforeach
                      </tbody>
                  </table>
                </div>
            </div>
          </div>
        </div>
    </div>
@endsection

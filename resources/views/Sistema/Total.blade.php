@extends('Plantilla/plantilla')

@section('content')
    <style>

    </style>
    <div id="ribbon">
        <ol class="breadcrumb">
            <li><a href="{{ url("home")}}">Inicio</a></li>
            <li>Total</li>
        </ol>
    </div>
    <!-- Small boxes (Stat box) -->
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="">
              <a href="{{ url('/reporte/2018')}}"><button type="button" class="btn btn-warning">
                  Generar Reporte
              </button></a>
            </div>
            <div class="panel panel-default" id="panel-profin">
                <div class="panel-heading text-center textoHeader">Detalle Total</div>
                <div class="panel-body">
                  <table class="table  table-bordered table-striped" id="datos">

                      <tr >
                        <th>Transporte Nacional</th>
                        <td>{{ number_format($t_transna, 2) }}</td>
                      </tr>
                      <tr >
                        <th>Transporte Internacional</th>
                        <td>{{ number_format($t_transin, 2) }}</td>
                      </tr>
                      <tr class="info">
                        <th >Total Transporte </th>
                        <td>{{ number_format($t_trans, 2) }}</td>
                      </tr>
                      <tr >
                        <th>Impuesto Nacional</th>
                        <td>{{ number_format($t_impna, 2) }}</td>
                      </tr>
                      <tr >
                        <th>Impuesto Internacional</th>
                        <td>{{ number_format($t_impin, 2) }}</td>
                      </tr>
                      <tr class="info" >
                        <th>Total Impuesto </th>
                        <td>{{ number_format($t_imp, 2) }}</td>
                      </tr>
                      <tr >
                        <th>Sobrepeso Nacional</th>
                        <td>{{ number_format($t_sobna, 2)  }}</td>
                      </tr>
                      <tr >
                        <th>Sobrepeso Internacional</th>
                        <td>{{ number_format($t_sobin, 2)  }}</td>
                      </tr>
                      <tr class="info">
                        <th>Total Sobrepeso </th>
                        <td>{{ number_format($t_sob, 2) }}</td>
                      </tr>
                      <tr >
                        <th>Hotel 1</th>
                        <td>{{ number_format($t_hotel1, 2) }}</td>
                      </tr>
                      <tr >
                        <th>Hotel 2</th>
                        <td>{{ number_format($t_hotel2, 2) }}</td>
                      </tr>
                      <tr >
                        <th>Hotel 3</th>
                        <td>{{ number_format($t_hotel3, 2) }}</td>
                      </tr>
                      <tr >
                        <th>Hotel 4</th>
                        <td>{{ number_format($t_hotel4, 2) }}</td>
                      </tr>
                      <tr class="info">
                        <th>Total Hotel </th>
                        <td>{{ number_format($t_hotel, 2) }}</td>
                      </tr>
                      <tr >
                        <th>Varios Nacional</th>
                        <td>{{ number_format($t_variosna, 2) }}</td>
                      </tr>
                      <tr >
                        <th>Varios Internacional</th>
                        <td>{{ number_format($t_variosin, 2) }}</td>
                      </tr>
                      <tr class="info">
                        <th>Total Varios </th>
                        <td>{{ number_format($t_varios, 2) }}</td>
                      </tr>
                      <tr class="success">
                        <th>Total</th>
                        <td>{{ number_format($t_total, 2) }}</td>
                      </tr>
                  </table>
                </div>
            </div>
          </div>
        </div>
    </div>
@endsection

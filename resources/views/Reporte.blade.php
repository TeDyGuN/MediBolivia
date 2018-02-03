<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reportes</title>
    <!-- Toastr style -->
    <link href="css/toastr.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Gritter -->
    <link href="css/jquery.gritter.css" rel="stylesheet">

</head>
<body>
<img src="img/foblogonew1.png" class="img-fluid pull-xs-left" alt="..." width="70px">
<p class="pull-xd-left"><i>Friends of Bolivia</i></p>
<h2 align="center">Reporte de Viaje</h2>
<div  align="center">
  <h3>Transporte</h3>
  <table class="table  table-bordered table-striped" id="datos">
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
      <tbody id="datos">
      <?php $total = 0; ?>
      @foreach($trans as $t)
         <tr>
             <th>{{ $t->tipo}}</th>
             <th>{{ $t->nombre }}</th>
             <th>{{ $t->salida }}</th>
             <th>{{ $t->llegada }}</th>
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
         <th></th>
         <th></th>
         <th>Total </th>
         <th>{{ number_format($total, 2) }}</th>
       </tr>
      </tbody>
  </table>
  <h3>Impuestos</h3>
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
      @foreach($impuesto as $t)
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
  <h3>Sobrepeso</h3>
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
      @foreach($sob as $t)
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
  <h3>Varios</h3>
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
      @foreach($varios as $t)
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
  <h3>Hotel 1</h3>
  <table class="table  table-bordered table-striped" id="datos">
      <thead>
        <tr style="font-size: 14px;" class="info">
          <th>Nombre</th>
          <th>Cantidad</th>
          <th>Precio</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody id="datos">
      <?php $total = 0; ?>
      @foreach($hotel1 as $t)
         <tr>
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
         <th>Total </th>
         <th>{{ number_format($total, 2) }}</th>
       </tr>
      </tbody>
  </table>
  <h3>Hotel 2</h3>
  <table class="table  table-bordered table-striped" id="datos">
      <thead>
        <tr style="font-size: 14px;" class="info">
          <th>Nombre</th>
          <th>Cantidad</th>
          <th>Precio</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody id="datos">
      <?php $total = 0; ?>
      @foreach($hotel2 as $t)
         <tr>
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
         <th>Total </th>
         <th>{{ number_format($total, 2) }}</th>
       </tr>
      </tbody>
  </table>
  <h3>Hotel 3</h3>
  <table class="table  table-bordered table-striped" id="datos">
      <thead>
        <tr style="font-size: 14px;" class="info">
          <th>Nombre</th>
          <th>Cantidad</th>
          <th>Precio</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody id="datos">
      <?php $total = 0; ?>
      @foreach($hotel3 as $t)
         <tr>
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
         <th>Total </th>
         <th>{{ number_format($total, 2) }}</th>
       </tr>
      </tbody>
  </table>
  <h3>Hotel 4</h3>
  <table class="table  table-bordered table-striped" id="datos">
      <thead>
        <tr style="font-size: 14px;" class="info">
          <th>Nombre</th>
          <th>Cantidad</th>
          <th>Precio</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody id="datos">
      <?php $total = 0; ?>
      @foreach($hotel4 as $t)
         <tr>
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
         <th>Total </th>
         <th>{{ number_format($total, 2) }}</th>
       </tr>
      </tbody>
  </table>
  <h3>Total</h3>
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
<br><br><br>

<?php
date_default_timezone_set('America/La_Paz');
$hoy = getdate();
echo("<pre>");
echo("<p>");
echo("Reporte Generado en Fecha: ".$hoy['mday']."/".$hoy['mon']."/".$hoy['year']."     ".$hoy['hours'].":".$hoy['minutes'].":".$hoy['seconds']);
echo("</p>");
echo("</pre>");
?>
</body>
</html>

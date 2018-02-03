<?php namespace App\Http\Controllers\Sistema;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Transporte;
use App\Impuesto;
use App\Sobrepeso;
use App\Varios;
use App\Hotel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Redirect;
//use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
//use Barryvdh\DomPDF\PDF;
//use Barryvdh\DomPDF;
use Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF;
class VariosController extends Controller{

  public function getVarios($year){
    $trans = Varios::where('year', $year)
            ->get();
  	return view('Sistema/Varios', compact('trans', 'year'));
  }
  public function saveVarios(Request $request){
    $cor = new Varios();
    $cor->tipo = $request->tipo;
    $cor->nombre = $request->nombre;
    $cor->year = $request->_year;
    $cor->numero = $request->numero;
    $cor->costo = $request->costo;
    $cor->total = $request->numero * $request->costo;
    $cor->save();
    return back()->withInput();
  }
  public function getTotal($year){
    $trans = Transporte::where('year', $year)
            ->get();
    $varios = Varios::where('year', $year)
            ->get();
    $impuesto = Impuesto::where('year', $year)
            ->get();
    $sob = Sobrepeso::where('year', $year)
            ->get();
            $hotel = Hotel::where('year', $year)
                    ->get();
    $t_trans = 0.0;
    $t_transin = 0.0;
    $t_transna = 0.0;
    $t_varios = 0.0;
    $t_variosin = 0.0;
    $t_variosna = 0.0;
    $t_imp = 0.0;
    $t_impin = 0.0;
    $t_impna = 0.0;
    $t_sob = 0.0;
    $t_sobin = 0.0;
    $t_sobna = 0.0;
    $t_hotel = 0.0;
    $t_hotel1 = 0.0;
    $t_hotel2 = 0.0;
    $t_hotel3 = 0.0;
    $t_hotel4 = 0.0;
    foreach ($trans as $t) {
      if($t->tipo == "Nacional")
      {
        $t_transna = $t_transna + $t->total;
      }
      else{
        $t_transin = $t_transin + $t->total;
      }
      $t_trans = $t_trans + $t->total;
    }
    foreach ($varios as $t) {
      if($t->tipo == "Nacional")
      {
        $t_variosna = $t_variosna + $t->total;
      }
      else{
        $t_variosin = $t_variosin + $t->total;
      }
      $t_varios = $t_varios + $t->total;
    }
    foreach ($impuesto as $t) {
      if($t->tipo == "Nacional")
      {
        $t_impna = $t_impna + $t->total;
      }
      else{
        $t_impin = $t_impin + $t->total;
      }
      $t_imp = $t_imp + $t->total;
    }
    foreach ($sob as $t) {
      if($t->tipo == "Nacional")
      {
        $t_sobna = $t_sobna + $t->total;
      }
      else{
        $t_sobin = $t_sobin + $t->total;
      }
      $t_sob = $t_sob + $t->total;
    }
    foreach ($hotel as $t) {
      if($t->number == "1")
      {
        $t_hotel1 = $t_hotel1 + $t->total;
      }
      elseif($t->number == "2"){
        $t_hotel2 = $t_hotel2 + $t->total;
      }
      elseif($t->number == "3"){
        $t_hotel3 = $t_hotel4 + $t->total;
      }
      elseif($t->number == "4"){
        $t_hotel3 = $t_hotel4 + $t->total;
      }
      $t_hotel = $t_hotel + $t->total;
    }
    $t_total = $t_trans + $t_varios + $t_imp + $t_sob + $t_hotel;
  	return view('Sistema/Total', compact('t_trans', 't_transin', 't_transna', 't_varios', 't_variosin', 't_variosna' ,
    't_imp', 't_impin', 't_impna', 't_sob', 't_sobin', 't_sobna', 't_total', 't_hotel', 't_hotel1', 't_hotel2', 't_hotel3', 't_hotel4'));
  }
  public function getReporte($year)
  {
      $trans = Transporte::where('year', $year)
            ->get();
      $varios = Varios::where('year', $year)
              ->get();
      $impuesto = Impuesto::where('year', $year)
              ->get();
      $sob = Sobrepeso::where('year', $year)
              ->get();
      $hotel = Hotel::where('year', $year)
              ->get();
      $hotel1 = Hotel::where('year', $year)
              ->where('number', '1')
              ->get();
      $hotel2 = Hotel::where('year', $year)
              ->where('number', '2')
              ->get();
      $hotel3 = Hotel::where('year', $year)
              ->where('number', '3')
              ->get();
      $hotel4 = Hotel::where('year', $year)
              ->where('number', '4')
              ->get();
      $t_trans = 0.0;
      $t_transin = 0.0;
      $t_transna = 0.0;
      $t_varios = 0.0;
      $t_variosin = 0.0;
      $t_variosna = 0.0;
      $t_imp = 0.0;
      $t_impin = 0.0;
      $t_impna = 0.0;
      $t_sob = 0.0;
      $t_sobin = 0.0;
      $t_sobna = 0.0;
      $t_hotel = 0.0;
      $t_hotel1 = 0.0;
      $t_hotel2 = 0.0;
      $t_hotel3 = 0.0;
      $t_hotel4 = 0.0;
      foreach ($trans as $t) {
        if($t->tipo == "Nacional")
        {
          $t_transna = $t_transna + $t->total;
        }
        else{
          $t_transin = $t_transin + $t->total;
        }
        $t_trans = $t_trans + $t->total;
      }
      foreach ($varios as $t) {
        if($t->tipo == "Nacional")
        {
          $t_variosna = $t_variosna + $t->total;
        }
        else{
          $t_variosin = $t_variosin + $t->total;
        }
        $t_varios = $t_varios + $t->total;
      }
      foreach ($impuesto as $t) {
        if($t->tipo == "Nacional")
        {
          $t_impna = $t_impna + $t->total;
        }
        else{
          $t_impin = $t_impin + $t->total;
        }
        $t_imp = $t_imp + $t->total;
      }
      foreach ($sob as $t) {
        if($t->tipo == "Nacional")
        {
          $t_sobna = $t_sobna + $t->total;
        }
        else{
          $t_sobin = $t_sobin + $t->total;
        }
        $t_sob = $t_sob + $t->total;
      }
      foreach ($hotel as $t) {
        if($t->number == "1")
        {
          $t_hotel1 = $t_hotel1 + $t->total;
        }
        elseif($t->number == "2"){
          $t_hotel2 = $t_hotel2 + $t->total;
        }
        elseif($t->number == "3"){
          $t_hotel3 = $t_hotel4 + $t->total;
        }
        elseif($t->number == "4"){
          $t_hotel3 = $t_hotel4 + $t->total;
        }
        $t_hotel = $t_hotel + $t->total;
      }
      $t_total = $t_trans + $t_varios + $t_imp + $t_sob + $t_hotel;
      $view =  \View::make('Reporte', compact('trans', 'varios', 'impuesto', 'sob', 'hotel1', 'hotel2', 'hotel3', 'hotel4',
      't_trans', 't_transin', 't_transna', 't_varios', 't_variosin', 't_variosna' ,
      't_imp', 't_impin', 't_impna', 't_sob', 't_sobin', 't_sobna', 't_total', 't_hotel', 't_hotel1', 't_hotel2', 't_hotel3', 't_hotel4'))->render();
      $pdf = \App::make('dompdf.wrapper'); //Note: in 0.6.x this will be 'dompdf.wrapper'
      $pdf->loadHTML($view)->setPaper('letter');
      $carbon = new Carbon();
      return $pdf->download('Reporte_'.$carbon->now(new \DateTimeZone('America/La_Paz'))->toDateTimeString().'.pdf');
  }

}

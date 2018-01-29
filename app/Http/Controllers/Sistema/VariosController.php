<?php namespace App\Http\Controllers\Sistema;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Transporte;
use App\Impuesto;
use App\Sobrepeso;
use App\Varios;
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

}

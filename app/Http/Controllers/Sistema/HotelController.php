<?php namespace App\Http\Controllers\Sistema;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Transporte;
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

class HotelController extends Controller{

  public function getHotel($year, $number){
    $trans = Hotel::where('year', $year)
            ->where('number', $number)
            ->get();
  	return view('Sistema/Hotel', compact('trans', 'year', 'number'));
  }
  public function saveHotel(Request $request){
    $cor = new Hotel();
    $cor->number = $request->number;
    $cor->nombre = $request->nombre;
    $cor->year = $request->_year;
    $cor->numero = $request->numero;
    $cor->costo = $request->costo;
    $cor->total = $request->numero * $request->costo;
    $cor->save();
    return back()->withInput();
  }

}

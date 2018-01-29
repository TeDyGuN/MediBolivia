<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Impuesto extends Model
{
  protected $table = 'impuestos';
  protected $fillable = [
      'tipo', 'nombre', 'numero', 'costo', 'total', 'year'
  ];
}

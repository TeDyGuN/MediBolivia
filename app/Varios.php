<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Varios extends Model
{
  protected $table = 'varios';
  protected $fillable = [
      'tipo', 'nombre', 'numero', 'costo', 'total', 'year'
  ];
}

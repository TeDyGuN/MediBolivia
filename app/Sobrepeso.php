<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sobrepeso extends Model
{
  protected $table = 'sobrepesos';
  protected $fillable = [
      'tipo', 'nombre', 'numero', 'costo', 'total', 'year'
  ];
}

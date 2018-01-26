<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transporte extends Model
{
    /*
    $table->increments('id');
    $table->enum('tipo', ['Nacional', 'Internacional']);
    $table->string('nombre');
    $table->string('salida');
    $table->string('llegada');
    $table->integer('numero');
    $table->decimal('costo');
    $table->decimal('total');
    */
    protected $table = 'transportes';
    protected $fillable = [
        'tipo', 'nombre', 'salida', 'llegada', 'numero', 'costo', 'total', 'year'
    ];
}

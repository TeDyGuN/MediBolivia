<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSobrepesosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sobrepesos', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('tipo', ['Nacional', 'Internacional']);
            $table->string('nombre');
            $table->integer('numero');
            $table->decimal('costo');
            $table->decimal('total');
            $table->string('year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sobrepesos');
    }
}

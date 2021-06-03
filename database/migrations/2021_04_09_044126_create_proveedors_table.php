<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedors', function (Blueprint $table) {
            $table->id();
            $table->string('id_tipo_medio',500)->nullable(500);
            $table->string('razon_social',500)->nullable();
            $table->string('representante',500)->nullable();
            $table->string('cargo',500)->nullable();
            $table->string('escritura',500)->nullable();
            $table->string('objeto_social',500)->nullable();
            $table->string('acreditacion_social',500)->nullable();
            $table->string('INE',500)->nullable();
            $table->string('fecha_sat',500)->nullable();
            $table->string('RFC',500)->nullable();
            $table->string('PPAPE',500)->nullable();
            $table->string('domicilio',500)->nullable();
            $table->String('Proveedores_col',500)->nullable();
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
        Schema::dropIfExists('proveedors');
    }
}

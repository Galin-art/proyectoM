<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedorIntersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor_inters', function (Blueprint $table) {
            $table->id();
            $table->string('id_tipo_medio')->nullable();
            $table->string('razon_social')->nullable();
            $table->string('representante')->nullable();
            $table->string('cargo')->nullable();
            $table->string('escritura')->nullable();
            $table->string('objeto_social')->nullable();
            $table->string('acreditacion_social')->nullable();
            $table->string('INE')->nullable();
            $table->string('fecha_sat')->nullable();
            $table->string('RFC')->nullable();
            $table->string('PPAPE')->nullable();
            $table->string('domicilio')->nullable();
            $table->String('Proveedores_col')->nullable();
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
        Schema::dropIfExists('proveedor_inters');
    }
}

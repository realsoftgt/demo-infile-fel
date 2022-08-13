<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fel_dtes', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha_emision')->nullable(false);
            $table->string('nit_emisor', 20)->nullable(false);
            $table->string('nit_receptor', 20)->nullable(false);
            $table->string('nombre_receptor', 100)->nullable(false);
            $table->string('direccion_receptor', 100)->nullable(false);
            $table->bigInteger('dte_id')->nullable(false);
            $table->enum('dte_tipo', ['FACT', 'FCAM', 'FESP', 'NCRE', 'NDEB', 'ANUL'])->nullable();
            $table->string('dte_numero', 50)->nullable();
            $table->string('dte_serie', 50)->nullable();
            $table->string('dte_autorizacion', 75)->nullable();
            $table->boolean('estado');
            $table->json('mensajes')->nullable();
            $table->string('fecha');
            $table->string('monto');
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
        Schema::dropIfExists('fel_dtes');
    }
};

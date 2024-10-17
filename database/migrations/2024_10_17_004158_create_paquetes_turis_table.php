<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::create('paquetes_turis', function (Blueprint $table) {
            $table->id();
            $table->string('destino');
            $table->string('descripcion');
            $table->integer('duracion');
            $table->integer('precio');
            $table->string('incluye'); 
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
        Schema::dropIfExists('paquetes_turis');
    }
};

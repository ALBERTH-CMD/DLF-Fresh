<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();

            $table->string('slug',50);
            $table->string('title',67);
            $table->string('description',155);
            $table->string('nombre',50);
            $table->text('descripcion');
            $table->string('urlfoto',50)->default("foto.jpg");
            $table->string('visitas')->default(0);
            $table->string('orden')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}

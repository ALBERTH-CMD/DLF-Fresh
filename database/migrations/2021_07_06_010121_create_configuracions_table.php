<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfiguracionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracions', function (Blueprint $table) {
            $table->id();

            $table->string('seo_title');
            $table->string('seo_description');
            $table->string('seo_urlfoto');

            $table->string('colorPrimario');
            $table->string('colorSecundario');
            $table->string('urlfavicon');
            $table->string('urllogo');
            $table->string('slogan');
            $table->string('frase_1');
            $table->string('frase_2');
            $table->string('frase_3');

            $table->string('razonsocial');
            $table->string('direccion');
            $table->string('celular');
            $table->string('email');
            $table->string('facebook');
            $table->string('youtube');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('configuracions');
    }
}

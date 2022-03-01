<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('description');
            $table->text('somos');
            $table->string('urlsomos');
            $table->text('historia');
            $table->string('urlhistoria');
            $table->text('mision');
            $table->string('urlmision');
            $table->text('vision');
            $table->string('urlvision');
            $table->text('valores');
            $table->string('urlvalores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrucelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrucels', function (Blueprint $table) {
            $table->id();

            $table->string('descripcion',200);
            $table->string('urlfoto',100);
            $table->string('link',100)->nullable();
            $table->integer('orden')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrucels');
    }
}

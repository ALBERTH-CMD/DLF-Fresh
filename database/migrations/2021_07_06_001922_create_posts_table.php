<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->string('slug',67);
            $table->string('title',67);
            $table->string('description',155);
            $table->string('nombre',100);
            $table->text('descripcion');
            $table->string('urlfoto',50)->default("foto.jpg");
            $table->string('visitas')->default(0);
            $table->string('orden')->default(0);
            $table->foreignId('categoria_id')->constrained();
            
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
        Schema::dropIfExists('posts');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToDosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toDos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('body');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('status_id');
            $table->timestamps();

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreign('status_id')
                ->references('id')
                ->on('statuses')
                ->onDelete('restrict')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('toDos');
    }
}

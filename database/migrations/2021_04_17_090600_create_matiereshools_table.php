<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatiereshoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('matiereshools', function (Blueprint $table) {
                $table->id();
                $table->string('matiere');
                $table->bigInteger('classe_id')->unsigned();
                $table->foreign('classe_id')->references('id')->on('classes')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('matiereshools');
    }
}

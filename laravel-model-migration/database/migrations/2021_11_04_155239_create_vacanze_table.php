<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanzeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacanze', function (Blueprint $table) {
            $table->id();
            $table->string('location', 50);
            $table->string('data_partenza', 20);
            $table->string('data_ritorno', 20);
            $table->smallInteger('prezzo');
            $table->string('persone', 8);
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
        Schema::dropIfExists('vacanze');
    }
}

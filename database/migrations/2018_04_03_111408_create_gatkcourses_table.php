<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGatkcoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('g_a_t_k_s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('commandLine');
            $table->string('GATKfamiliar');
            $table->string('analyzeData');
            $table->string('inputInterests');
            $table->string('inputCompany');
            $table->string('inputPosition');
            $table->string('inputFullName');
            $table->string('inputEmail')->unique();
            $table->string('inputDinner');
            $table->integer('seats')->default(30);
            $table->integer('occupiedSeats')->default(0);
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
        Schema::dropIfExists('g_a_t_k_s');
    }
} 

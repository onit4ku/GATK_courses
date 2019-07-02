<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('researchInterests');
            $table->string('institution');
            $table->string('position');
            $table->string('fullName');
            $table->string('email')->unique();
            $table->string('inputDinner');
            $table->string('inputAlhambra');
            $table->string('dietaryReq');
            $table->boolean('payment')->default(false);
            $table->boolean('waitingList')->default(false);
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

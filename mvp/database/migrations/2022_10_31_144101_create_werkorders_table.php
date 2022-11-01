<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('werkorders', function (Blueprint $table) {
            $table->id();
            $table->string('omschrijving');
            $table->string('aangemaakt_door');
            $table->string('klant');
            $table->string('status');
            $table->time('geschatte_tijdsduur')->nullable();
            $table->date('planning_datum')->nullable();
            $table->time('planning_tijd')->nullable();
            $table->date('deadline_datum')->nullable();
            $table->time('deadline_tijd')->nullable();
            $table->timestamp('aanmaak_timestamp')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('werkorders');
    }
};

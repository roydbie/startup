<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::create('werkorder_statussen', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->integer('actief')->default(1);
            $table->integer('in_visueel')->default(0);
            $table->integer('verwijderd')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('werkorder_statussen');
    }
};

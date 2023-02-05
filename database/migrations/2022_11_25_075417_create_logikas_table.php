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
        Schema::create('logikas', function (Blueprint $table) {
            $table->id();
            $table->string('penyakit_id')->references('id')->on('penyakits');
            $table->string('gejala_id')->references('id')->on('gejalas');
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
        Schema::dropIfExists('logikas');
    }
};

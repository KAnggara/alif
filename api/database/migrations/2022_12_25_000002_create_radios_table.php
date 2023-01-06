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
        Schema::create('radios', function (Blueprint $table) {
            $table->id();
            $table->integer('time');
            $table->integer('frequency');
            $table->enum('state', ['SND', 'TO']);
            $table->string('destination')->nullable();
            $table->enum('status', ['TIS', 'TWS']);
            $table->string('station_id');
            // $table->foreign('station_id')->references('station_id')->on('stations');
            $table->integer('ber');
            $table->integer('sn');
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
        Schema::dropIfExists('radios');
    }
};

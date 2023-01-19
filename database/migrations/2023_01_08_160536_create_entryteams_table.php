<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntryteamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entryteams', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('team');
            $table->string('coach');
            $table->string('player1');
            $table->string('player2');
            $table->string('player3');
            $table->string('player4');
            $table->string('player5');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entryteams');
    }
}

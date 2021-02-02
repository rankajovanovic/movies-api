<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Movies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //id (int)
        // title (string)
        // director (string)
        // imageUrl (string)
        // duration (int)
        // releaseDate (date)
        // genre (string)
    Schema::create('movies', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('director');
        $table->string('imageUrl');
        $table->integer('duration');
        $table->date('releaseDate');
        $table->string('genre');
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
        Schema::dropIfExists('movies');
    }
}

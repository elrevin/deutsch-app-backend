<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWordsPartOfSpeechesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('words_part_of_speeches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->string("nameGe", 255)
                ->nullable(false);

            $table->string("nameRu", 255)
                ->nullable(false);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('words_part_of_speeches');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('words', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->string("word", 255)
                ->nullable(false);

            $table->string("translate", 255)
                ->nullable(false);

            $table->text("description");

            $table->unsignedBigInteger("article");
            $table->foreign("article")
                ->references("id")->on("words_articles")
                ->onUpdate("cascade")
                ->onDelete("cascade");

            $table->unsignedBigInteger("partOfSpeech");
            $table->foreign("partOfSpeech")
                ->references("id")->on("words_part_of_speeches")
                ->onUpdate("cascade")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('words');
    }
}

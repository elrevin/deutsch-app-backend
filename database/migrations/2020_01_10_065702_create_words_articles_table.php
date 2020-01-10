<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWordsArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('words_articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->string("article", 255)
                ->nullable(false);

            $table->boolean("definite")
                ->nullable(false)
                ->default(false);

            $table->index("definite");

            $table->char("wording", 1)
                ->nullable(false);

            $table->index("wording");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('words_articles');
    }
}

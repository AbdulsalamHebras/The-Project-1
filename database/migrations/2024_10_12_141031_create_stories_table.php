<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->text('summary')->nullable();
            $table->date('writing_date');
            $table->string('image');
            $table->integer('category_id')->nullable();
            $table->string('language')->nullable();
            $table->string('authors');
            $table->string('publishing_homes');
            $table->integer('parts')->nullable();
            $table->integer('deposit_number')->nullable();
            $table->integer('edition_number')->nullable();
            $table->date('deposit_date');
            $table->integer('pages');
            $table->integer('copies');
            $table->float('price');
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
        Schema::dropIfExists('stories');
    }
}

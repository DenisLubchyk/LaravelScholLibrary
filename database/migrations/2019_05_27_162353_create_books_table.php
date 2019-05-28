<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    /*    Schema::create('books_authors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
            $table->string('country');
            $table->timestamps();
        });*/
        // Создаём таблицу книг
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table-> string('author');
            $table->integer('page');
            $table->integer('year');
            $table->string('publisher');
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
        Schema::dropIfExists('books');
        Schema::dropIfExists('books_authors');
    }
}

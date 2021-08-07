<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function(Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('summary');
            $table->string('image')->nullable();
            $table->char('isbn10', 10)->nullable();
            $table->char('isbn13', 13)->nullable();
            $table->foreignId('owner_id')->constrained('users');
            $table->foreignId('book_status_id')->constrained();
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
    }
}

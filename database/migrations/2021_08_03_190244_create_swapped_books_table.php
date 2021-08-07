<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSwappedBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('swapped_books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lender_id')->constrained('users');
            $table->foreignId('borrower_id')->constrained('users');
            $table->foreignId('book_id')->constrained();
            $table->date('received_date');
            $table->date('return_date');
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
        Schema::dropIfExists('swapped_books');
    }
}

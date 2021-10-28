<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookBorrowerTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('book_borrower', function (Blueprint $table) {
      $table->id();

      $table->unsignedBigInteger('lender_id');
      $table->foreign('lender_id')->references('id')->on('users')->onDelete('cascade');

      $table->unsignedBigInteger('borrower_id');
      $table->foreign('borrower_id')->references('id')->on('borrowers')->onDelete('cascade');

      $table->unsignedBigInteger('book_id');
      $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');

      $table->boolean('status')->default(0);

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
    Schema::dropIfExists('book_borrower');
  }
}
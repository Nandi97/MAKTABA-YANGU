<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksBorrowersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('books_borrowers', function (Blueprint $table) {
      $table->id();

      $table->unsignedBigInteger('lender_id')->nullable();
      $table->foreign('lender_id')->references('id')->on('users')->onDelete('cascade');

      $table->unsignedBigInteger('borrower_id')->nullable();
      $table->foreign('borrower_id')->references('id')->on('borrowers')->onDelete('cascade');

      $table->unsignedBigInteger('book_id')->nullable();
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
    Schema::dropIfExists('books_borrowers');
  }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class BookBorrower extends Pivot
{
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var string[]
   */
  protected $fillable = [
    'lender_id',
    'borrower_id',
    'book_id',
    'status',
  ];

  /**
   * The BookBorrower model must contain a book_id
   */
  public function book()
  {
    return $this->belongsTo(Book::class);
  }

  /**
   * The BookBorrower model must contain a borrower_id
   */
  public function borrower()
  {
    return $this->belongsTo(Borrower::class);
  }

  /**
   * The BookBorrower model must contain a lender_id
   */
  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
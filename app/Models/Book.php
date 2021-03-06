<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var string[]
   */
  protected $fillable = [
    'title',
    'author',
    'description',
    'cover',
    'publishDate',
    'is_available',
  ];

  /*
     * The borrowers that belong to this book
     */
  public function borrowers()
  {
    return $this->belongsToMany(Borrower::class, table: 'book_borrower', foreignPivotKey: 'book_id', relatedPivotKey: 'borrower_id')->withTimestamps()->as('book_borrower')->withPivot('status');
  }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var string[]
   */
  protected $fillable = [
    'name',
    'avatar',
    'email',
    'phone_no',

  ];
  /*
     * The books that belong to this borrower
     */
  public function books()
  {
    return $this->belongsToMany(Book::class);
  }
}
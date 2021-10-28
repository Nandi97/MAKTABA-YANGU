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

  /**
   * The bookBorrowers that belong to this User
   */
  public function bookBorrowers()
  {
    return $this->hasMany(BookBorrower::class);
  }
}
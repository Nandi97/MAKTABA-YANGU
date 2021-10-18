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
    ];

    /**
     * Attributes to whom this class has a parent relationship to
     */
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}

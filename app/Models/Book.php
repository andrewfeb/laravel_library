<?php
// File app/Models/Book.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['judul', 'penerbit', 'penulis', 'jumlah'];

    /**
     * Get the category for a book.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

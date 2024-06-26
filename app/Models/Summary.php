<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Summary extends Model
{
    use HasFactory;
    protected $table = 'summaries';

    const DRAFT = "draft";
    const PUBLISHED = "published";
    protected $fillable = [
        'user_id',
        'book_id',
        'user_id',
        'status',
        'price',
    ];
}

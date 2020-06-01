<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'book_id', 'book_title', 'author_name','description','numberofissue',
    ];

}

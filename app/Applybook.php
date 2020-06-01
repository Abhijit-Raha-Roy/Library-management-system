<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applybook extends Model
{
    protected $fillable = [
        'book_id', 'book_title', 'author_name','useridno',
    ];
}

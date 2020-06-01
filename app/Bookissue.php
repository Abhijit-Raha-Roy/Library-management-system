<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookissue extends Model
{
    protected $fillable = [
        'book_id', 'studentid', 'issuedate','returndate',
    ];
    
   
}

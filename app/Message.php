<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    // messages
    protected $table = 'message';


    //
    protected $fillable = [
        'name',
        'title',
        'content'
    ];


}

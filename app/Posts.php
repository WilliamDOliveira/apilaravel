<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Posts extends Model
{
    
    public $table = 'posts';

    protected $fillable = [
        'title',
        'body',
        'views'
    ];


}

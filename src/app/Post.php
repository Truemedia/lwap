<?php

namespace Truemedia\Lwap\App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = true;

    protected $table = 'posts';

    protected $fillable = ['title', 'content'];
}

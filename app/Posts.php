<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{

    protected $fillable = ['name', 'description', 'address', 'post_img','price'];
}

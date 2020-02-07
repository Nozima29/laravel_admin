<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $fillable = ['user_id', 'fname', 'sname', 'email', 'password', 'post_id', 'created_at', 'updated_at'];
}

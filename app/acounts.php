<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class acounts extends Model
{
    protected $filldata = ['id', 'name', 'password','email'];
    public $timestamps = false;
}

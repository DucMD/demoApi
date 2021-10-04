<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $filldata = ['id','name','categories_id','brand_id','avatar','price','quantity','admin_id','description','status','created_at','updated_at'];
}

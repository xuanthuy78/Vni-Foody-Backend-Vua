<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use DB;

class Partners extends Model
{
    protected $fillable = [
       'id', 'name', 'image', 
    ];
}

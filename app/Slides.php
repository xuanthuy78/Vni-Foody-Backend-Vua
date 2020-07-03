<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Slides extends Model
{
     protected $fillable = [
        'id', 'name','display_order','image'
    ];
}

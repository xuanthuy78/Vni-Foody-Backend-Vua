<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slides extends Model
{
     protected $fillable = [
        'id', 'name','display_order','image'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;


class Categories extends Model
{
    protected $fillable = [
        'id', 'name', 'parent_id'
    ];
}

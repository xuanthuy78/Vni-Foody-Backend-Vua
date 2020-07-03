<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Contacts extends Model
{
    protected $fillable = [
        'id','name','address','email','title', 'content'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Comments extends Model
{
    protected $fillable = [
        'id', 'content', 'user_id','product_id'
    ];
    public function user() {
        return $this->belongsTo('App\User','user_id','id');
    }

    public function product() {
        return $this->belongsTo('App\Products','product_id','id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = [
        'id', 'name','user_id','status','delivery_address','total_price','note','address','phone','email'
    ];
    public function user() {
        return $this->belongsTo('App\User','user_id','id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable = [
        'id', 'order_id','product_id','price','quanlity'
    ];
    public function order() {
        return $this->belongsTo('App\Orders','order_id','id');
    }
    public function product() {
        return $this->belongsTo('App\Products','product_id','id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'id', 'name','code','price','quanlity','description','detail','image','top_hot','categories_id'
    ];
    public function categories() {
        return $this->belongsTo('App\Categories','user_id','id');
    }
    public function comments(){
        return $this->hasMany('App\Comments');
     }
}

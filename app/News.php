<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'id', 'name', 'newcategories_id','image','title','content'
    ];
    public function newcategories() {
        return $this->belongsTo('App\NewCategories','newcategories_id','id');
    }
}

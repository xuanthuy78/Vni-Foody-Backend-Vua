<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = [
        'id', 'name', 'parent_id'
    ];
    public function parent(){
        return $this->belongsTo('App\NewCategories', [['parent_id', 0]]);
    }
}

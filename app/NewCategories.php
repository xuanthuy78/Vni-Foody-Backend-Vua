<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewCategories extends Model
{
    protected $fillable = [
        'id', 'parent_id', 'display_order',
    ];
    public function parent(){
        return $this->belongsTo('App\NewCategories', [['parent_id', 0]]);
    }
}

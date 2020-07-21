<?php

namespace App;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\Model;
use DB;


class Categories extends Model implements Searchable
{
    protected $fillable = [
        'id', 'name', 'parent_id'
    ];
    public function products(){
        return $this->hasMany('App\Products ');
    }
    public function getSearchResult(): SearchResult
    {
        // $url = route('categories.show', $this->id);

        return new SearchResult(
            $this,
            $this->name,
            $this->id
        );
    }
    
   
}

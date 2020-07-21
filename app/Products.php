<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\SearchResult;
use Spatie\Searchable\Searchable;


use DB;

class Products extends Model implements Searchable

{
    protected $fillable = [
     'name','code','price','quanlity','description','detail','image','top_hot','categories_id','partner_id','comment_id'
    ];
    // public function categories() {
    //     return $this->belongsTo('App\Categories','categories_id','id');
    // }
    public function category(){
        return $this->belongsTo('App\Categories');
    }
    public function partners() {
        return $this->belongsTo('App\Partners','partner_id','id');
    }
    public function comments() {
        return $this->belongsTo('App\Comments','comment_id','id');
    }
    public function getSearchResult(): SearchResult
    {
        // $url = route('', $this->id);

        return new SearchResult(
            $this,
            $this->name,
            $this->id
        );
    }
   
}

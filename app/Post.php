<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'blog_post'
    ];

    public function comment(){
    	return $this->hasMany('App\Comment', 'post_id');
    }

    public function scopeFilter($query, $filter){

    	// if ($month = $filter['month']){
    	// 	$query->whereMonth('created_at', Carbon::parse($month)->month);
    	// }

    	// if ($year = $filter['year']){
    	// 	$query->whereYear('created_at', $year);
    	// }
    }

}


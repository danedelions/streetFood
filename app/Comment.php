<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
    	'name',
    	'post_id',
    	'comment'
    ];

    public function post(){
    	return $this->belongsTo('App\Post','post_id');
    }
    public function reply(){
    	return $this->hasMany('App\Reply', 'comment_id');
    }
}

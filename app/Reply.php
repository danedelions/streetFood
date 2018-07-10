<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillable = [
    	'comment_id',
    	'name',
    	'reply'
    ];

    public function comment(){
    	return $this->belongsTo('App\Comment','comment_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    function comments_blog() {
    	return $this->belongsTo('App\Articles');
    }
}

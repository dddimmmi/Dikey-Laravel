<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
     public function posts(){

        return $this->belongsToMany('App\Model\user\Post', 'post_tags')->orderBy('created_at', 'DESC')->paginate(5);//втория параметър е името на свързващия модел post_tag' при релация много към много 
    }
     public function getRouteKeyName(){

    	return 'slug';
    }
}

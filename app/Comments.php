<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public function user(){
        return $this->belongTo('App\User');
    }
    public function post(){
        return $this->belongsTo('App\Post');
    }

    protected $fillable = [
        'post_id', 'user_id', 'comment-body', 
    ];
}


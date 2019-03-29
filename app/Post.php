<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
        public function user(){
          return $this->belongsTo('App\User');

        }


        public function likes(){
          return $this->hasMany('App\like');
        }

        public function comment(){
          return $this->hasMany('App\comments');
        }

      protected $fillable = [
          'body' , 'user_id', 'image'
      ];
      
}



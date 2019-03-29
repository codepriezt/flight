<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
   public function first_user(){
       return $this->belongTo('App\User' , 'first_user_id');
   } 

   public function second_user(){
       return $this->belongTo('App\User' , 'second_user_id');
   }
}

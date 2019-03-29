<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'first_name', 'last_name' , 'email', 'phone_number' ,'password' ,'country' ,'state' ,'interest' ,'image', 'is_activated'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function post(){
        return $this->hasMany('App\Post');
    }

    public function likes(){
        return $this->hasMany('App\like');
      }
      public function comment(){
          return $this->hasMany('App\comments');
      }
        //friend that this user started
      protected function friendsOfThisUser(){
          return $this->belongsToMany(User::class, 'friends' ,'first_user' ,'second_user')
          ->withPivot('status')
          ->wherePivot('status', 'confirmed');
      }
       //friends the user asked for
      protected function thisUserFriendsof(){
          return $this->belongsToMany(User::class,'friends' , 'second_user' , 'first_user')
          ->withPivot('status')
          ->wherePivot('status', 'confirmed');

      }
        //getting friends of othr user->friend
      public function getFriendAttribute(){
          if(! array_key_exists('friends', $this->relations)) $this->loadfriends();
          return $this->getRelation('friends');
      }

      protected function loadfriends(){
        if(! array_key_exists('friends', $this->relations)){
            $friends  = $this->mergefriends();
            $this->setRelation('friends', $friends);
        }
      }

      protected function mergefriends(){
          if($add = $this->friendOfThisUser){
              return $add->merge($this->thisUserFriendsof);
          }else
            return $this->thisUserFriendsof;

      }
}

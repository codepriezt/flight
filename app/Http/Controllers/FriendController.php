<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function sendrequest(Request $request){
        $freind = new Friend;
        $first_user_id = Auth::user()->id;
        $second_user_id = $request->friend_id;
        $friend->acted_user_id=$first_user_id;
        $status = where('status', 'pending');
        $friend->save();
    }

    public function acceptfriendrequest(Request $request){
                    $first_user_id = $request->friend_id;
                    $second_user_id = Auth::user()->id;
                    $friend->acted_user_id = $second_user_id;
                    $status = where('status', 'confirmed');
                    if($second_user_id == true){
                    $insertfriend = friend::create([
                        'first_user_id'=> $friend_user_id,
                        'second_user_id'=>$second_user_id,
                        'acted_user_id'=>$second_user_id,
                        'status'=> $status,
                    ]);
        } 
    }
    public function rejectfriendrequest(Request $request){
                $friend = new Friend;
                $first_user_id = Auth::user()->id;
                $second_user_id =$request->friend_id;
                $status = where('status', 'pending');

                if(!$friend){
                    $friend->del(); 
                }
               
    }

    public function blockfriend(){

    }

    public function unblockfriend(){

    }

    public function displayfriendrequest(){}
}

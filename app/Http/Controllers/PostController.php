<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;
use App\like;
use Auth;
use App\User;
class PostController extends Controller
{


    public function dashboard(){
        //$posts = Post::orderby('created_at' , 'desc')->get(); 
        //$posts = Post::where($posts == Auth::user());   
        $posts = Post::where('user_id',Auth::user()->id)->orderby('created_at', 'desc')->get(); 
        // $posts->each(function ($post){
        //     return $post->likes()->with('user')->get();
        // });
        // dd($posts[0]->likes[0]->user);
        return view('pages.dashboard' , ['posts' => $posts]);
    } 
 
    public function postcreatepost(Request $request){
        
        //validate post
        $this->validate($request ,[
            'body' => 'required|max:1000'

        ]);
        
        //create post  and save to db
        $post = new post();
        $user_id = Auth::user()->id;
        $post->body = $request['body'];
        $message = "no post inputed";
        $file = $request->file;   
               
        if($file){
            $extension = $file->getClientOriginalExtension(); 
            $filename = 'post-image'. time() . '.'. $extension;
            $path = $file->storeAs('picupload.post' , $filename , 'public');
            $post = Post ::create([
                    'user_id'=> $user_id,
                    'body' => $post->body,
                    'image' => $path,
                ]);
        }else{
            $post = Post::create([
                'user_id'=>$user_id,
                'body'=> $post->body
            ]);
        }
           
        if (request()->json()) {
            // $post->image
            return redirect('/dashboard')->with(['message' => $message]) ;
        }

       

    }
    
    //deleting post
    public function deletepost($post_id){
        $post = Post::where('id' , $post_id)->first();
        if(Auth::user() != $post->user()){
            return back('/dashboard'); 
        }
        $post->delete();
        return redirect('/dashboard');
    }

    public function posteditpost(Request $request){

        $this->validate($request ,[ 
            'body' => 'required'
        ]);
        $post = Post::find($request['postId']);
        $post->body = $request['body'];
        $post->update();
        return response()->json(['message'=>'Post editted'], 200);
    }

    public function likepost(Request $request){
        $post_id = $request['postid'];
        $user_id = Auth::user()->id;
        $like = 1;
        $likeuser = like::where(['user_id'=>$user_id, 'post_id'=> $post_id])->first();
        if ($likeuser){
            $likeuser->delete();
            return response()->json(['action'=> 'sub'], 200);
        }
        $insertlike =Like::create([
            'user_id'=>$user_id,
            'post_id'=>$post_id,
            'likes'=>$like,
        ]);
        
        return response()->json(['action'=> 'add'], 200);
        
    }   

    public function commentpost(Request $request){
       
       $this->validate($request,[
           'body'=>'required|max:1000'
       ]);
       $comment = new comment;
        $post_id = request['postid'];
        $comment->user_id = Auth::user()->id;
        $comment->body = request['comment-body'];
        $comment->save();


    }

    public function addimage(Request $request){
            $user_id = Auth::user()->id;
            $post_id = $request['post_id'];
            $photo = $request->user()->image;

           $this->validate($request , [
               
           ]);
        }

        public function pilotnearyou($find){
             $user_state = Auth::user()->state;
             $user_country = Auth::user()->country;
             $usernearyou = $request->user()->id->state;
             $usernearyou = find::where([$user_state->$usernearyou])->get();
        }

        public function search(Request $request){
            $search = $request->user()->all();
        }

        public function findpilot(Request $request){
            $firstname = $request['first_name'];
            $lastname = $request['last_name'];
            $find = find::where([user()->$firstname , user()->$lastname]);

        }
}

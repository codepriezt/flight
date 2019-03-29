<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;

class PageController extends Controller
{
    public function login(){
        return view('pages.login');
    }

    public function signup(){
        return view('pages.signup');
    }

    
    public function post(){
        return view('pages.post');
    }

    public function dashboard(){
        $posts = Post::where('user_id',Auth::user()->id)->orderby('created_at', 'desc')->get(); 
        $posts = Post::with('likes')->all();
        return view('pages.dashboard', ['posts' => $posts]);
    }

    public function profile(){
        return view('pages.profile');
    }
    
    
    public function search(){
        return view('pages.search');
    }
    public function groups(){
        return view('pages.groups');
    }
}

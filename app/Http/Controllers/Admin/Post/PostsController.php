<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class PostsController extends Controller
{
    //

    public function postsView()
    {
        return view('auth.authenticated.posts');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    public function categoryView()//postsからカテゴリーに遷移
    {   
        return view('auth.authenticated.posts_category');
    }

    public function createView()//postsから投稿に遷移
    {
        return view('auth.authenticated.posts_create');
    }
}

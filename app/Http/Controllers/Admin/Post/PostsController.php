<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //

    public function postsView()
    {
        return view('auth.authenticated.posts');
    }
}

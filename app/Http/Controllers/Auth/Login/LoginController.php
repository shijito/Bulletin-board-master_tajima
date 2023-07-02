<?php

namespace App\Http\Controllers\Auth\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function loginView(){
        return view('auth.login.login');
    }

    public function loginPost(Request $request){
        $userdata = $request -> only('email', 'password');
        return view('auth.authenticated.posts');
        if (Auth::attempt($userdata)) {
            return redirect('/posts');
        }else{
            return redirect('/login');//->with('flash_message', 'name or password is incorrect');
        }
    }

}

<?php

namespace App\Http\Controllers\Auth\Register;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users\User;

class RegisterController extends Controller
{
    //

    public function registerView()
    {
        return view('auth.register.register');
    }

    public function registerPost(Request $request){
        $user = User::create([
         'username' => $request->username,
         'email' => $request->email,
         'password' => $request->password
        ]);
        // dd($user);
        return view('auth.register.completion');
    }

    public function completionView()
    {
        return view('auth.register.completion');
    }

    
}

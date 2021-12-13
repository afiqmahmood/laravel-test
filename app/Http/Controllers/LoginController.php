<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function checklogin(Request $request)
    {
       $user = User::where('email','=',$request->email)->where('password','=',$request->password)->first();

        if($user)
        {
            $request->session()->put('userid',$user->id);
            $request->session()->put('email',$user->email);
            return redirect('main');

        }else
        {
            return redirect('login')->with('status', 'Email or Password incorrect!');
        }
    }

    public function logout()
    {
        session()->flush();
        return redirect('login');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function registerUser(Request $request)
    {
        $user = User::where('email','=',$request->email)->first();

        if($user)
        {
            return redirect('register')->with('status','User already registered!');
        }
        else
        {
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->password =$request->password;

            $user->save();

            return redirect('main')->with('status', 'Registered!');
        }
    }
}

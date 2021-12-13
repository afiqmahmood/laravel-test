<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {

        $request = session()->get('email');
       
        $user = User::where('email','=',$request)->first();
       
        if($user)
        {
            return view('profile',compact('user'));
        }

    }

    public function profileupdate(Request $request)
    {

        $profile = User::findOrFail($request->id);
        $profile->update($request->all());

        return redirect('profile')->with('status', 'Profile Updated!');
    }
}

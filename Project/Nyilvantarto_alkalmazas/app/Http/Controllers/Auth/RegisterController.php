<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        
        $request->validate([
                'nickname'=> 'required|min:3|max:10',
                'firstname'=> 'required|min:3|max:10',
                'lastname'=> 'required|min:3|max:10',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:8|max:15' ,
            ]);

        $user = new User();
        $user->nickname = $request->nickname;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();

        if($res)
        {
            return back()->with('success','Sikeresen regisztrált!');
        }
        else
        {
            return back()->with('fail', 'Valami nincs rendben!');
        }

        Auth::login($user);
        return redirect()->intended('/login');
    }
}
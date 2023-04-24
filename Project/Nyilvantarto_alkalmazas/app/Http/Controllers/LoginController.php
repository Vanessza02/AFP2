<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:15',
        ]);

        $user = User::where('email','=',$request->email)->first();
        if($user)
        {
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginId', $user->id);
                return redirect('welcome');
            }else{
                return back()->with('fail', 'Rossz jelszó!');
            }
            
        }
        else
        {
            return back()->with('fail', 'Ez az email cím nincs regisztrálva!');
        }
    }
}

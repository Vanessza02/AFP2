<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'), $request->filled('remember_me'))) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }
        
        public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }

        $request->session()->regenerate();

        return redirect()->intended('/dashboard');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Validation\ValidationException;


class AuthController extends Controller

{
    public function showregister()
    {
        return view('auth.register');
    }


    public function showlogin()
    {
        return view('auth.login');
    }


    public function register(request $request)
    {
        $validated=$request->validate(
            [
                'name' => 'string|required|unique:users',
                'email' => 'string|required|unique:users',
                'password' => 'string|required',
            ]
            );

            $user = User::create($validated);

            Auth::login($user);

            return redirect()->route('product.index');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($validated)){
            $request->session()->regenerate();
            return redirect()->rounte('product.index');
        }
        
        throw ValidationException::withMessages([
            'email' => 'The provided credentials do not match our records.',
        ]);

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        //cLEAR all data of session
        
        $request->session()->regenerateToken();
        //add a layer of security

        return redirect('/login');
    }
}


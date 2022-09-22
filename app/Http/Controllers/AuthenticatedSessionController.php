<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    public function store(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (! Auth::attempt($credentials, $request->boolean('remember')))
        {
            throw ValidationException::withMessages([
                'email' => 'Las credenciales no coinciden!'
            ]);
        }


         // if ( ! Auth::attempt($credentials, $request->boolean('remember')) ) {
         //    throw ValidationException::WithMessages([
         //        'email' => 'Las credenciales no coinciden!'
         //    ]);
         // }

         $request->session()->regenerate();

         return redirect()->intended()->with('status', 'You are logged in');
    }
}

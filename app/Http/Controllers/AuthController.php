<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function authentication(Request $request) {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended('/');
    }
}
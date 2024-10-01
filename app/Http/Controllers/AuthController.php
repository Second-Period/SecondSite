<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;

class AuthController extends Controller
{
    //
    public function authentication(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended('/');
    }
}
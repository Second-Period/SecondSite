<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function index() {
        return view('users', ['users' => $this->getUsers()]);  
    }
    function getUsers() {
        $users  = User::all();
        return $users;
    }

}
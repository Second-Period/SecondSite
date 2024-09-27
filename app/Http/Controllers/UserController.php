<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index() {
        return view('admin.users', ['users' => $this->getUsers()]);  
    }
    public function getUsers() {
        $users  = User::all();
        return $users;
    }

    public function createUser(Request $request) {
        $validator = $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'min:8'],
        ]);
    
        $user = User::create([
            'name' => $request->nome,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        
        return redirect()->route('page_home');
    }

    public function userForAdmin() {
        
    }
    

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('auths.login');
    }

    public function postLogin(Request $request)
    {
        if (Auth::guard('role')->attempt($request->only('email', 'password'))) {
            return redirect('/dashboard');
        }

        return redirect('/login');
    }

    public function logout()
    {
        Auth::guard('role')->logout();
        return redirect('/login');
    }

    public function register()
    {
        return view('auths.register');
    }

    public function postRegister(Request $request)
    {
        $role = new \App\Role;
        $role->role = 'user';
        $role->name = $request->name;
        $role->email = $request->email;
        $role->password = bcrypt($request->password);
        $role->save();

        $request->request->add(['user_id' => $role->id]);
        User::create($request->all());
        return redirect('/login');
    }
}

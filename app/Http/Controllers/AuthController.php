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

        return redirect('/login')->with('statusLogin', 'Email atau Kata Sandi Salah!');
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
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
            'retype_password' => 'required|same:password',

        ]);

        $role = new \App\Role;
        $role->role = 'user';
        $role->name = $request->name;
        $role->email = $request->email;
        $role->password = bcrypt($request->password);
        $role->save();

        $request->request->add(['user_id' => $role->id]);
        User::create($request->all());
        return redirect('/login')->with('statusRegist', 'Registrasi Berhasil, Silahkan Masuk!');
    }
}

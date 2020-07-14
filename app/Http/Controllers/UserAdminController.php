<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAdminController extends Controller
{
    public function index()
    {
        $user_data = \App\User::all();
        $adminAll = \App\Admin::all();
        $admin = $adminAll[0];
        return view('useradmin.index', ['user_data' => $user_data, 'admin' => $admin]);
    }

    public function profile()
    {
        $admin = \App\Admin::all();
        $adminAll = \App\Admin::all();
        return view('useradmin.profile', ['user_data' => $admin[0], 'admin' => $adminAll[0]]);
    }
    public function pdf() 
    {
        $user_data = \App\User::all();
        $adminAll = \App\Admin::all();
        $admin = $adminAll[0];
        $pdf = \PDF::loadView('useradmin.user-report', ['user_data' => $user_data, 'admin' => $admin]);
       return $pdf->stream();
    }
}

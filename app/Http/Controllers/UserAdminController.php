<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAdminController extends Controller
{
    public function index() 
    {
    	$user_data = \App\User::all();
    	return view('useradmin.index', ['user_data' => $user_data]);
    }
}

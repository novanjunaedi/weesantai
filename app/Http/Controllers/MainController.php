<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('main.index');
    }

    public function destination()
    {
        return view('main.destination');
    }

    public function about()
    {
        return view('main.about');
    }

    public function contact()
    {
        return view('main.contact');
    }

    public function login()
    {
        return view('login');
    }

    public function signup()
    {
        return view('register');
    }
    public function detail_list()
    {
        return view('main.detail_list');
    }

    public function detail_wisata()
    {
        return view('main.detail_wisata');
    }
}

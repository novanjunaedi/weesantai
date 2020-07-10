<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ListController extends Controller
{
    public function get_bandung()
    {
        $loc = "Bandung";
        $allget = DB::table('destinations')->where('location', $loc)->get();
        $data = [
            'allget' => $allget,
            'loc' => $loc
        ];
        return view('main.detail_list', $data);
    }

    public function get_jakarta()
    {
        $loc = "Jakarta";
        $allget = DB::table('destinations')->where('location', $loc)->get();
        $data = [
            'allget' => $allget,
            'loc' => $loc
        ];
        return view('main.detail_list', $data);
    }

    public function get_bali()
    {
        $loc = "Bali";
        $allget = DB::table('destinations')->where('location', $loc)->get();
        $data = [
            'allget' => $allget,
            'loc' => $loc
        ];
        return view('main.detail_list', $data);
    }

    public function get_yogyakarta()
    {
        $loc = "Yogyakarta";
        $allget = DB::table('destinations')->where('location', $loc)->get();
        $data = [
            'allget' => $allget,
            'loc' => $loc
        ];
        return view('main.detail_list', $data);
    }

    public function get_malang()
    {
        $loc = "Malang";
        $allget = DB::table('destinations')->where('location', $loc)->get();
        $data = [
            'allget' => $allget,
            'loc' => $loc
        ];
        return view('main.detail_list', $data);
    }

    public function get_surabaya()
    {
        $loc = "Surabaya";
        $allget = DB::table('destinations')->where('location', $loc)->get();
        $data = [
            'allget' => $allget,
            'loc' => $loc
        ];
        return view('main.detail_list', $data);
    }

    public function get_lombok()
    {
        $loc = "Lombok";
        $allget = DB::table('destinations')->where('location', $loc)->get();
        $data = [
            'allget' => $allget,
            'loc' => $loc
        ];
        return view('main.detail_list', $data);
    }

    public function get_lampung()
    {
        $loc = "Lampung";
        $allget = DB::table('destinations')->where('location', $loc)->get();
        $data = [
            'allget' => $allget,
            'loc' => $loc
        ];
        return view('main.detail_list', $data);
    }

    public function get_back()
    {
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MainController extends Controller
{
    public function index()
    {
        // hitunglokasibandung
      $bandung = "Bandung";
      $bdglist = DB::table('destinations')->select('location')->where('location', $bandung)->get();
      $bdgall = DB::table('destinations')->where('location', $bandung)->get();
      $bdgcount = $bdglist->count();

        // hitunglokasijakarta
      $jakarta = "Jakarta";
      $jktlist = DB::table('destinations')->select('location')->where('location', $jakarta)->get();
      $jktcount = $jktlist->count();

        // hitunglokasibali
      $bali = "Bali";
      $balilist = DB::table('destinations')->select('location')->where('location', $bali)->get();
      $balicount = $balilist->count();

        // hitunglokasiyogyakarta
      $yogyakarta = "Yogyakarta";
      $yogyalist = DB::table('destinations')->select('location')->where('location', $yogyakarta)->get();
      $yogyacount = $yogyalist->count();

    // hitunglokasimalang
      $malang = "Malang";
      $malanglist = DB::table('destinations')->select('location')->where('location', $malang)->get();
      $malangcount = $malanglist->count();

    // hitunglokasisurabaya
      $surabaya = "Surabaya";
      $surabayalist = DB::table('destinations')->select('location')->where('location', $surabaya)->get();
      $surabayacount = $surabayalist->count();

       // hitunglokasilampung
      $lampung = "Lampung";
      $lpglist = DB::table('destinations')->select('location')->where('location', $lampung)->get();
      $lpgcount = $lpglist->count();

       // hitunglokasisurabaya
      $lombok = "Lombok";
      $lbklist = DB::table('destinations')->select('location')->where('location', $lombok)->get();
      $lbkcount = $lbklist->count();


        $data = [
            'bandung_count'  => $bdgcount,
            'jakarta_count'   => $jktcount,
            'bali_count' => $balicount,
            'yogyakarta_count' => $yogyacount,
            'malang_count' => $malangcount,
            'surabaya_count' => $surabayacount,
            'lampung_count' => $lpgcount,
            'lombok_count' => $lbkcount,
            //Bandung Require
            'bdgall' => $bdgall,
            'bdgstr' =>$bandung
        ];
           
        return view('main.index', $data);
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


    public function detail_wisata()
    {
        return view('main.detail_wisata');
    }
}

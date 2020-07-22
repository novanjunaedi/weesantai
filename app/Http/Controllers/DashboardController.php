<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $adminAll = \App\Admin::all();
        $admin = $adminAll[0];

        $jml_user = DB::table('users')->get();
        $jml_user_count = $jml_user->count();

        $jml_destination = DB::table('destinations')->get();
        $jml_destination_count = $jml_destination->count();

        $jml_transaction = DB::table('transactions')->get();
        $jml_transaction_terakhir = DB::table('transactions')
        ->orderBy('created_at', 'desc')
        ->limit(5)->get();
        $jml_transaction_count = $jml_transaction->count();

        //HITUNG DESTINATION KOTA
        // hitunglokasibandung
        $bandung = "Bandung";
        $bdglist = DB::table('destinations')->select('location')->where('location', $bandung)->get();
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


        $trans_data = \App\Transaction::all();

        $data =
            [
                'total_user' => $jml_user_count,
                'total_destination' => $jml_destination_count,
                'total_transaction' => $jml_destination_count,
                'total_transaction_terakhir' => $jml_transaction_terakhir,
                'bandung_count'  => $bdgcount,
                'jakarta_count'   => $jktcount,
                'bali_count' => $balicount,
                'yogyakarta_count' => $yogyacount,
                'malang_count' => $malangcount,
                'surabaya_count' => $surabayacount,
                'lampung_count' => $lpgcount,
                'lombok_count' => $lbkcount,
                'transaction' => $trans_data,
                'admin' => $admin,
            ];

        return view('auths.dashboard', $data);
    }
}

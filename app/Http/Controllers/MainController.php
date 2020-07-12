<?php

namespace App\Http\Controllers;

use App\Destination;
use Illuminate\Http\Request;
use DB;
use Auth;

class MainController extends Controller
{
  public function index()
  {
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



    #destinasi populer
    $populer = DB::table('destinations')->get()->sortByDesc('rating');


    //ambil gambar profile untuk navbar
    $user_data = \App\User::find($id);
    $user_data->update($request->all());
  


    $data = [
      'bandung_count'  => $bdgcount,
      'jakarta_count'   => $jktcount,
      'bali_count' => $balicount,
      'yogyakarta_count' => $yogyacount,
      'malang_count' => $malangcount,
      'surabaya_count' => $surabayacount,
      'lampung_count' => $lpgcount,
      'lombok_count' => $lbkcount,
      'populer' => $populer,
      'user_data' => $user_data
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


  public function detail_wisata($destination_name)
  {
    $destinationName = Destination::where('destination_name', $destination_name)->get();

    $query = Auth::guard('role')->user();

    if (auth::guard('role')->user()) {
      $s_name = $query->name;
      $s_email = $query->email;

      date_default_timezone_set("Asia/Bangkok");
      $gettime = date("h:i:s d-m-y");
      $valid_until = date("h:i:s d-m-y", strtotime('+24 hours'));


      $data = [
        'destinations' => $destinationName,
        's_name' => $s_name,
        's_email' => $s_email,
        'timenow' => $gettime,
        'valid_until' => $valid_until
      ];

      return view('main.detail_wisata', $data);
    } else {
      return redirect("/login")->with('statusLogin', "Silahkan Login Sebelum Melanjutkan");
    }
  }

  public function searchDestination(Request $request)
  {
    $value = $request->search;
    $allget = Destination::where('destination_name', 'like', "%" . $value . "%")->get();
    $data = [
      'allget' => $allget,
      'value' => $value,
    ];
    return view('main.search_destination', $data);
  }
}

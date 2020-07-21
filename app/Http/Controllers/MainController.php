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

    $user = Auth::guard('role')->user();
    
    //ambil gambar profile untuk navbar

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
    $getlocation = DB::table('destinations')->where('destination_name', $destination_name)->get();
    foreach ($getlocation as $value){
      $locationdes= $value->location;
    }
    

    $query = Auth::guard('role')->user();

    if (auth::guard('role')->user()) {
      $s_name = $query->name;
      $s_email = $query->email;

      date_default_timezone_set("Asia/Bangkok");
      $gettime = date("h:i:s d-m-y");
      $valid_until = date("h:i:s d-m-y", strtotime('+24 hours'));
      
      //ambil cuaca
      $apiKey = "980195fb9ca4db7064db35b58720d5b3";
      if ($locationdes == "Jakarta") {
        $cityId = "1642907";
      }
      elseif ($locationdes== "Bandung") {
        $cityId = "1650357";
      }
      elseif ($locationdes== "Bali") {
        $cityId = "1650535";
      }
      elseif ($locationdes== "Yogyakarta") {
        $cityId = "1621177";
      }
      elseif ($locationdes== "Malang") {
        $cityId = "1636722";
      }
      elseif ($locationdes== "Surabaya") {
        $cityId = "8018250";
      }
      elseif ($locationdes== "Lombok") {
        $cityId = "1621177";
      }
      elseif ($locationdes== "Lampung") {
        $cityId = "1638535";
      }

      $googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=".$cityId."&lang=en&units=metric&APPID=".$apiKey;
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_HEADER, 0);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      curl_setopt($ch, CURLOPT_VERBOSE, 0);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      $response = curl_exec($ch);

      curl_close($ch);

      $datacuaca = json_decode($response);
      $currentTime = time();

      // rekomendation
      $populer = DB::table('destinations')->where('location', $locationdes)->get()->sortByDesc('rating');


      $data = [
        'destinations' => $destinationName,
        's_name' => $s_name,
        's_email' => $s_email,
        'timenow' => $gettime,
        'valid_until' => $valid_until,
        'cuaca' => $datacuaca,
        'currentTime' => $currentTime,
        'populer' => $populer
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

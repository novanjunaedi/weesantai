<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;
use Auth;


class TicketController extends Controller
{
    public function index() 
    {
        $transactions = DB::table('transactions')->latest()->first();
        $query = Auth::guard('role')->user();
        if (auth::guard('role')->user()) {
            $id = $query->id;
            $user_data = \App\User::where('user_id', $id)->first();
            $s_name = $query->name;
            $s_email = $query->email;
            $s_buy_date = $user_data->buy_date;
            $s_valid_until= $user_data->valid_until;
            $s_location = $user_data->destination_name;
          }
        $data = [
        
            'last' => $transactions,
            'id_user' => $id,
            'name_user' => $s_name,
            'email_user' => $s_email,
            'last_buy' => $s_buy_date,
            'last_valid' => $s_valid_until,
            'last_location', $s_location
        ];

    	return view('eticket.index', $data);
    }

    public function pdf(){
         $transactions = DB::table('transactions')->latest()->first();
         $query = Auth::guard('role')->user();
         if (auth::guard('role')->user()) {
            $id = $query->id;
            $user_data = \App\User::where('user_id', $id)->first();
            $s_name = $query->name;
            $s_email = $query->email;
            $s_buy_date = $user_data->buy_date;
            $s_valid_until= $user_data->valid_until;
            $s_location = $user_data->destination_name;
         }

        $data = [
        
            'last' => $transactions,
            'id_user' => $id,
            'name_user' => $s_name,
            'email_user' => $s_email,
            'last_buy' => $s_buy_date,
            'last_valid' => $s_valid_until,
            'last_location' => $s_location
        ];

        $pdf = \PDF::loadView('eticket.index', $data);
        return $pdf->stream();
    }
}

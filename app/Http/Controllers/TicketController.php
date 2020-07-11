<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;

class TicketController extends Controller
{
    public function index() 
    {
        $transactions = DB::table('transactions')->latest()->first();

        $data = [
        
            'last' => $transactions
        ];

    	return view('eticket.index', $data);
    }

    public function pdf(){
         $transactions = DB::table('transactions')->latest()->first();

        $data = [
        
            'last' => $transactions
        ];

        $pdf = \PDF::loadView('eticket.index', $data);
        return $pdf->stream();
    }
}

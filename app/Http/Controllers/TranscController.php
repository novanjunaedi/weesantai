<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TranscController extends Controller
{
    public function index() 
    {
    	$trans_data = \App\Transaction::all();
    	return view('transaction.index', ['trans_data' => $trans_data]);
    }
}

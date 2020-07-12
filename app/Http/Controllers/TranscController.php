<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TranscController extends Controller
{
  public function index()
  {
    $trans_data = \App\Transaction::all();
    $adminAll = \App\Admin::all();
    $admin = $adminAll[0];
    return view('transaction.index', ['trans_data' => $trans_data, 'admin' => $admin]);
  }

  public function delete($id)
  {
    $trans_data = \App\Transaction::find($id);
    $trans_data->delete();
    return redirect('/transaction')->with('delete', 'Riwayat Pembelian telah dihapus!');
  }

  public function payment(Request $request)
  {
    $destination = \App\Transaction::create($request->all());

    return redirect()->back()->with('success', 'Sukses Membeli Tiket Klik Button dibawah untuk mencetak tiket');
  }
}

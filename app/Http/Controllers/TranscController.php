<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
    $query = Auth::guard('role')->user();

    if (auth::guard('role')->user()) {
      $id = $query->id;
    }

    $user_data = \App\User::where('user_id', $id)->first();
		$role_data = \App\Role::find($id)->update($request->all());
    $user_data->update($request->all());
    
    return redirect()->back()->with('success', 'Sukses Membeli Tiket Klik Button dibawah untuk mencetak tiket');
  }

  public function pdf() 
  {
    $trans_data = \App\Transaction::all();
    $adminAll = \App\Admin::all();
    $admin = $adminAll[0];
      $pdf = \PDF::loadView('transaction.transaction-report', ['trans_data' => $trans_data, 'admin' => $admin]);
     return $pdf->stream();
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index() 
    {
    	$destination_data = \App\Destination::all();
    	return view('add_destination.index', ['destination_data' => $destination_data]);
    }

    public function create(Request $request)
    {
    	\App\Destination::create($request->all());
    	return redirect('/add-destination')->with('success', 'Destinasi baru telah berhasil ditambahkan!');
    }

    public function edit($id)
    {
    	$destination = \App\Destination::find($id);
    	return view('add_destination/edit');
    }
}

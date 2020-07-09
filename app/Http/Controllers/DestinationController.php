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
    	return view('add_destination/edit',['destination' => $destination]);
    }

    public function update(Request $request,$id)
    {
    	$destination = \App\Destination::find($id);
    	$destination->update($request->all());
    	return redirect('/add-destination')->with('success', 'Destinasi telah berhasil diubah!');
    }

    public function delete($id)
    {
    	$destination = \App\Destination::find($id);
    	$destination->delete();
    	return redirect('/add-destination')->with('success', 'Destinasi telah dihapus!');
    }
}

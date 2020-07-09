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
    	$destination = \App\Destination::create($request->all());

        $pathimg = $request->get('location');

    	if($request->hasfile('img')){
    		$request->file('img')->move('wisata_img/'.$pathimg.'/', $request->file('img')->getClientOriginalName());
    		$destination->img = $request->file('img')->getClientOriginalName();
    		$destination->save();
    	}
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
    	if($request->hasfile('img')){
    		$request->file('img')->move('images/', $request->file('img')->getClientOriginalName());
    		$destination->img = $request->file('img')->getClientOriginalName();
    		$destination->save();
    	}
    	return redirect('/add-destination')->with('success', 'Destinasi telah berhasil diubah!');
    }

    public function delete($id)
    {
    	$destination = \App\Destination::find($id);
    	$destination->delete();
    	return redirect('/add-destination')->with('success', 'Destinasi telah dihapus!');
    }
}

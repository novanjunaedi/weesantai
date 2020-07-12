<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinationController extends Controller
{
	public function index()
	{
		$adminAll = \App\Admin::all();
		$admin = $adminAll[0];
		$destination_data = \App\Destination::all();
		return view('add_destination.index', ['destination_data' => $destination_data, 'admin' => $admin]);
	}

	public function create(Request $request)
	{
		$destination = \App\Destination::create($request->all());

		// Bikin Path untuk Image
		$pathimg = $request->get('location');
		$namewisata = $request->get('destination_name');
		$newstr = preg_replace('/\s/', '', $namewisata);
		$path = "wisata_img/$pathimg/$newstr/";

		if ($request->hasfile('img')) {
			$request->file('img')->move('wisata_img/' . $pathimg . '/' . $newstr . '/', $request->file('img')->getClientOriginalName());
			$destination->img = $path . $request->file('img')->getClientOriginalName();
			$destination->save();
		}
		//

		return redirect('/add-destination')->with('success', 'Destinasi baru telah berhasil ditambahkan!');
	}

	public function edit($id)
	{
		$destination = \App\Destination::find($id);
		return view('add_destination/edit', ['destination' => $destination]);
	}

	public function update(Request $request, $id)
	{
		$destination = \App\Destination::find($id);
		$destination->update($request->all());

		// Bikin Path untuk Image
		$pathimg = $request->get('location');
		$namewisata = $request->get('destination_name');
		$newstr = preg_replace('/\s/', '', $namewisata);
		$path = "wisata_img/$pathimg/$newstr/";

		if ($request->hasfile('img')) {
			$request->file('img')->move('wisata_img/' . $pathimg . '/' . $newstr . '/', $request->file('img')->getClientOriginalName());
			$destination->img = $path . $request->file('img')->getClientOriginalName();
			$destination->save();
		}
		return redirect('/add-destination')->with('success', 'Destinasi telah berhasil diubah!');
	}

	public function delete($id)
	{
		$destination = \App\Destination::find($id);
		$destination->delete();
		return redirect('/add-destination')->with('delete', 'Destinasi telah dihapus!');
	}
}

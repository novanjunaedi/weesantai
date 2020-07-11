<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() 
    {
    	$user_data = \App\User::all();
    	return view('user.index', ['user_data' => $user_data]);
    }

    public function userprofile($id)
    {
    	$user_data = \App\User::find($id);
    	return view('user.userprofile', ['user_data' => $user_data]);
    }

    public function edit($id)
    {
    	$user_data = \App\User::find($id);
    	return view('user.edit', ['user_data' => $user_data]);
    }

    public function update(Request $request,$id)
    {
    	$user_data = \App\User::find($id);
        $user_data->update($request->all());
        
		// Bikin Path untuk Image
		$pathimg = $request->get('id');
		$username = $request->get('name');
        $newstr= preg_replace('/\s/','',$username);
        $path = "profile_img/$pathimg/$newstr/";

    	if($request->hasfile('img')){
    		$request->file('img')->move('profile_img/'.$pathimg.'/'.$newstr.'/', $request->file('img')->getClientOriginalName());
    		$user_data->img = $path.$request->file('img')->getClientOriginalName();
    		$user_data->save();
    	}
    	return redirect('/user/{id}/profile')->with('success', 'Data telah berhasil diubah!');
    }
}

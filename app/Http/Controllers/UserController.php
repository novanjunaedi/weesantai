<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{

    public function userprofile($id)
    {
		$user_data = \App\User::find($id);
		
		$query = Auth::guard('role')->user();
		$s_id = $query->id;
		$s_name = $query->name;
		$s_img = $query->img;
		$s_email = $query->email;
		$s_dob = $query->dateofbirth;
		$s_gender = $query->gender;
		$s_phone = $query->phone;
		$s_address = $query->address;

		$data = [
			'user_data' => $user_data,
			'user_id' => $s_id,
			'user_name' => $s_name,
			'user_email' => $s_email,
			'user_dob' => $s_dob,
			'user_gender' => $s_gender,
			'user_img' => $s_img,
			'user_phone' => $s_phone,
			'user_address' => $s_address

		];

    	return view('user.userprofile', $data);
    }

    public function edit($id)
    {
		$user_data = \App\User::find($id);
		$query = Auth::guard('role')->user();
		$s_id = $query->user_id;
		$s_name = $query->name;
		$s_img = $query->img;
		$s_email = $query->email;
		$s_dob = $query->dateofbirth;
		$s_gender = $query->gender;
		if ($s_phone == null) {
			$s_phone = "belum diisi";
		}
		$s_phone = $query->phone;
		$s_address = $query->address;

		$data = [
			'user_data' => $user_data,
			'user_id' => $s_id,
			'user_name' => $s_name,
			'user_email' => $s_email,
			'user_dob' => $s_dob,
			'user_gender' => $s_gender,
			'user_img' => $s_img,
			'user_phone' => $s_phone,
			'user_address' => $s_address
		];
    	return view('user.edit', $data);
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
    	return redirect("/user/$id/profile")->with('success', 'Data telah berhasil diubah!');
    }
}

@extends('../layout/main')

@section('title', 'Portal Wisata Indonesia')

@section('bg-banner', 'background-image: url("/img/main/banner.jpg");')

@section('title-banner', 'Profile')

@section('content')

<section class="ftco-section">
    <div class="container">
        <div class="row">
        	<div class="col-lg-4">
        		<div class="card">
				  <img src="{{asset($user_data->img)}}" class="card-img-top" alt="profile">
				  <div class="card-body">
				    <h5 class="card-title">{{$user_data->name}}</h5>
				    <p class="card-text">
				    Email : {{$user_data->email}} <br />
				    Tempat, Tanggal Lahir : {{$user_data->dateofbirth}} <br />
				    Jenis Kelamin : {{$user_data->gender}} <br />
				    Nomor HP : {{$user_data->phone}} <br />
				    Alamat : {{$user_data->address}} <br />
					</p>
				    <a href="/user/{{$user_data->id}}/edit" class="btn btn-primary">Edit Profile</a>
				  </div>
				</div>
        	</div>
        	<div class="col-lg-8">
        		<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">Dashboard</h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				  </div>
				</div>
        	</div>
        </div>
    </div>
</section>
@endsection
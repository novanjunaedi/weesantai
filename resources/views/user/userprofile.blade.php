@extends('../layout/main')

@section('title', 'Portal Wisata Indonesia')

@section('bg-banner', 'background-image: url("/img/main/banner.jpg");')

@section('title-banner', 'Profile')

@section('content')

<section class="ftco-section">
    <div class="container">
        <div class="row">
        	<div class="col-lg-4 mb-2">
        		<div class="card">
				  <img src="{{ $user_img }}" class="card-img-top p-3" alt="profile">
				  <div class="card-body">
				    <h5 class="card-title">{{$user_name}}</h5>
				    <p class="card-text">
				    <i class="fas fa-fw fa-envelope"></i> {{$user_email}} <br />
				    <i class="fas fa-fw fa-calendar"></i> {{$user_dob}} <br />
				    <i class="fas fa-fw fa-venus-mars"></i> {{$user_gender}} <br />
				    <i class="fas fa-fw fa-phone"></i> {{$user_phone}} <br />
				    <i class="fas fa-fw fa-home"></i> {{$user_address}} <br />
					</p>
				    <a href="/user/{{$user_id}}/edit" class="btn btn-primary">Edit Profile</a>
				  </div>
				</div>
        	</div>
        	<div class="col-lg-8">
        		<div class="card" style="min-height: 150vh;">
				  <div class="card-body">
				    <h2 class="card-title">Dashboard</h2>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				  </div>
				</div>
        	</div>
        </div>
    </div>
</section>
@endsection
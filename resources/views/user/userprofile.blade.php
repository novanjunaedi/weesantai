@extends('../layout/main')

@section('title', 'Portal Wisata Indonesia')

@section('bg-banner', 'background-image: url("/img/main/banner.jpg");')

@section('title-banner', 'Profile')

@section('content')
<style>
	.kosong {
		color: red;
	}
	.ada{
		color: orange;
	}
</style>

<section class="ftco-section">
    <div class="container">
        <div class="row">
        	<div class="col-lg-4 mb-2">
        		<div class="card">
					@if ($user_img ==null )
					<img src="{{ asset('profile_default/default-pria.png') }}" height="300px" class="card-img-top p-3 img-fluid" alt="profile">
					@else
				  	<img src="{{ $user_img }}" class="card-img-top p-3 img-fluid" alt="profile">
				  	@endif
				  <div class="card-body">
				    <h5 class="card-title">{{$user_name}}</h5>
				    <p class="card-text">
					@if ($user_email ==null)
					<i class="fas fa-fw fa-envelope kosong"></i> <span class="kosong">belum ditambahkan</span> <br />
					@else
					<i class="fas fa-fw fa-envelope ada"></i> {{$user_email}} <br />
					@endif
					@if ($user_dob ==null) 
					<i class="fas fa-fw fa-calendar kosong"></i> <span class="kosong">belum ditambahkan</span> <br />
					@else
					<i class="fas fa-fw fa-calendar ada"></i> {{$user_dob}} <br />
					@endif
					@if ($user_gender==null)
					<i class="fas fa-fw fa-venus-mars kosong"></i> <span class="kosong">belum ditambahkan</span> <br/>
					@else
					<i class="fas fa-fw fa-venus-mars ada"></i> {{$user_gender}} <br/>
					@endif
			
					@if ($user_phone ==null) 
						<i class="fas fa-fw fa-phone kosong"></i> <span class="kosong">belum ditambahkan</span> <br/>
					@else 
						<i class="fas fa-fw fa-phone ada"></i> {{$user_phone}} <br />
					@endif
					@if ($user_address == null)
					<i class="fas fa-fw fa-home kosong"></i> <span class="kosong">belum ditambahkan</span> <br />
					@else 
					<i class="fas fa-fw fa-home ada"></i> {{$user_address}} <br />
					@endif
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
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
        		<div class="card shadow p-3 mb-5 bg-white rounded">
					@if ($user_data->img == null )
					<img src="{{ asset('profile_default/default-pria.png') }}" height="300px" class="card-img-top p-3 img-fluid" alt="profile">
					@else
<<<<<<< HEAD
				  	<img src="{{ asset('user_img/'.$user_data->img) }}" class="card-img-top p-3 img-fluid img-profile rounded-circle" alt="profile">
=======
				  	<img src="{{asset($user_data->img)}}" class="card-img-top p-3 img-fluid" alt="profile">
>>>>>>> e31d16c97bd0d1a47f88039c1ecb0bf4743c37c1
				  	@endif
				  <div class="card-body">
				    <h5 class="card-title">{{$user_data->name}}</h5>
				    <p class="card-text">
					@if ($user_data->email ==null)
					<i class="fas fa-fw fa-envelope kosong"></i> <span class="kosong">belum ditambahkan</span> <br />
					@else
					<i class="fas fa-fw fa-envelope ada"></i> {{$user_data->email}} <br />
					@endif
					@if ($user_data->dateofbirth ==null) 
					<i class="fas fa-fw fa-calendar kosong"></i> <span class="kosong">belum ditambahkan</span> <br />
					@else
					<i class="fas fa-fw fa-calendar ada"></i> {{$user_data->dateofbirth}} <br />
					@endif
					@if ($user_data->gender==null)
					<i class="fas fa-fw fa-venus-mars kosong"></i> <span class="kosong">belum ditambahkan</span> <br/>
					@else
					<i class="fas fa-fw fa-venus-mars ada"></i> {{$user_data->gender}} <br/>
					@endif
			
					@if ($user_data->phone ==null) 
						<i class="fas fa-fw fa-phone kosong"></i> <span class="kosong">belum ditambahkan</span> <br/>
					@else 
						<i class="fas fa-fw fa-phone ada"></i> {{$user_data->phone}} <br />
					@endif
					@if ($user_data->address == null)
					<i class="fas fa-fw fa-home kosong"></i> <span class="kosong">belum ditambahkan</span> <br />
					@else 
					<i class="fas fa-fw fa-home ada"></i> {{$user_data->address}} <br />
					@endif
					</p>
				    <a href="/user/{{$user_data->id}}/edit" class="btn btn-primary">Edit Profile</a>
				  </div>
				</div>
        	</div>
        	<div class="col-lg-8">
        		<div class="card shadow p-3 mb-5 bg-white rounded" style="min-height: 150vh;">
				  <div class="card-body">
				    <h2 class="card-title">Dashboard</h2>
				    <h5 class="card-text pt-3">
				    	Histori Transaksi
				    </h5>
				    <div class="row">
				    	<div class="col">
				    		<div class="card">
				    			<p class="card-title p-3">Taman Mini Indonesia Indah</p>
				    		</div>
				    	</div>	
				    </div>
				    <div class="row">
				    	<div class="col">
				    		<div class="card">
				    			<p class="card-title p-3">Taman Mini Indonesia Indah</p>
				    		</div>
				    	</div>	
				    </div>
				    <div class="row">
				    	<div class="col">
				    		<div class="card">
				    			<p class="card-title p-3">Taman Mini Indonesia Indah</p>
				    		</div>
				    	</div>	
				    </div>
				    <div class="row">
				    	<div class="col">
				    		<div class="card">
				    			<p class="card-title p-3">Taman Mini Indonesia Indah</p>
				    		</div>
				    	</div>	
				    </div>
				    <div class="row">
				    	<div class="col">
				    		<div class="card">
				    			<p class="card-title p-3">Taman Mini Indonesia Indah</p>
				    		</div>
				    	</div>	
				    </div>

				    <h5 class="card-text pt-4">
				    	Rekomendasi Untuk Anda
				    	<div class="row pt-4">
				    		<div class="col-md-6 ftco-animate">
								<div class="project-wrap">
									<a href="#" class="img" style="background-image: url({{asset($user_data->img)}});"></a>
									<div class="text p-4">
										<span class="price">Rp. harga</span>
										<span class="pt-3">
											<a href="#">lokasi</a>
										</span>
										<p class="card-text pt-3">
											<i class="fas fa-fw fa-map-marker"></i>alamat
										</p>
										<p style="text-align: right;"><a class="card-link" href="#">Detail</a></p>
									</div>
								</div>
							</div>

							<div class="col-md-6 ftco-animate">
								<div class="project-wrap">
									<a href="#" class="img" style="background-image: url({{asset($user_data->img)}});"></a>
									<div class="text p-4">
										<span class="price">Rp. harga</span>
										<span class="pt-3">
											<a href="#">lokasi</a>
										</span>
										<p class="card-text pt-3">
											<i class="fas fa-fw fa-map-marker"></i>alamat
										</p>
										<p style="text-align: right;"><a class="card-link" href="#">Detail</a></p>
									</div>
								</div>
							</div>

				    	</div>
				    </h5>
				  </div>
				</div>
        	</div>
        </div>
    </div>
</section>
@endsection
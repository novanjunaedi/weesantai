@extends('../layout/main')

@section('title', 'Portal Wisata Indonesia')

@section('bg-banner', 'background-image: url("/img/main/banner.jpg");')

@section('title-banner', 'Profile')

@section('content')
<style>
	.kosong {
		color: red;
	}

	.ada {
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
					<img src="{{asset($user_data->img)}}" class="card-img-top p-3 img-fluid" alt="profile">
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
							<i class="fas fa-fw fa-venus-mars kosong"></i> <span class="kosong">belum ditambahkan</span> <br />
							@else
							<i class="fas fa-fw fa-venus-mars ada"></i> {{$user_data->gender}} <br />
							@endif

							@if ($user_data->phone ==null)
							<i class="fas fa-fw fa-phone kosong"></i> <span class="kosong">belum ditambahkan</span> <br />
							@else
							<i class="fas fa-fw fa-phone ada"></i> {{$user_data->phone}} <br />
							@endif
							@if ($user_data->address == null)
							<i class="fas fa-fw fa-home kosong"></i> <span class="kosong">belum ditambahkan</span> <br />
							@else
							<i class="fas fa-fw fa-home ada"></i> {{$user_data->address}} <br />
							@endif
						</p>
						<a href="/user/{{$user_data->user_id}}/edit" class="btn btn-primary">Edit Profile</a>
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
						@if(!$transactions->isEmpty())
						@foreach($transactions as $transaction)
						<div class="row">
							<div class="col">
								<div class="card">
									<p class="card-title p-3">{{ $transaction->destination_name }}</p>
									<p class="card-title p-4" style="color: green"> Transaksi Sukses pada Tanggal {{$transaction->buy_date}}
									</p>
								</div>
							</div>
						</div>
						@endforeach
						@else
						<span>Belum Ada Transaksi</span>
						@endif

						<h5 class="card-text pt-4">
							Rekomendasi Untuk Anda
							<div class="row pt-4">
								<?php $count = 0; ?>
								@foreach($destinations as $destination)
								<?php if ($count == 2) break; ?>
								<div class="col-md-6 ftco-animate">
									<div class="project-wrap shadow mb-5 bg-white rounded">
										<a href="/detail-wisata/{{$destination->destination_name}}" class="img" style="background-image: url({{asset($destination->img)}});"></a>
										<div class="text p-4">
											<span class="price"><i class="fas fa-fw fa-money-bill-alt"></i> 
												Rp.{{$destination->price}}
											</span>
											<span class="pt-3">
												<span>{{$destination->location}}</span>
											</span>
											<h5 class="card-title pt-2">
												<a style="color:black;" href="/detail-wisata/{{$destination->destination_name}}">{{$destination->destination_name}}</a>
											</h5>
											<p class="card-text pt-0">
												<div class="row">
													<div class="col-sm-1">
														<i class="fas fa-fw fa-star" style="color:#ffc219;"></i>
													</div>
													<div class="col-sm-10">
														<span>{{$destination->rating}}</span>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-1">
														<i class="fas fa-fw fa-map-marker" style="color:#ffc219;"></i>		
													</div>
													<div class="col-sm-10">
														<span>{{$destination->address}}</span>		
													</div>
												</div>
											</p>
											<p style="text-align: right;"><a class="card-link" href="/detail-wisata/{{$destination->destination_name}}">Detail</a></p>
										</div>
									</div>
								</div>
								<?php $count++; ?>
								@endforeach
							</div>
						</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
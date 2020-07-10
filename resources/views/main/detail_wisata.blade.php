@extends('../layout/main')

@section('title', 'Portal Wisata Indonesia')

@section('bg-banner', 'background-image: url("/img/main/banner.jpg");')

@section('title-banner', 'Jadikan Liburan Anda Luar Biasa Bersama Kami')

@section('content')
@foreach($destinations as $destination)

<div class="title-wisata text-center" style="background-color: orange; padding: 25px;">

	<h1>{{$destination->location}}</h1>

</div>
<div class="container">
	<div class="row">
		<div class="col-lg-12 ftco-animate mb-4 mt-4">
			<div class="card shadow p-3 mb-5 bg-white rounded">
				<div class="container">
					<h1 class="card-title">{{$destination->destination_name}}</h1>
					<h5><i class="fas fa-fw fa-map-marker"></i> {{$destination->location}} | <i class="fas fa-fw fa-star"></i> {{$destination->rating}} </h5>
					<center>
						<img class="thumb-img" src="{{asset($destination->img)}}" alt="gambar">
					</center>
					<h5 class="card-content mt-4">Deskripsi</h5>
					<p>{{$destination->description}}</p>
					<h5 class="card-content mt-4">Harga Tiket</h5>
					<p>{{$destination->price}} /orang.</p>
					<a class="btn btn-warning mt-4 mb-4" href="#">Pesan Tiket Sekarang</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endforeach

</section>
@endsection
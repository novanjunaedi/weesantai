@extends('../layout/main')

@section('title', 'Portal Wisata Indonesia')

@section('bg-banner', 'background-image: url("img/main/banner.jpg");')

@section('title-banner', 'Jadikan Liburan Anda Luar Biasa Bersama Kami')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 ftco-animate mb-4 mt-4">
        	<div class="card shadow p-3 mb-5 bg-white rounded">
        		<div class="container">
        			<h1 class="card-title">Taman Mini Indonesia Indah</h1>
        			<h5><i class="fas fa-fw fa-map-marker"></i> Jakarta | <i class="fas fa-fw fa-star"></i> 5 </h5>
        			<center>
        				<img class="thumb-img" src="{{asset('/images/tmii.jpg')}}" alt="gambar">
        			</center>
        			<h5 class="card-content mt-4">Deskripsi</h5>
        			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam ducimus dolor praesentium minima in nisi unde? Eos hic rem tempora labore et harum, soluta natus repudiandae, repellat ratione ad quasi!</p>
        			<h5 class="card-content mt-4">Harga Tiket</h5>
        			<p>Rp.50000 /orang.</p>
        			<a class="btn btn-warning mt-4 mb-4" href="#">Pesan Tiket Sekarang</a>
        		</div>
        	</div>
        </div>
    </div>
 </div>
</section>
@endsection

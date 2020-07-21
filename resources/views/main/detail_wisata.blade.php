@extends('../layout/main')

@section('title', 'Portal Wisata Indonesia')

@section('bg-banner', 'background-image: url("/img/main/banner.jpg");')

@section('title-banner', 'Jadikan Liburan Anda Luar Biasa Bersama Kami')

@foreach($destinations as $destination)
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12 ftco-animate mb-4 mt-4">
			<div class="text-center mt-3">
				@if(session('success'))
				<div class="alert alert-success text-center" role="alert">
					{{session('success')}}
					<br>
					<a class="btn btn-warning mt-4 mb-4 text-center" href="/e-ticket/pdf">Cetak E-Ticket</a>
				</div>
				@endif
				@if(session('delete'))
				<div class="alert alert-danger" role="alert">
					{{session('delete')}}
				</div>
				@endif
			</div>
			<div class="card shadow p-3 mb-5 bg-white rounded">
				<div class="container">
					<h1 class="card-title">{{$destination->destination_name}}</h1>
					<h5><i class="fas fa-fw fa-map-marker"></i> {{$destination->location}} <i class="fas fa-fw fa-star"></i> {{$destination->rating}} </h5>
					<center>
						<img class="thumb-img" src="{{asset($destination->img)}}" alt="gambar" width="800px" height="300px">
					</center>
					<div class="row">
						<div class="col-sm-12 col-md-8">
							<h5 class="card-content mt-4">Deskripsi</h5>
							<p>{{$destination->description}}</p>
						</div>
						<div class="col-sm-12 col-md-4">
							<div class="report-container">
								<h5 class="card-content mt-4">{{$destination->location}} Weather Status</h5>
								<div class="weather-forecast">
									<img width="120px" height="120px"
										src="http://openweathermap.org/img/w/{{$cuaca->weather[0]->icon}}.png"
										class="weather-icon" /> {{ $cuaca->main->temp_max }}°C <span
										class="min-temperature">{{ $cuaca->main->temp_min}}°C</span>
								</div>
								<table class="table-striped table-responsive">
									<tr>
										<td>Hari</td>
										<td>:</td>
										<td>{{date("l g:i a", $currentTime)}}</td>
									</tr>
									<tr>
										<td>Tanggal</td>
										<td>:</td>
										<td>{{date("jS F, Y",$currentTime)}}</td>
									</tr>
									<tr>
										<td>Status Cuaca</td>
										<td>:</td>
										<td>{{ucwords($cuaca->weather[0]->description)}}</td>
									</tr>
									<tr>
										<td>Humidity</td>
										<td>:</td>
										<td> {{ $cuaca->main->humidity}}%</td>
									</tr>
									<tr>
										<td>Kecepatan Angin</td>
										<td>:</td>
										<td>{{$cuaca->wind->speed}} km/h</td>
									</tr>
										
									
								</table>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-8">
						<h5 class="card-content mt-4">Harga Tiket</h5>
						<p>{{$destination->price}} /orang.</p>
					</div>
					<div class="col-sm-12 col-md-4">
						<a class="btn btn-warning mt-4 mb-4 text-white" data-toggle="modal" data-target="#exampleModal">Pesan Tiket Sekarang</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endforeach

<section class="ftco-section ftco-no-pt" id="popular">
	<div class="container">
		<div class="row justify-content-center pb-4">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h2 class="mb-4">Rekomendasi untuk anda</h2>
				<p>Wisata Populer di {{$destination->location}}</p>
			</div>
		</div>
		<div class="row">
			@foreach($populer as $pp)
			<div class="col-md-4 ftco-animate">
				<div class="project-wrap shadow mb-5 bg-white rounded">
					<a href="/detail-wisata/{{$pp->destination_name}}" class="img" style="background-image: url({{asset($pp->img)}});"></a>
					<div class="text p-4">
						<span class="price"><i class="fas fa-fw fa-money-bill-alt"></i> 
							Rp.{{$pp->price}}
						</span>
						<span class="pt-3">
							<a href="#">{{$pp->location}}</a>
						</span>
						<h5 class="card-title pt-2">
							<a href="/detail-wisata/{{$pp->destination_name}}">{{$pp->destination_name}}</a>
						</h5>
						<p class="card-text pt-0">
							<div class="row">
								<div class="col-sm-1">
									<i class="fas fa-fw fa-star"></i>
								</div>
								<div class="col-sm-10">
									{{$pp->rating}}
								</div>
							</div>
							<div class="row">
								<div class="col-sm-1">
									<i class="fas fa-fw fa-map-marker"></i>		
								</div>
								<div class="col-sm-10">
									{{$pp->address}}		
								</div>
							</div>
						</p>
						<p style="text-align: right;"><a class="card-link" href="/detail-wisata/{{$pp->destination_name}}">Detail</a></p>
					</div>
				</div>
			</div>
		@endforeach
		</div>
	</div>
</section>

</div>

<footer class="ftco-footer bg-bottom" style="background-image: url(/img/main/footer-bg.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="block-23 mb-3">
					<span class="icon icon-map-marker mr-2"></span><span class="text mr-3">Kota Bandung, Jawa Barat</span><br>
					<a href="#"><span class="icon icon-phone mr-2"></span><span class="text mr-3">+62 822 1234 5678</span></a>
					<a href="#"><span class="icon icon-envelope mr-2"></span><span class="text">admin@weesantai.id</span></a>
				</div>
			</div>
		</div>
	</div>
</footer>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Konfirmasi Pembayaran</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="/payment" method="POST" enctype="multipart/form-data">
					{{csrf_field()}}
					<div class="form-group">
						<label for="inputName">Nama</label>
						<input name="name" type="text" class="form-control" readonly id="inputName" value="{{ $s_name }}">
					</div>
					<div class="form-group">
						<label for="inputEmail">email</label>
						<input name="email" type="text" class="form-control" readonly id="inputEmail" value="{{ $s_email }}">
					</div>
					<div class="form-group">
						<label for="selectPayment">Payment Method</label>
						<select name="payment" class="form-control" id="selectPayment">
							<option value="dana">Dana</option>
							<option value="ovo">Ovo</option>
							<option value="bri">BRI</option>
							<option value="bni">BNI</option>
							<option value="mandiri">Mandiri</option>
						</select>
						@foreach($destinations as $destination)
						<div class="form-group">
							<label for="inputDestinationName">Destination Name</label>
							<input name="destination_name" type="text" readonly class="form-control" id="inputDestinationName" value="{{$destination->destination_name}}">
						</div>
						<div class="form-group">
							<label for="inputDestinationPrice">Price</label>
							<input name="price" type="text" readonly class="form-control" id="inputDestinationPrice" value="{{$destination->price}}">
						</div>
						@endforeach
						<div class="form-group">
							<label for="inputBuyDate">Buy At</label>
							<input type="text" readonly class="form-control" name="buy_date" value="{{$timenow}}">
						</div>
						<div class="form-group">
							<label for="inputValidUntil">Valid Until</label>
							<input type="text" readonly name="valid_until" class="form-control" id="inputValidUntil" value="{{$valid_until}}"></input>
						</div>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary">Checkout</button>
				</form>
			</div>
		</div>
	</div>
</div>
</section>
@endsection
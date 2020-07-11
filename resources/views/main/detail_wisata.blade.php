@extends('../layout/main')

@section('title', 'Portal Wisata Indonesia')

@section('bg-banner', 'background-image: url("/img/main/banner.jpg");')

@section('title-banner', 'Jadikan Liburan Anda Luar Biasa Bersama Kami')

@section('content')
@foreach($destinations as $destination)

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
					<a class="btn btn-warning mt-4 mb-4"  data-toggle="modal" data-target="#exampleModal">Pesan Tiket Sekarang</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endforeach

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Tambah Destinasi</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		  
		  <form action="/payment" method="POST" enctype="multipart/form-data">
			  {{csrf_field()}}
			<div class="form-group">
			  <label for="inputDestinationName">Nama</label>
			<input name="destination_name" type="text" class="form-control" id="inputDestinationName" value="{{ $s_name }}">
			</div>
			<div class="form-group">
			  <label for="inputLocation">Lokasi</label>
			  <input name="location" type="text" class="form-control" id="inputLocation" placeholder="Masukkan lokasi">
			</div>
			<div class="form-group">
			  <label for="inputDestinationAddress">Alamat</label>
			  <input name="address" type="text" class="form-control" id="inputDestinationAddress" placeholder="Masukkan alamat">
			</div>
			<div class="form-group">
			  <label for="inputDestinationPrice">Harga</label>
			  <input name="price" type="text" class="form-control" id="inputDestinationPrice" placeholder="Masukkan harga">
			</div>
			<div class="form-group">
			  <label for="inputDestinationRating">Rating</label>
			  <input name="rating" type="text" class="form-control" id="inputDestinationRating" placeholder="Masukkan rating">
			</div>
			<div class="form-group">
			  <label for="inputDestinationImg">Image Banner</label>
			  <input type="file" class="form-control" name="img">
			</div>
			<div class="form-group">
			  <label for="inputDestinationDesc">Deskripsi</label>
			  <textarea name="description" class="form-control" id="inputDestinationDesc" rows="3"></textarea>
			</div>
			
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
		  <button type="submit" class="btn btn-primary">Tambah</button>
		  
		  </form>

		</div>
	  </div>
	</div>
  </div>

</section>
@endsection
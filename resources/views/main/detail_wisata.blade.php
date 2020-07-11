@extends('../layout/main')

@section('title', 'Portal Wisata Indonesia')

@section('bg-banner', 'background-image: url("/img/main/banner.jpg");')

@section('title-banner', 'Jadikan Liburan Anda Luar Biasa Bersama Kami')

@section('content')

@foreach($destinations as $destination)

<div class="container">
	<div class="row">
		@if(session('success'))
	          	<div class="alert alert-success" role="alert">
				  {{session('success')}}
				</div>
				<a class="btn btn-warning mt-4 mb-4"  href="/e-ticket">Print Your Ticketd</a>
				@endif
				@if(session('delete'))
	          	<div class="alert alert-danger" role="alert">
				  {{session('delete')}}
				</div>
				@endif
		<div class="col-lg-12 ftco-animate mb-4 mt-4">
			<div class="card shadow p-3 mb-5 bg-white rounded">
				<div class="container">
					<h1 class="card-title">{{$destination->destination_name}}</h1>
					<h5><i class="fas fa-fw fa-map-marker"></i> {{$destination->location}}  <i class="fas fa-fw fa-star"></i> {{$destination->rating}} </h5>
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
			  <label for="inputName">Nama</label>
			<input name="name" type="text" class="form-control" readonly id="inputName" value="{{ $s_name }}">
			</div>
			<div class="form-group">
			  <label for="inputEmail">email</label>
			<input name="email" type="text" class="form-control" id="inputEmail" value="{{ $s_email }}">
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
			<input name="destination_name" type="text" class="form-control" id="inputDestinationName" value="{{$destination->destination_name}}">
			</div>
			<div class="form-group">
			  <label for="inputDestinationPrice">Price</label>
			<input name="price" type="text" class="form-control" id="inputDestinationPrice" value="{{$destination->price}}">
			</div>
			@endforeach
			<div class="form-group">
			  <label for="inputBuyDate">Buy At</label>
			<input type="text" class="form-control" name="buy_date" value="{{$timenow}}">
			</div>
			<div class="form-group">
			  <label for="inputValidUntil">Valid Until</label>
			<input type="text" name="valid_until" class="form-control" id="inputValidUntil" value="{{$valid_until}}"></input>
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
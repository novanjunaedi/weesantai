@extends('layout.master')

@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">List Destinasi</h1>
          </div>

          <!-- Content Row -->
          <div class="row">
          	<div class="col">
          		<button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal">
				  Tambah Destinasi
				</button>
				@if(session('success'))
	          	<div class="alert alert-success" role="alert">
				  {{session('success')}}
				</div>
				@endif
				<div class="card" style="overflow-y: hidden;">
					<table class="table table-hover">
						<thead>
							<tr>
								<td>Nama Destinasi</td>
								<td>Lokasi</td>
								<td>Alamat</td>
								<td>Harga</td>
								<td>Deskripsi</td>
								<td>Action</td>
							</tr>
						</thead>
						<tbody>
							@foreach($destination_data as $destination)
							<tr>
								<td>{{$destination->destination_name}}</td>
								<td>{{$destination->location}}</td>
								<td>{{$destination->address}}</td>
								<td>{{$destination->price}}</td>
								<td>{{$destination->description}}</td>
								<td>
									<a class="btn btn-primary btn-sm" href="/add-destination/{{$destination->id}}/edit">Ubah</a>
									<a class="btn btn-primary btn-sm" href="#">Hapus</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>	
				</div>
	          </div>	
          	</div>
			
		
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
		        
				<form action="/add-destination/create" method="POST">
					{{csrf_field()}}
				  <div class="form-group">
				    <label for="inputDestinationName">Nama Destinasi</label>
				    <input name="destination_name" type="text" class="form-control" id="inputDestinationName" placeholder="Masukkan nama destinasi">
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

        </div>
        <!-- /.container-fluid -->

@endsection
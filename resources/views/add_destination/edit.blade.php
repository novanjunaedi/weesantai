@extends('layout.master')

@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Destinasi</h1>
          </div>

          <!-- Content Row -->
          <div class="row">
            <div class="col">
              
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                  {{session('success')}}
                </div>
            @endif
            
            <form action="/add-destination/{{$destination->id}}/update" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="form-group">
                <label for="inputDestinationName">Nama Destinasi</label>
                <input name="destination_name" type="text" class="form-control" id="inputDestinationName" placeholder="Masukkan nama destinasi" value="{{$destination->destination_name}}" required>
              </div>
              <div class="form-group">
                <label for="inputLocation">Lokasi</label>
                <input name="location" type="text" class="form-control" id="inputLocation" placeholder="Masukkan lokasi" value="{{$destination->location}}" required>
              </div>
              <div class="form-group">
                <label for="inputDestinationAddress">Alamat</label>
                <input name="address" type="text" class="form-control" id="inputDestinationAddress" placeholder="Masukkan alamat" value="{{$destination->address}}" required>
              </div>
              <div class="form-group">
                <label for="inputDestinationPrice">Harga</label>
                <input name="price" type="text" class="form-control" id="inputDestinationPrice" placeholder="Masukkan harga" value="{{$destination->price}}" required>
              </div>
              <div class="form-group">
                <label for="inputDestinationRating">Rating</label>
                <input name="rating" type="text" class="form-control" id="inputDestinationRating" placeholder="Masukkan rating" value="{{$destination->rating}}" required>
              </div>
              <div class="form-group">
                <label for="inputDestinationImg">Image</label>
                <input type="file" class="form-control" name="img">
              </div>
              <div class="form-group">
                <label for="inputDestinationDesc">Deskripsi</label>
                <textarea name="description" class="form-control" id="inputDestinationDesc" rows="3" required>{{$destination->description}}</textarea>
              </div>
              <button type="submit" class="btn btn-primary">Ubah</button>
              <a class="btn btn-secondary" href="/add-destination">Kembali</a>
            </div>
          </form>


            </div>  
          </div>

  </div>
<!-- /.container-fluid -->

@endsection
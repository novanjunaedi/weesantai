@extends('layout.master')

@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">History Transaction User</h1>
		  </div>

          <!-- Content Row -->
          <div class="row">
          	<div class="col">
				@if(session('delete'))
	          	<div class="alert alert-danger" role="alert">
				  {{session('delete')}}
				</div>
				@endif
				<div class="card" style="overflow-y: hidden;">
					<table class="table table-hover table-sm">
						<thead>
							<tr>
								<td>Nama</td>
								<td>email</td>
								<td>Jenis Pembayaran</td>
								<td>Nama Destinasi</td>
								<td>Harga</td>
								<td>tanggal pembelian</td>
								<td>tiket valid hingga</td>
							</tr>
						</thead>
						<tbody>
							@foreach($trans_data as $transaksi)
							<tr>
								<td>{{$transaksi->name}}</td>
								<td>{{$transaksi->email}}</td>
								<td>{{$transaksi->payment}}</td>
								<td>{{$transaksi->destination_name}}</td>
								<td>{{$transaksi->price}}</td>
								<td>{{$transaksi->buy_date}}</td>
								<td>{{$transaksi->valid_until}}</td>
								<td style="max-width: 25px;">
									<a class="btn btn-danger btn-sm" href="/transaction/{{$transaksi->id}}/delete"><i class="fas fa-fw fa-trash"></i></a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>	
				</div>
	          </div>	
          	</div>
			
		
		

        </div>
        <!-- /.container-fluid -->

@endsection
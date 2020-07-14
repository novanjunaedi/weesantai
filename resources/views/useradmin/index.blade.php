@extends('layout.master')

@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">List User</h1>
          </div>

		  <a class="btn btn-warning mt-4 mb-4 text-center" href="/user-admin/print-pdf"><i class="fas fa-fw fa-print"></i></a>

          <!-- Content Row -->
          <div class="row">
          	<div class="col">
       
				@if(session('success'))
	          	<div class="alert alert-success" role="alert">
				  {{session('success')}}
				</div>
				@endif
				<div class="card" style="overflow-y: hidden;">
					<table class="table table-hover table-sm">
						<thead>
							<tr>
								<td>User Id</td>
								<td>Nama</td>
								<td>Email</td>
								<td>Action</td>
							</tr>
						</thead>
						<tbody>
							@foreach($user_data as $user)
							<tr>
								<td><a href="/user/{{$user->id}}/detail">{{$user->user_id}}</a></td>
								<td>{{$user->name}}</td>
								<td>{{$user->email}}</td>
								<td style="max-width: 25px;">
									{{-- <a class="btn btn-primary btn-sm" href="/add-user/{{$user->id}}/edit"><i class="fas fa-fw fa-edit"></i></a> --}}
									<a class="btn btn-danger btn-sm" href="/add-user/{{$user->id}}/delete"><i class="fas fa-fw fa-trash"></i></a>
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
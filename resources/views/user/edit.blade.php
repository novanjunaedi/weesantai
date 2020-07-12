@extends('../layout/main')

@section('title', 'Portal Wisata Indonesia')

@section('bg-banner', 'background-image: url("/img/main/banner.jpg");')

@section('title-banner', 'Edit Profile')

@section('content')

<section class="ftco-section">
    <div class="container">
        <div class="row">
        	<div class="col">
        		<div class="card">
				  <div class="card-body">
				    @if(session('success'))
		                <div class="alert alert-success" role="alert">
		                  {{session('success')}}
		                </div>
		            @endif
		            <div class="container p-5">
		            	<form action="/user/{{$user_id}}/update" method="POST" enctype="multipart/form-data">
			              {{csrf_field()}}
			              <div class="form-group">
			              	<div class="row">
			              		<div class="col-lg-3">
								  <label>Nama</label>		
			              		</div>
			              		<div class="col-lg-9">
			              			<input name="name" type="text" class="form-control" id="inputName" placeholder="Masukkan nama" value="{{$user_name}}" required>		
			              		</div>
			              	</div>
			              </div>
			              <div class="form-group">
			              	<div class="row">
			              		<div class="col-lg-3">
			              			<label>Email</label>		
			              		</div>
			              		<div class="col-lg-9">
			              			<input name="email" type="text" class="form-control" id="inputEmail" placeholder="Masukkan email" value="{{$user_email}}" readonly>		
			              		</div>
			              	</div>
			              </div>
			              <div class="form-group">
			              	<div class="row">
			              		<div class="col-lg-3">
			              			<label>Tempat/Tanggal Lahir</label>		
			              		</div>
			              		<div class="col-lg-9">
			              			<input name="dateofbirth" type="date" class="form-control" id="inputDate" value="{{$user_dob}}" required>
			              		</div>
			              	</div>
			              </div>
			              <div class="form-group">
			              	<div class="row">
			              		<div class="col-lg-3">
			              			<label>Jenis Kelamin</label>		
			              		</div>
			              		<div class="col-lg-9">
			              			<select class="form-control" name="gender" id="gender">
										<option value="Pria" @if($user_gender == 'Pria') selected @endif>Pria</option>
										<option value="Wanita" @if($user_gender == 'Wanita') selected @endif>Wanita</option>
									</select>
			              		</div>
			              	</div>
			              </div>
			              <div class="form-group">
			              	<div class="row">
			              		<div class="col-lg-3">
			              			<label>Nomor HP aktif</label>		
			              		</div>
			              		<div class="col-lg-9">
			              			<input name="phone" type="text" class="form-control" id="inputPhone" placeholder="Masukkan nomor hp" value="{{$user_phone}}" required>		
			              		</div>
			              	</div>
			              </div>
			              <div class="form-group">
			              	<div class="row">
			              		<div class="col-lg-3">
			              			<label>Foto Profil</label>		
			              		</div>
			              		<div class="col-lg-9">
                					<input type="file" class="form-control" name="img">
			              		</div>
			              	</div>
			              </div>
			              <div class="form-group">
			              	<div class="row">
			              		<div class="col-lg-3">
			              			<label>Alamat</label>		
			              		</div>
			              		<div class="col-lg-9"><textarea name="address" class="form-control" id="inputDestinationDesc" rows="3" required>{{$user_address}}</textarea>
			              		</div>
			              	</div>
			              </div>
			              <button type="submit" class="btn btn-primary">Ubah</button>
			              <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
			            </div>
			          </form>	
		            </div>
		            
				  </div>
				</div>
        	</div>
        </div>
    </div>
</section>
@endsection
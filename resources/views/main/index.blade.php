@extends('../layout/main')

@section('title', 'Portal Wisata Indonesia')

@section('bg-banner', 'background-image: url("/img/main/banner.jpg");')

@section('title-banner', 'Jadikan Liburan Anda Luar Biasa Bersama Kami')

@section('search-form')
<section class="ftco-section ftco-no-pb ftco-no-pt">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="search-wrap-1 ftco-animate p-4">
					<form action="#" class="search-property-1">
						<div class="row">
							<div class="col-lg-10 align-items-end">
								<div class="form-group">
									<label for="#">Cari Tempat Wisata</label>
									<div class="form-field">
										<div class="icon"><span class="ion-ios-search"></span></div>
										<input type="text" class="form-control" placeholder="Masukkan Destinasi">
									</div>
								</div>
							</div>
							<div class="col-lg-2 align-self-end">
								<div class="form-group">
									<div class="form-field">
										<input type="submit" value="Cari" class="form-control btn btn-primary">
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@section('content')
<section class="ftco-section" id="destination">
	<div class="container">
		<div class="row justify-content-center pb-4">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h2 class="mb-4">Kota Destinasi Terbaik</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 ftco-animate mb-4">
				<div class="project-destination">
					<a href="/detail-list/Jakarta" class="img" style="background-image: url(img/city/jakarta.jpg);">
						<div class="text">
							<h3>Jakarta</h3>
							<span>{{ $jakarta_count }} Destinasi</span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 ftco-animate mb-4">
				<div class="project-destination">
					<div class="overlay"></div>
					<a href="/detail-list/Bali" class="img" style="background-image: url(img/city/bali.jpg);">
						<div class="text">
							<h3>Bali</h3>
							<span>{{ $bali_count }} Destinasi</span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 ftco-animate mb-4">
				<div class="project-destination">
					<a href="/detail-list/Bandung" class="img" style="background-image: url(img/city/bandung.jpeg);">
						<div class="text">
							<h3>Bandung</h3>
							<span>{{ $bandung_count }} Destinasi</span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 ftco-animate mb-4">
				<div class="project-destination">
					<a href="/detail-list/Yogyakarta" class="img" style="background-image: url(img/city/yogyakarta.jpg);">
						<div class="text">
							<h3>Yogyakarta</h3>
							<span>{{$yogyakarta_count}} Destinasi</span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 ftco-animate mb-4">
				<div class="project-destination">
					<a href="/detail-list/Malang" class="img" style="background-image: url(img/city/malang.jpg);">
						<div class="text">
							<h3>Malang</h3>
							<span>{{ $malang_count}} Destinasi</span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 ftco-animate mb-4">
				<div class="project-destination">
					<a href="/detail-list/Surabaya" class="img" style="background-image: url(img/city/Surabaya.jpg);">
						<div class="text">
							<h3>Surabaya</h3>
							<span>{{$surabaya_count}} Destinasi</span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 ftco-animate mb-4">
				<div class="project-destination">
					<a href="/detail-list/Lombok" class="img" style="background-image: url(img/city/lombok.jpg);">
						<div class="text">
							<h3>Lombok</h3>
							<span>{{ $lombok_count }} Destinasi</span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 ftco-animate mb-4">
				<div class="project-destination">
					<a href="/detail-list/Lampung" class="img" style="background-image: url(img/city/lampung.jpg);">
						<div class="text">
							<h3>Lampung</h3>
							<span>{{$lampung_count}} Destinasi</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-no-pt" id="popular">
	<div class="container">
		<div class="row justify-content-center pb-4">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h2 class="mb-4">Destinasi Populer</h2>
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
						<p class="card-text pt-3">
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
@endsection
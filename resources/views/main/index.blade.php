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
					<form action="/search-destination" method="GET" class="search-property-1">
						@csrf
						<div class="row">
							<div class="col-lg-10 align-items-end">
								<div class="form-group">
									<label for="search">Cari Tempat Wisata</label>
									<div class="form-field">
										<div class="icon"><span class="ion-ios-search"></span></div>
										<input type="text" name="search" class="form-control" placeholder="Masukkan Destinasi">
									</div>
								</div>
							</div>
							<div class="col-lg-2 align-self-end">
								<div class="form-group">
									<div class="form-field">
										<button type="submit" class="form-control btn btn-primary">Cari</button>
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
<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center pb-4">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h2 class="mb-4" id="destinasi">Kota Destinasi Terbaik</h2>
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
							<span>{{ $lombok_count }} Tours</span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 ftco-animate mb-4">
				<div class="project-destination">
					<a href="/detail-list/Lampung" class="img" style="background-image: url(img/city/lampung.jpg);">
						<div class="text">
							<h3>Lampung</h3>
							<span>{{$lampung_count}} Tours</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-no-pt">
	<div class="container">
		<div class="row justify-content-center pb-4">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h2 class="mb-4">Destinasi Populer</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 ftco-animate">
				<div class="project-wrap">
					<a href="#" class="img" style="background-image: url(img/main/destination-1.jpg);"></a>
					<div class="text p-4">
						<span class="price">$300/person</span>
						<span class="days">8 Days Tour</span>
						<h3><a href="#">Bali, Indonesia</a></h3>
						<p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
						<ul>
							<li><span class="flaticon-shower"></span>2</li>
							<li><span class="flaticon-king-size"></span>3</li>
							<li><span class="flaticon-mountains"></span>Near Mountain</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 ftco-animate">
				<div class="project-wrap">
					<a href="#" class="img" style="background-image: url(img/main/destination-2.jpg);"></a>
					<div class="text p-4">
						<span class="price">$300/person</span>
						<span class="days">10 Days Tour</span>
						<h3><a href="#">Bali, Indonesia</a></h3>
						<p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
						<ul>
							<li><span class="flaticon-shower"></span>2</li>
							<li><span class="flaticon-king-size"></span>3</li>
							<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 ftco-animate">
				<div class="project-wrap">
					<a href="#" class="img" style="background-image: url(img/main/destination-3.jpg);"></a>
					<div class="text p-4">
						<span class="price">$300/person</span>
						<span class="days">7 Days Tour</span>
						<h3><a href="#">Bali, Indonesia</a></h3>
						<p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
						<ul>
							<li><span class="flaticon-shower"></span>2</li>
							<li><span class="flaticon-king-size"></span>3</li>
							<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-4 ftco-animate">
				<div class="project-wrap">
					<a href="#" class="img" style="background-image: url(img/main/destination-4.jpg);"></a>
					<div class="text p-4">
						<span class="price">$300/person</span>
						<span class="days">8 Days Tour</span>
						<h3><a href="#">Bali, Indonesia</a></h3>
						<p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
						<ul>
							<li><span class="flaticon-shower"></span>2</li>
							<li><span class="flaticon-king-size"></span>3</li>
							<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 ftco-animate">
				<div class="project-wrap">
					<a href="#" class="img" style="background-image: url(img/main/destination-5.jpg);"></a>
					<div class="text p-4">
						<span class="price">$300/person</span>
						<span class="days">10 Days Tour</span>
						<h3><a href="#">Bali, Indonesia</a></h3>
						<p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
						<ul>
							<li><span class="flaticon-shower"></span>2</li>
							<li><span class="flaticon-king-size"></span>3</li>
							<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 ftco-animate">
				<div class="project-wrap">
					<a href="#" class="img" style="background-image: url(img/main/destination-6.jpg);"></a>
					<div class="text p-4">
						<span class="price">$300/person</span>
						<span class="days">7 Days Tour</span>
						<h3><a href="#">Bali, Indonesia</a></h3>
						<p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
						<ul>
							<li><span class="flaticon-shower"></span>2</li>
							<li><span class="flaticon-king-size"></span>3</li>
							<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
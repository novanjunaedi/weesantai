@extends('../layout/main')

@section('title', 'Destinasi')
@section('bg-banner', 'background-image: url("img/main/banner_destination.jpg");')
@section('title-banner', 'Destinasi Dari Berbagai Kota')

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
<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center pb-4">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h2 class="mb-4">Kota-Kota Destinasi</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 ftco-animate mb-4">
				<div class="project-destination">
					<a href="#" class="img" style="background-image: url(img/city/jakarta.jpg);">
						<div class="text">
							<h3>Jakarta</h3>
							<span>8 Destinasi</span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 ftco-animate mb-4">
				<div class="project-destination">
					<div class="overlay"></div>
					<a href="#" class="img" style="background-image: url(img/city/bali.jpg);">
						<div class="text">
							<h3>Bali</h3>
							<span>10 Destinasi</span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 ftco-animate mb-4">
				<div class="project-destination">
					<a href="#" class="img" style="background-image: url(img/city/bandung.jpeg);">
						<div class="text">
							<h3>Bandung</h3>
							<span>7 Destinasi</span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 ftco-animate mb-4">
				<div class="project-destination">
					<a href="#" class="img" style="background-image: url(img/city/yogyakarta.jpg);">
						<div class="text">
							<h3>Yogyakarta</h3>
							<span>5 Destinasi</span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 ftco-animate mb-4">
				<div class="project-destination">
					<a href="#" class="img" style="background-image: url(img/city/malang.jpg);">
						<div class="text">
							<h3>Malang</h3>
							<span>9 Destinasi</span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 ftco-animate mb-4">
				<div class="project-destination">
					<a href="#" class="img" style="background-image: url(img/city/Surabaya.jpg);">
						<div class="text">
							<h3>Surabay</h3>
							<span>5 Destinasi</span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 ftco-animate mb-4">
				<div class="project-destination">
					<a href="#" class="img" style="background-image: url(img/city/lombok.jpg);">
						<div class="text">
							<h3>Lombok</h3>
							<span>3 Tours</span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 ftco-animate mb-4">
				<div class="project-destination">
					<a href="#" class="img" style="background-image: url(img/city/lampung.jpg);">
						<div class="text">
							<h3>Lampung</h3>
							<span>4 Tours</span>
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
				<h2 class="mb-4">Destinasi Wisata</h2>
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

			<div class="col-md-4 ftco-animate">
				<div class="project-wrap">
					<a href="#" class="img" style="background-image: url(img/main/destination-7.jpg);"></a>
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
					<a href="#" class="img" style="background-image: url(img/main/destination-8.jpg);"></a>
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
					<a href="#" class="img" style="background-image: url(img/main/destination-9.jpg);"></a>
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
					<a href="#" class="img" style="background-image: url(img/main/destination-10.jpg);"></a>
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
					<a href="#" class="img" style="background-image: url(img/main/destination-11.jpg);"></a>
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
					<a href="#" class="img" style="background-image: url(img/main/destination-12.jpg);"></a>
					<div class="text p-4">
						<span class="price">$300/person</span>
						<span class="days">7 Days Tour</span>
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
		</div>
		<div class="row mt-5">
			<div class="col text-center">
				<div class="block-27">
					<ul>
						<li><a href="#">&lt;</a></li>
						<li class="active"><span>1</span></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">&gt;</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
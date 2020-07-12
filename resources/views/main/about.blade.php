@extends('../layout/main')

@section('title', 'Tentang')
@section('bg-banner', 'background-image: url("img/main/banner_about.jpg");')
@section('title-banner', 'Tentang Kami')

@section('content')
<section class="ftco-section services-section bg-light">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate">
        <h2 class="mb-4">Tentang Kami</h2>
        <p>Weesantai menawarkan cara yang praktis agar anda bisa menemukan beragam aktivitas, atraksi dan kegiatan lainnya saat berlibur ke mana pun.</p>
        <p>Temukan dan pesanlah berbagai layanan di destinasi dengan harga yang terbaik. Cukup dengan beberapa klik, anda sudah bisa mengagumi dunia bawah laut Bali dan Berbagai Wisata Indonesia</p>
      </div>
      <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate">
        <h2 class="mb-4">Misi Kami</h2>
        <p>Permudah diri anda untuk menikmati segala hal yang ditawarkan di destinasi.</p>
        <p>Sudah seharusnya traveling itu menjadi momen untuk bersenang-senang tanpa harus terbeban dengan banyak perencanaan. Dengan begitu banyak aktivitas yang menunggu untuk ditemukan, kami ingin menjembatani traveler dengan berbagai kegiatan yang mereka inginkan.</p>
      </div>

    </div>
  </div>
</section>

<section class="team">
  <div class="container pb-4 pt-4">
    <h1 style="text-align: center;">Development Team</h1>
    <p style="text-align: center;">Tim developer dibalik Weesantai.id</p>
    <div class="row">
      <div class="col-lg-12">
        <div class="card-deck">
          <div class="card shadow mb-5 bg-white rounded">
            <img src="{{asset('/img/fijey.jpg')}}" class="card-img-top" alt="Fajar Mukti Hidayat">
            <div class="card-body p-3">
              <h5 class="card-title">Fajar Mukti Hidayat</h5>
              <p class="card-text">
                Fullstack Developer
              </p>
              <p class="card-text">
                <small class="text-muted">
                <a href="#">Instagram</a> |
                <a href="#">Github</a>
                </small>
              </p>
            </div>
          </div>
          <div class="card shadow mb-5 bg-white rounded">
            <img src="{{asset('/img/kintol.jpg')}}" class="card-img-top" alt="Mochamad Rizki">
            <div class="card-body p-3">
              <h5 class="card-title">Mochamad Rizki</h5>
              <p class="card-text">Backend Developer</p>
              <p class="card-text"><small class="text-muted">
              <a href="#">Instagram</a> |
                <a href="#">Github</a>
              </small></p>
            </div>
          </div>
          <div class="card shadow mb-5 bg-white rounded">
            <img src="{{asset('/img/novan.jpg')}}" class="card-img-top" alt="Novan Junaedi">
            <div class="card-body p-3">
              <h5 class="card-title">Novan Junaedi</h5>
              <p class="card-text">Frontend Developer</p>
              <p class="card-text"><small class="text-muted">
                <a href="#">Instagram</a> |
                <a href="#">Github</a>
              </small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-counter img" id="section-counter">
  <div class="container">
    <div class="row">
      <div class="col-md-4 justify-content-center counter-wrap ftco-animate">
        <div class="block-18 text-center my-4">
          <div class="text">
            <strong class="number" data-number="300">0</strong>+
            <span>Tur Berhasil</span>
          </div>
        </div>
      </div>
      <div class="col-md-4 justify-content-center counter-wrap ftco-animate">
        <div class="block-18 text-center my-4">
          <div class="text">
            <strong class="number" data-number="10000">0</strong>+
            <span>Pelanggan Bahagia</span>
          </div>
        </div>
      </div>
      <div class="col-md-4 justify-content-center counter-wrap ftco-animate">
        <div class="block-18 text-center my-4">
          <div class="text">
            <strong class="number" data-number="200">0</strong>+
            <span>Destinasi Wisata</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
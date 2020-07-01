@extends('../layout/main')

@section('title', 'Kontak')
@section('bg-banner', 'background-image: url("img/main/banner_contact.jpg");')
@section('title-banner', 'Kontak Kami')

@section('content')
<section class="ftco-section ftco-no-pb contact-section">
  <div class="container">
    <div class="row d-flex contact-info">
      <div class="col-md-3 d-flex">
        <div class="align-self-stretch box p-4 text-center">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="icon-map-signs"></span>
          </div>
          <h3 class="mb-2">Alamat</h3>
          <p>Kota Bandung, Jawa Barat</p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="align-self-stretch box p-4 text-center">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="icon-phone2"></span>
          </div>
          <h3 class="mb-2">Telepon</h3>
          <p><a href="tel://1234567920">+62 822 1234 5678</a></p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="align-self-stretch box p-4 text-center">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="icon-paper-plane"></span>
          </div>
          <h3 class="mb-2">Email</h3>
          <p><a href="mailto:info@yoursite.com">admin@weesantai.id</a></p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="align-self-stretch box p-4 text-center">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="icon-globe"></span>
          </div>
          <h3 class="mb-2">Website</h3>
          <p><a href="#">weesantai.id</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section contact-section">
  <div class="container">
    <div class="row block-9">
      <div class="col-md-6 order-md-last d-flex">
        <form action="#" class="bg-light p-5 contact-form">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Nama">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Subjek">
          </div>
          <div class="form-group">
            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Pesan"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Kirim Pesan" class="btn btn-primary py-3 px-5">
          </div>
        </form>

      </div>

      <div class="col-md-6 d-flex">
        <div id="map" class="bg-white"></div>
      </div>
    </div>
  </div>
</section>
@endsection
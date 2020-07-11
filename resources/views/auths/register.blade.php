@extends('layout.login.mainlogin')
@section('title','Registrasi Akun')

@section('container')

<body class="bg-login-register">
  <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row justify-content-center">
          <div class="col-lg-7 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-5">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Registrasi Akun</h1>
              </div>
              @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif
              <form class="user" action="/register" method="POST">
                @csrf
                <div class="form-group">
                  <input type="text" name="name" class="form-control form-control-user" placeholder="Nama Lengkap" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-user" placeholder="Email" value="{{ old('email') }}">
                </div>
                <!-- Jenis kelamin :
                <div class="row">
                  <div class="col-sm-2">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                      <label class="form-check-label" for="exampleRadios1">
                        Pria
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-10 mb-2">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                      <label class="form-check-label" for="exampleRadios2">
                        Wanita
                      </label>
                    </div>
                  </div>
                </div> -->

                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-user" placeholder="Kata Sandi" value="{{ old('password') }}">
                </div>
                <div class="form-group">
                  <input type="password" name="retype_password" class="form-control form-control-user" placeholder="Ulangi Kata Sandi" value="{{ old('password') }}">
                </div>
                <button type="submit" class="btn btn-warning btn-user btn-block">
                  Registrasi
                </button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="/login">Sudah punya akun? Masuk disini!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="my-5" style="text-align: center;">
      <a href="/">Kembali ke homepage</a>
    </div>
  </div>
  @endsection
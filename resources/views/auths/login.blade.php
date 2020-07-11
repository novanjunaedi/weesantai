@extends('layout.login.mainlogin')

@section('title', 'Login')

@section('container')

<body class="bg-login-register">
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-12 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-7 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-5">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Panel Login</h1>
                  </div>
                  @if (session('statusLogin'))
                  <div class="alert alert-danger">
                    {{ session('statusLogin') }}
                  </div>
                  @elseif (session('statusRegist'))
                  <div class="alert alert-success">
                    {{ session('statusRegist') }}
                  </div>
                  @endif
                  <form class="user" method="POST" action="/login">
                    @csrf
                    <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan alamat email Anda...">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukkan kata sandi Anda...">
                    </div>
                    <!-- <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Ingat saya!</label>
                      </div>
                    </div> -->
                    <button type="submit" class="btn btn-warning btn-block btn-user">Masuk</button>
                    <hr>
                  </form>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Lupa kata sandi?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="/register">Buat akun baru!</a>
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
    </div>
  </div>
  @endsection
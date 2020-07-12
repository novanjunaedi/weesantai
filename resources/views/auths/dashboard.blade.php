@extends('layout.master')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  </div>
          <!-- Content Row -->
          <div class="row">
            <div class="col-md-3">
              <div class="card shadow mb-3 bg-white rounded">
                <div class="card-header bg-dark text-white">
                  User Terdaftar
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-size: 30px; text-align: right;">{{$jumlah_user}}</h5>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card shadow mb-3 bg-white rounded">
                <div class="card-header bg-dark text-white">
                  Kota
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-size: 30px; text-align: right;">8</h5>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card shadow mb-3 bg-white rounded">
                <div class="card-header bg-dark text-white">
                  Destinasi
                </div>
                <div class="card-body">
                <h5 class="card-title" style="font-size: 30px; text-align: right;">{{$jumlah_destination}}</h5>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card shadow mb-3 bg-white rounded">
                <div class="card-header bg-dark text-white">
                  Transaksi Berhasil
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-size: 30px; text-align: right;">{{$jumlah_transaction}}</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="row pt-4">
            <div class="col-lg-4">
              <h5 class="title">Destinasi Terdaftar</h5>
              <div class="card">
                <table class="table">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Kota</th>
                      <th scope="col">Jumlah Destinasi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Jakarta</td>
                      <td>{{$jakarta_count}}</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Bali</td>
                      <td>{{$bali_count}}</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Bandung</td>
                      <td>{{$bandung_count}}</td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Yogyakarta</td>
                      <td>{{$yogyakarta_count}}</td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Malang</td>
                      <td>{{$malang_count}}</td>
                    </tr>
                    <tr>
                      <th scope="row">6</th>
                      <td>Surabaya</td>
                      <td>{{$surabaya_count}}</td>
                    </tr>
                    <tr>
                      <th scope="row">7</th>
                      <td>Lombok</td>
                      <td>{{$lombok_count}}</td>
                    </tr>
                    <tr>
                      <th scope="row">8</th>
                      <td>Lampung</td>
                      <td>{{$lampung_count}}</td>
                    </tr>
                  </tbody>
                </table>

                
              </div>
            </div>

            <div class="col-lg-8">
              <h5 class="title">Transaksi Terakhir</h5>
              <div class="card">
                <table class="table table-hover">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Destination</th>
                      <th scope="col">tgl membeli</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $count = 0; ?>
                        
                    @foreach ($transaction as $tr)
                      
                    <?php if($count == 4) break; ?>
                    <tr>
                    <th scope="row">{{$count + 1}}</th>
                      <td>{{$tr->name}}</td>
                      <td>{{$tr->destination_name}}</td>
                      <td>{{$tr->buy_date}}</td>
                    </tr>
                    
                    <?php $count++; ?>
                    @endforeach
                  </tbody>
                </table>


                
              </div>
            </div>

          </div>

          <div class="row pt-4">
            
          </div>

</div>

@endsection
@extends('../layout/main')

@section('title', 'Portal Wisata Indonesia')

@section('bg-banner', 'background-image: url("/img/main/banner.jpg");')

@section('title-banner', 'Temukan Tempat Favorit Anda')

@section('content')

<div class="title-wisata text-center" style="background-color: orange; padding: 25px;">
    <h1>Tempat wisata di {{$loc}}</h1>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            @foreach($allget as $list)
            <div class="col-lg-12 ftco-animate mb-4">
                <div class="card shadow p-3 mb-3 bg-white rounded">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{asset($list->img)}}" class="card-img" alt="location">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><a href="/detail-wisata/{{$list->destination_name}}">{{$list->destination_name}}</a></h5>
                                <p class="card-text">
                                    Lokasi : {{$list->location}} <br />
                                    Harga Tiket : Rp. {{$list->price}} -, / orang.
                                </p>
                                <p class="card-text"><small class="text-muted"><a href="/detail-wisata/{{$list->destination_name}}">Lihat selengkapnya</a></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
</section>
@endsection
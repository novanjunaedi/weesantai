@extends('../layout/main')

@section('title', 'Portal Wisata Indonesia')

@section('bg-banner', 'background-image: url("/img/main/banner.jpg");')

@section('title-banner')
<div class="title-banner">
    Tempat wisata di {{$loc}}
</div>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @foreach($allget as $list)
            <div class="col-lg-12 ftco-animate mb-4">
                <div class="card shadow p-3 mb-3 bg-white rounded">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{asset($list->img)}}" class="card-img" alt="location" height="200px" width="800px">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><a href="/detail-wisata/{{$list->destination_name}}">{{$list->destination_name}}</a></h5>
                                <p class="card-text">
                                    <i class="fas fa-fw fa-star"></i> Rating : {{$list->rating}} <br />
                                    <i class="fas fa-fw fa-money-bill-alt"></i> Tiket : Rp. {{$list->price}} -, / orang. <br />
                                    <i class="fas fa-fw fa-map-marker"></i> Alamat : {{$list->address}} <br />
                                </p>
                                <p class="card-text"><small class="text-muted"><a href="/detail-wisata/{{$list->destination_name}}">Lihat selengkapnya</a></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
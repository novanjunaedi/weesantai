@extends('../layout/main')

@section('title', 'Portal Wisata Indonesia')

@section('bg-banner', 'background-image: url("/img/main/banner.jpg");')

@section('title-banner', 'Jadikan Liburan Anda Luar Biasa Bersama Kami')

@section('content')
<section class="ftco-section">
    <div class="container">
        {{-- <h1>List Wisata Di {{$bdgall->id}} </h1> --}}
        <div class="row">
            @foreach($allget as $list)
            <div class="col-md-3 ftco-animate mb-4">
                <div class="project-destination">
                    <a href="/detail-wisata/{{$list->destination_name}}" class="img" style="background-image: url(http://placehold.it/256x256);">
                        <div class="text">
                            <h3>Harga {{$list->price}}</h3>
                            <span>{{$list->destination_name}}</span>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
</section>
@endsection
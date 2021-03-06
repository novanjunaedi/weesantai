@extends('layout.master')

@section('content')
<div class="container-fluid">
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-2">
                    <div class="card">
                        @if ($user_data->img == null )
                        <img src="{{ asset('profile_default/default-pria.png') }}" height="300px" class="card-img-top p-3 img-fluid" alt="profile">
                        @else
                        <img src="{{ asset('user_img/'.$user_data->img) }}" class="card-img-top p-3 img-fluid" alt="profile" style="width: 300px; height:300px;">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{$user_data->name}}</h5>
                            <p class="card-text">
                                @if ($user_data->email ==null)
                                <i class="fas fa-fw fa-envelope kosong"></i> <span class="kosong">belum ditambahkan</span> <br />
                                @else
                                <i class="fas fa-fw fa-envelope ada"></i> {{$user_data->email}} <br />
                                @endif
                                @if ($user_data->dateofbirth ==null)
                                <i class="fas fa-fw fa-calendar kosong"></i> <span class="kosong">belum ditambahkan</span> <br />
                                @else
                                <i class="fas fa-fw fa-calendar ada"></i> {{$user_data->dateofbirth}} <br />
                                @endif
                                @if ($user_data->gender==null)
                                <i class="fas fa-fw fa-venus-mars kosong"></i> <span class="kosong">belum ditambahkan</span> <br />
                                @else
                                <i class="fas fa-fw fa-venus-mars ada"></i> {{$user_data->gender}} <br />
                                @endif

                                @if ($user_data->phone ==null)
                                <i class="fas fa-fw fa-phone kosong"></i> <span class="kosong">belum ditambahkan</span> <br />
                                @else
                                <i class="fas fa-fw fa-phone ada"></i> {{$user_data->phone}} <br />
                                @endif
                                @if ($user_data->address == null)
                                <i class="fas fa-fw fa-home kosong"></i> <span class="kosong">belum ditambahkan</span> <br />
                                @else
                                <i class="fas fa-fw fa-home ada"></i> {{$user_data->address}} <br />
                                @endif
                            </p>
                            <!-- <a href="/user/{{$user_data->id}}/edit" class="btn btn-primary">Edit Profile</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
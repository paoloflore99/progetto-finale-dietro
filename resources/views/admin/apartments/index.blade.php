@extends('layouts.app')

@section('content')
    <div class="gallery">
        <div class="row p-3 d-flex justify-content-center">

            @foreach ($apartments as $apartment)
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-8 m-2 p-2 rounded-3">
                    <a class="text-decoration-none p-2 text-center text-black" href="/admin/apartments/{{ $apartment->id }}">
                        {{--
                            CAROSELLO
                            <div id="'carouselExampleIndicators' + $apartment->id" class="carousel slide">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="card-image p-0 carousel-item active" :class="{ active: index === 0 }">
                                    <img src="{{ asset('/storage/' . $apartment->images) }}"
                                        class="card-img-top rounded-3 d-block img-fluid w-100 h-100"
                                        style="max-height: 300px; min-height: 220px; object-fit: cover;" alt="" />
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="prev">
                                <span aria-hidden="true"><i class="fa-solid fa-circle-arrow-left"></i></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="next">
                                <span aria-hidden="true"><i class="fa-solid fa-circle-arrow-right"></i></span>
                            </button>
                        </div> --}}
                        <div class="carousel-inner">
                            <div class="card-image p-0 carousel-item active" :class="{ active: index === 0 }">
                                <img src="{{ asset('/storage/' . $apartment->images) }}"
                                    class="card-img-top rounded-3 d-block img-fluid w-100 h-100"
                                    style="max-height: 300px; min-height: 220px; object-fit: cover;" alt="" />
                            </div>
                        </div>
                    </a>

                    <div class="card-body h-40">
                        <div class="row d-flex">
                            <span class="text-decoration-none"><a class="text-decoration-none text-center"
                                    href="/admin/apartments/{{ $apartment->id }}">{{ $apartment['name'] }}</a></span>
                            <span class="text-decoration-none">{{ $apartment->address }}</span>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
    <div class="container py-5 mx-auto d-flex justify-content-center">
        <a href="/" class="btn btn-warning btn-md" type="button">Torna in Home</a>
        <a href="{{ route('admin.apartments.create') }}"><button class="btn btn-primary btn-md mx-1">Nuovo
                appartamento</button></a>
    </div>
@endsection
   
@extends('layouts.public')

@section('content')
    <div class="container">
        <div class="row">
            <div class="row cols-4 d-flex justify-content-center">
                @foreach ($apartments as $apartment)
                            <div class="col p-2">
                                <div class="card rounded-0">

                                    <div class="card-image p-0 rounded-3">
                                        <img src="" class="card-img-top rounded-0" alt="">
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                                <h5 class="card-title p-2"><strong>{{ $apartment->name }}</strong></h5>
                                                <span class="text-decoration-underline">{{ $apartment->address }}</span>
                                        </div>
            
                                        <p class="card-text hidden-on-hover"></p>
                                        <p class="card-text instructions"></p>
                                    </div>
            
            
                                </div>
                            </div>
                @endforeach
            </div>
        </div>
    @endsection

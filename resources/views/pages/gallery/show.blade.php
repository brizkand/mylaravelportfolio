@extends('master')
@section('content')
    <h1 class='h1-responsive font-weight-bold indigo-text text-center my-5 wow animated flipInX slower'>Gallery Image</h1>
    <a href="/gallery" class='btn btn-default'>Go back</a>

    <div class='col-md-12'>
        <div class='row justify-content-md-center'>
            <!-- Card -->
            <div class="card card-cascade wider reverse wow animated rubberBand">

                <!-- Card image -->
                <div class="view view-cascade overlay">
                    <img class="card-img-top" src="/storage/gallery_images/{{$gallery->image}}" alt="{{$gallery->image}}">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
            
                <!-- Card content -->
                <div class="card-body card-body-cascade text-center">
                    <p class="card-text">{{$gallery->description}}</p>
                </div>
            
            </div>
            <!-- Card -->
        </div>
    </div>
@endsection
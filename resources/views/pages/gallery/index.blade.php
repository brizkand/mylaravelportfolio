@extends('master')
@section('content')
<h1 class='h1-responsive font-weight-bold indigo-text text-center my-5 wow animated flipInX slower'>Gallery</h1>

<div class='row'>
    <div class='col-md-6 wow animated slow slideInLeft'>
        @include('includes.carousel')
    </div>
    <div class='col-md-6'>
        <div class='row justify-content-md-center'>
            @foreach($gallery_images as $gallery)
                <div class='col-md-4'>
                    <!-- Card -->
                    <div class="card card-cascade wider reverse delay-1s {{$gallery->row_columns}}">
                        <div class="view overlay zoom">
                            <img class="card-img-top" src="/storage/gallery_images/{{$gallery->image}}" alt="{{$gallery->image}}">
                            <div class="mask flex-center">
                                <p class="black-text">See description</p>
                                <a href="/gallery/{{$gallery->id}}">
                                    <div class="mask rgba-blue-slight"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
    
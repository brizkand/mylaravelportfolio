@extends('master')
@section('content')
    <h1 class='h1-responsive font-weight-bold indigo-text text-center my-5 wow animated flipInX slower'>{{$portfolio->title}}</h1>

    <div class='row p-4 m-4 justify-content-md-center'>
        <div class='col-md-8 wow animated jackInTheBox slower'>
            <a href="{{url()->previous()}}" class='btn btn-primary mb-2'>Go Back</a>
            <!-- Card -->
            <div class="card card-cascade wider reverse">

                <!-- Card image -->
                <div class="view view-cascade overlay">
                    <img class="card-img-top" src="/storage/portfolio_images/{{$portfolio->image}}" alt="Card image cap">
                    <div class="mask flex-center">
                        <p class="white-text lead">Visit this website in new page.</p>
                        <a href="{{$portfolio->website}}" target='_blank'>
                            <div class="mask rgba-white-slight text-center"></div>
                        </a>
                    </div>
                </div>

                <!-- Card content -->
                <div class="card-body card-body-cascade text-center">
                    <!-- Title -->
                    <h4 class="card-title"><strong>{{$portfolio->title}}</strong></h4>
                    <!-- Subtitle -->
                    <h6 class="font-weight-bold indigo-text py-2">{{$portfolio->portfolio_category->category}}</h6>
                    <!-- Text -->
                    <p class="card-text">{{$portfolio->description}}</p>
                </div>
            </div>
            <!-- Card -->
        </div>
    </div>

    <div class='row justify-content-md-center'>
        @foreach($portfolio->portfolio_images as $portfolio_image)
            <div class='col-md-4 p-4'>
                <!-- Card -->
                <div class="card card-cascade wider reverse animated wow zoomIn">
                    <div class="view overlay zoom">
                        <img class="card-img-top" src="/storage/portfolio_images/{{$portfolio_image->image}}" alt="{{$portfolio_image->image}}">
                        <div class="mask flex-center">
                                <div class="mask rgba-blue-slight"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Card -->
            </div>
        @endforeach
    </div>
@endsection
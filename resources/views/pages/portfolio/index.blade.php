@extends('master')
@section('content')
    <h1 class='h1-responsive font-weight-bold indigo-text text-center my-5 wow animated flipInX slower'>Portfolio</h1>
    
    <div class='row justify-content-md-center mb-4'>
        <div class='col-md-2 wow animated slideInDown slow'>
            <a href="/portfolio" class='h5-responsive text-capitalize border-bottom border-primary font-weight-bold text-indigo'>All</a>
        </div>
        @foreach($categories as $category)
            <div class='col-md-2 wow animated slideInDown slow'>
                <a href="/portfolio_category/{{$category->id}}" class='h5-responsive text-capitalize'>{{$category->category}}</a>
            </div>
        @endforeach
    </div>
    

    <!-- Section description -->
    <p class="grey-text w-responsive mx-auto mb-5 text-center">These are some of my finished projects.</p>

    <!-- Grid row -->
    <div class="row d-flex justify-content-center">
        @foreach ($portfolios as $portfolio)
            <!-- Grid column -->
            <div class="col-md-6 col-xl-5 mb-4 animated wow zoomIn slower">
                <!--Featured image-->
                <div class="view overlay rounded z-depth-2">
                    <img src="/storage/portfolio_images/{{$portfolio->image}}" class="img-fluid" alt="{{$portfolio->title}}">
                    <a href='/portfolio/{{$portfolio->id}}'>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <!--Excerpt-->
                <div class="card-body">
                    <a href="" class="green-text">
                        <h5 class="font-weight-bold mt-2 mb-3"><i class="fas fa-chart-line pr-2"></i>{{$portfolio->category}}</h5>
                    </a>
                    <h4 class="font-weight-bold mb-3">{{$portfolio->title}}</h4>
                    <p>{{$portfolio->description}}</p>
                    <a href="/portfolio/{{$portfolio->id}}" class="btn btn-success btn-rounded btn-md"> View more</a>
                </div>
            </div>
            <!-- Grid column -->
        @endforeach
    </div>
    <!-- Grid row -->
@endsection
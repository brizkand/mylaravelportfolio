@extends('master')
@section('content')
<h1 class='h1-responsive font-weight-bold indigo-text text-center my-5 wow animated flipInX slower'>About</h1>

<div class='row'>
    <div class='col-md-4 wow animated slow slideInLeft'>
        <section class='team-section text-center my-5'>
            <h2 class='h2-responsive green-text font-weight-bold mt-4 mb-3'>{{$about->title}}</h2>
            <div class="avatar mx-auto">
                <div class='view overlay zoom'>
                    <img src="/storage/about_images/{{$about->image}}" class="img-fluid mx-auto d-block" alt="{{$about->image}}">
                </div>
            </div>
            <h5 class="font-weight-bold mt-4 mb-3">{{strToUpper($homepage->firstname)}} {{strToUpper($homepage->lastname)}}</h5>
            <p class="text-uppercase blue-text"><strong>{{strToUpper($homepage->description)}}</strong></p>
            <p class="grey-text p-4 mx-4">{{$about->description}}</p>
            <ul class="list-unstyled mb-0">
                <!-- Facebook -->
                <a class="p-2 fa-lg fb-ic">
                    <i class="fa fa-facebook-f blue-text"> </i>
                </a>
                <!-- Twitter -->
                <a class="p-2 fa-lg tw-ic">
                    <i class="fa fa-twitter blue-text"> </i>
                </a>
                <!-- Instagram -->
                <a class="p-2 fa-lg ins-ic">
                    <i class="fa fa-instagram blue-text"> </i>
                </a>
            </ul>
        </section>
    </div>
    
    <div class='col-md-8 wow animated slow slideInRight'>
        <section class="team-section text-center">
            <h2 class="h2-responsive font-weight-bold my-5 green-text">Skills</h2>      
            <div class="row text-center justify-content-md-center">
                @foreach ($skills as $skill)      
                    <div class="col-md-3 card p-4 mb-4 wow animated flipInX slower">
                        <div class="avatar mx-auto">
                            <img src="/storage/skills_icon_images/{{$skill->image}}" class="rounded z-depth-1-half" alt="{{$skill->image}}">
                        </div>
                        <h4 class="font-weight-bold dark-grey-text">{{$skill->title}}</h4>
                        <div class="progress md-progress" style="height: 20px">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: {{$skill->percentage}}%; height: 20px" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">{{$skill->percentage}}%</div>
                        </div>
                    </div>
                @endforeach 
            </div>
        </section>
    </div>
</div>

@endsection
    
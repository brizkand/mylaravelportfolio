@extends('master')
@section('content')
<h1 class='h1-responsive font-weight-bold indigo-text text-center my-5 wow animated flipInX slower'>My Resume</h1>
    
<div class="row justify-content-md-center mb-4">
    <!-- <iframe src="/storage/My_Creative_Resume.pdf" frameborder="0"></iframe> -->

    <iframe
        src="/storage/My_Creative_Resume.pdf"
        frameBorder="0"
        scrolling="auto"
        height="1280px"
        width="100%"
        allowfullscreen="true"
    ></iframe>

</div>

@endsection
    
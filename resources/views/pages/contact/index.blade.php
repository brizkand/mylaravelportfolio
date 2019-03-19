@extends('master')
@section('content')
    <h1 class='h1-responsive font-weight-bold indigo-text text-center my-5 wow animated flipInX slower'>Contact</h1>

    <!-- Section: Contact v.3 -->
    <section class="contact-section my-5 p-4">
        <!-- Form with header -->
        <div class="card">
            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-lg-8 wow animated bounceInLeft slower">
                    <div class="card-body form">
                        <form action="/send" method='post'>

                            @if(count($errors) > 0)
                                @foreach($errors->all() as $error)
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>{{$error}}</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endforeach
                            @endif

                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show text-success" role="alert">
                                    <strong>{{session('status')}}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            {{csrf_field()}}
                            <!-- Header -->
                            <h3 class="mt-4"><i class="fa fa-envelope pr-2"></i>Reach me:</h3>
                            <!-- Grid row -->
                            <div class="row">
                                <!-- Grid column -->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input name='name' type="text" id="form-contact-name" class="form-control" value="{{old('name')}}" required>
                                        <label for="form-contact-name" class="">Your name</label>
                                    </div>
                                </div>
                                <!-- Grid column -->  
                                <!-- Grid column -->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input name='email' type="text" id="form-contact-email" class="form-control" value="{{old('email')}}" required>
                                        <label for="form-contact-email" class="">Your email</label>
                                    </div>
                                </div>
                                <!-- Grid column -->
                            </div>
                            <!-- Grid row -->
    
                            <!-- Grid row -->
                            <div class="row">
                                <!-- Grid column -->
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <textarea id="form-contact-message" name='message' class="form-control md-textarea" rows="3" required>{{old('message')}}</textarea>
                                        <label for="form-contact-message">Your message</label>
                                        <button class="btn-floating btn-lg blue" type='submit'>
                                            <i class="fa fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- Grid column -->
                            </div>
                        <!-- Grid row -->
                    </form>
                </div>
            </div>
            <!-- Grid column --> 
            <!-- Grid column -->
            <div class="col-lg-4 wow animated bounceInDown delay-2s"> 
                <div class="card-body contact text-center h-100 white-text">
                <h3 class="my-4 pb-2">Contact information</h3>
                <ul class="text-lg-left list-unstyled ml-4">
                    <li>
                        <p><i class="fa fa-map pr-2"></i>Philippines</p>
                    </li>
                    <li>
                        <p><i class="fa fa-phone pr-2"></i>0935.695.0022</p>
                    </li>
                    <li>
                        <p><i class="fa fa-envelope pr-2"></i>holgadokevin@gmail.com</p>
                    </li>
                </ul>
                <hr class="hr-light my-4">
                <ul class="list-inline text-center list-unstyled">
                    <li class="list-inline-item">
                        <a class="p-2 fa-lg tw-ic">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="p-2 fa-lg li-ic">
                            <i class="fa fa-linkedin"> </i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="p-2 fa-lg ins-ic">
                            <i class="fa fa-instagram"> </i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Grid column -->
        <!-- Form with header -->
    </section>
    <!-- Section: Contact v.3 -->

@endsection
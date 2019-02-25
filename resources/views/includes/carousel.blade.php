<!--Carousel Wrapper-->
<div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        @foreach ($carousels as $carousel)
            <div class="carousel-item @if($carousel->id === 1) active @endif">
                <img class="d-block w-100" src="/storage/{{$carousel->image}}" alt="First slide">
            </div>
        @endforeach
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
    <ol class="carousel-indicators">
        @foreach ($carousels as $carousel)
            <li data-target="#carousel-thumb" data-slide-to="{{$carousel->id - 1}}" @if($carousel->id === 1) class="active" @endif> <img class="d-block w-100" src="/storage/{{$carousel->image}}"
                class="img-fluid">
            </li>
        @endforeach
    </ol>
</div>
<!--/.Carousel Wrapper-->
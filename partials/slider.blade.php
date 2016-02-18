<div class="row">
    <div class="span12">
        <div id="slideShow" class="carousel slide">
            <!-- Carousel items -->
            <div class="carousel-inner">
                @foreach(slideshow() as $key=>$val)
                <div class="{{$key == 0 ? 'active' : ''}} item">
                    @if(!empty($val->url))
                    <a href="{{filter_link_url($val->url)}}" target="_blank">
                    @else
                    <a href="#">
                    @endif
                        <img src="{{slide_image_url($val->gambar)}}" alt="{{$val->title}}">
                    </a>
                </div>
                @endforeach 
            </div><!--end carousel-inner-->
            @if(count(slideshow()) > 0)
            <!-- Carousel nav -->
            <a class="carousel-control left" href="#slideShow" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#slideShow" data-slide="next">&rsaquo;</a>
            @endif
        </div><!--end carousel-->
    </div><!--end span8-->
</div><!--end row-->
@if(Session::has('msg'))
<div class="success" id='message' style='display:none'>
<p>Terima kasih, testimonial anda sudah terkirim.</p>
</div>
@endif
@if($errors->all())
<div class="error" id='message' style='display:none'>
Terjadi kesalahan dalam menyimpan data.<br>
<ul>
@foreach($errors->all() as $message)
<li>{{ $message }}</li>
@endforeach
</ul>
</div>
@endif

<div class="container">

  <div class="row">
    
    <div class="span9">
      <h4>Testimonial Kita !</h4>
      <br>
      @foreach ($testimonial as $items)  
      <article class="blog-article" style="padding-bottom: 0px; margin-bottom: 0px">
        <div class="blog-content">
          <div class="clearfix">
            <ul class="unstyled blog-content-date">
              <li class="pull-left"><i class="icon-pencil"></i> <a href="#">{{$items->nama}}</a></li>
              <li class="pull-left"><i class="icon-calendar"></i> 18 Jan, 2013</li>
            </ul>
          </div>
          <div class="blog-content-entry">

            <blockquote>
              <p>{{$items->isi}}</p>
            </blockquote>

          </div>
        </div><!--end blog-content-->
      </article><!--end article-->
      @endforeach

      <div class="about-author well clearfix">
        <ul id="pagination">
          {{$testimonial->links()}}
        </ul>
      </div><!--end about-author-->

      <div class="make-comment">
        <div class="titleHeader clearfix">
          <h3>Tulis Testimonial</h3>
        </div><!--end titleHeader-->

        <form method="post" action="{{URL::to('testimoni')}}">
          <div class="controls controls">
          <input type="text" name="nama" required placeholder="Your Name...*" class="span3">
          </div>
          <div class="controls">
          <textarea name="testimonial" class="span9" placeholder="Your Testimonial...*"></textarea>
          </div>
          <button type="submit" class="btn btn-primary pull-right">Kirim Testimonial</button>
        </form><!--end form-->
      </div><!--end make-comment-->

    </div><!--end span9-->


   <aside class="span3">

        <div class="blog-search">
            @foreach(getBanner(1) as $item)
            <div><a href="{{URL::to($item->url)}}"><img src="{{URL::to(getPrefixDomain().'/galeri/'.$item->gambar)}}" /></a></div>
            @endforeach
        </div><!--end blog-adds-->

    </aside><!--end span3-->

  </div><!--end row-->

</div><!--end conatiner-->
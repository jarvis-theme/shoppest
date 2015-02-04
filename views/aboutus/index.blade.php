	<div class="content-wrap">
	<div style="clear:both; display:block; height:20px"></div>
	<div class="container-2">
		<section class="content">                    	
                        <div class="entry">
                            
                    		<h2><a href="single.html">{{$detailblog->judul}}</a></h2>
                            <ul>
                                <li class="category">Date: <a href="#">{{waktuTgl($detailblog->updated_at)}}</a></li>
                                <li class="comment">Category: <a href="{{URL::to('blog/category/'.Str::slug($detailblog->kategori->nama))}}">{{$detailblog->kategori->nama}}</a></li>
                            </ul>
                            <p>{{$detailblog->isi}}</p>
                        </div><!--entry-->
                        <hr>
	                    <div>
	                        {{$fbscript}}
	                        {{$fbcomment}}
	                    </div>
                       	<div class="navigate comments clearfix">
                        @if(isset($prev))
                            <div class="pull-left"><a href="{{$prev->slug}}">&larr; Sebelumnya</a></div>
                        @else
                            <div class="pull-right"></div>
                        @endif

                        @if(isset($next))
                            <div class="pull-right"><a style="float: right;" href="{{$next->slug}}">Selanjutnya &rarr;</a></div>
                        @else
                            <div class="pull-right"></div>
                        @endif
                    </div>
                    <hr />
                    </section>
	    <aside class="sidebar">
	    	<div class="side">
	        	<h4>Category</h4>
	            <ul class="cat">
	                @foreach($categoryList as $key=>$value)
                        <li><a href="{{URL::to('blog/category/'.generateSlug($value))}}">{{$value->nama}}</a></li>
                    @endforeach
	            </ul>
	        </div><!--end:side-->
	        <div class="side">
				<h4>Banner</h4>
				@foreach(getBanner(1) as $item)
				<div><a href="{{URL::to($item->url)}}"><img src="{{URL::to(getPrefixDomain().'/galeri/'.$item->gambar)}}" /></a></div>
				@endforeach
			</div><!--end:side-->
	    	
	    </aside>
	</div><!--end:container-2-->

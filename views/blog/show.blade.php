<div class="container">
	<div class="row">	
		<div class="span9">
			<article class="blog-article">
				<div class="blog-content">
					<div class="blog-content-title">
						<h1>{{$detailblog->judul}}</h1>
					</div>
					<div class="clearfix">
						<ul class="unstyled blog-content-date">
							<li class="pull-left"><i class="icon-calendar"></i> {{waktuTgl($detailblog->updated_at)}}</li>
							<!-- <li class="pull-left"><i class="icon-pencil"></i> <a href="#">Admin</a></li> -->
						</ul>
					</div>
					<div class="blog-content-entry">
						{{$detailblog->isi}}
					</div>
				</div><!--end blog-content-->
			</article><!--end article-->

			<div class="about-author well clearfix">
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
			</div><!--end about-author-->

			<div class="make-comment">
				{{$fbscript}}
				{{--$fbcomment--}}
				{{fbcommentbox(blog_url($detailblog), 650, 5, 'light')}}
			</div><!--end make-comment-->
		</div><!--end span9-->

		<aside class="span3">
			<div class="blog-search">
				<ul class="nav nav-tabs">
					<li  class="active">
						<a data-tip="tooltip" data-title="Recent" data-placment="top" href="#recent-post" data-toggle="tab"><i class="icon-time"></i></a>
					</li>
					<h2 class="invarseColor" style="line-height: 35px;">Recent Blog</h2>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="recent-post">
						<ul class="vProductItemsTiny">
							@foreach(recentBlog() as $recent)
							<li class="span4 clearfix">
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="{{slugBlog($recent)}}" class="invarseColor">
											{{$recent->judul}}
										</a>
										<br>
										<small>{{waktuTgl($recent->updated_at)}}</small>
									</div>
								</div>
							</li>
							@endforeach
						</ul>
					</div>
					
				</div><!--end tab-content-->
			</div><!--end blog-tab-->

			<div class="blog-category categories">
				<div class="titleHeader clearfix">
					<h3>Categories</h3>
				</div><!--end titleHeader-->
				<ul class="unstyled">
					@foreach($categoryList as $key=>$value)
						<li><a class="invarseColor" href="{{URL::to('blog/category/'.generateSlug($value))}}"><i class="icon-caret-right"></i>{{$value->nama}}</a></li>
					@endforeach
				</ul>
			</div><!--end blog-category-->

			<div class="blog-adds">
				@foreach(vertical_banner() as $item)
				<div>
					<a href="{{URL::to($item->url)}}">
						{{HTML::image(banner_image_url($item->gambar))}}
					</a>
				</div>
				@endforeach
			</div><!--end blog-adds-->
		</aside><!--end span3-->
	</div><!--end row-->
</div><!--end conatiner-->
		<div class="row">
			<h2>Blog</h2><br>
			<div class="span9 blogs">
				@foreach(list_blog(null,@$blog_category) as $key=>$value)
				<article class="blog-article testimo">
					<div class="blog-content">
						<div class="blog-content-title">
							<h2><a href="{{blog_url($value)}}" class="invarseColor">{{$value->judul}}</a></h2>
						</div>
						<div class="clearfix">
							<ul class="unstyled blog-content-date">
								<li class="pull-left"><i class="icon-calendar"></i> {{waktuTgl($value->created_at)}}</li>
								<!-- <li class="pull-left"><i class="icon-pencil"></i> <a href="#">Admin</a></li> -->
							</ul>
						</div>
						<div class="blog-content-entry">
							<p>{{short_description($value->isi,300)}}</p>
							<a href="{{blog_url($value)}}">Selengkapnya &rarr;</a>
						</div>
					</div><!--end blog-content-->
				</article><!--end article-->
				@endforeach

				{{list_blog(null,@$blog_category)->links()}}
			</div><!--end span9-->

			<aside class="span3">
				@if(count(recentBlog()) > 0)
				<div class="blog-search">
					<ul class="nav nav-tabs">
						<li  class="active iconblog">
							<a data-tip="tooltip" data-title="Recent" data-placment="top" href="#recent-post" data-toggle="tab"><i class="icon-time"></i></a>
						</li>
						<h2 class="invarseColor title">Recent Blog</h2>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="recent-post">
							<ul class="vProductItemsTiny">
								@foreach(recentBlog() as $recent)
								<li class="span4 clearfix">
									<div class="thumbSetting recentblog">
										<div class="thumbTitle">
											<a href="{{blog_url($recent)}}" class="invarseColor">
												{{$recent->judul}}
											</a>
											<br>
											<small>{{waktuTgl($recent->created_at)}}</small>
										</div>
									</div>
								</li>
								@endforeach
							</ul>
						</div>
					</div><!--end tab-content-->
				</div><!--end blog-tab-->
				@endif
				@if(count(list_blog_category()) > 0)
				<div class="blog-category categories">
					<div class="titleHeader clearfix">
						<h3>Categories</h3>
					</div><!--end titleHeader-->
					<ul class="unstyled">
						@foreach(list_blog_category() as $key=>$value)
						<li><a class="invarseColor" href="{{blog_category_url($value)}}"><i class="icon-caret-right"></i>{{$value->nama}}</a></li>
						@endforeach
					</ul>
				</div><!--end blog-category-->
				@endif
				@if(count(vertical_banner()) > 0)
				<div class="blog-adds">
					@foreach(vertical_banner() as $item)
					<div class="banners">
						<a href="{{URL::to($item->url)}}">
							{{HTML::image(banner_image_url($item->gambar),'Info Promo')}}
						</a>
					</div>
					@endforeach
				</div><!--end blog-adds-->
				@endif
			</aside><!--end span3-->
		</div><!--end row-->
<div class="container">
	<div class="row">
		<div class="span9">
			<h4>Testimonial Kita !</h4>
			<br>
			@foreach (list_testimonial() as $items)
			<article class="blog-article testimo">
				<div class="blog-content">
					<div class="clearfix">
						<ul class="unstyled blog-content-date">
							<li class="pull-left"><i class="icon-pencil"></i> <a href="#">{{$items->nama}}</a></li>
							<li class="pull-left"><i class="icon-calendar"></i> {{waktuTgl($items->created_at)}}</li>
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
					{{ list_testimonial()->links() }}
				</ul>
			</div><!--end about-author-->

			<div class="make-comment">
				<div class="titleHeader clearfix">
					<h3>Tulis Testimonial</h3>
				</div><!--end titleHeader-->
				<form method="post" action="{{URL::to('testimoni')}}">
					<div class="controls controls">
						<input type="text" name="nama" placeholder="Nama Kamu...*" class="span3" required>
					</div>
					<div class="controls">
						<textarea name="testimonial" class="span9" placeholder="Testimonial...*" required></textarea>
					</div>
					<button type="submit" class="btn btn-primary pull-right">Kirim Testimonial</button>
				</form><!--end form-->
			</div><!--end make-comment-->
		</div><!--end span9-->

		<aside class="span3">
			<div class="special powerup">
				{{pluginSidePowerup()}}
			</div>
			<div class="blog-search">
				@foreach(vertical_banner() as $item)
				<div class="banners">
					<a href="{{URL::to($item->url)}}">
						<img src="{{banner_image_url($item->gambar)}}" alt="Info Promo" />
					</a>
				</div>
				@endforeach
			</div><!--end blog-adds-->
		</aside><!--end span3-->
	</div><!--end row-->
</div><!--end conatiner-->
<div class="container">
	<div class="row">
		<div class="span9">
			<article class="blog-article">
				<!-- <div class="blog-img">
					<img src="img/694x246.jpg" alt="Blog image">
				</div> --><!--end blog-img-->

				<div class="blog-content">
					<div class="blog-content-title">
						<h1>Kebijakan Layanan</h1>
					</div>
					<div class="blog-content-entry">
						{{$service->refund}}
					</div>
				</div><!--end blog-content-->
			</article><!--end article-->

			<article class="blog-article">
				<!-- <div class="blog-img">
					<img src="img/694x246.jpg" alt="Blog image">
				</div> --><!--end blog-img-->

				<div class="blog-content">
					<div class="blog-content-title">
						<h1>Kebijakan Pengembalian</h1>
					</div>
					<div class="blog-content-entry">
						{{$service->privacy}}
					</div>
				</div><!--end blog-content-->
			</article><!--end article-->

			<article class="blog-article">
				<!-- <div class="blog-img">
					<img src="img/694x246.jpg" alt="Blog image">
				</div> --><!--end blog-img-->

				<div class="blog-content">
					<div class="blog-content-title">
						<h1>Kebijakan Privasi</h1>
					</div>
					<div class="blog-content-entry">
						{{$service->tos}}
					</div>
				</div><!--end blog-content-->
			</article><!--end article-->
		</div><!--end span9-->

		<aside class="span3">
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
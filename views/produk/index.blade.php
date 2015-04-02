		<div class="container">
			<div class="row">
				<aside class="span3">
					<div class="categories">
						<div class="titleHeader clearfix">
							<h3>Categories</h3>
						</div><!--end titleHeader-->
						<ul class="unstyled" style="text-decoration: none;">
							{{generateKategori($kategori,'<li >;</li>','',';',true)}}
						</ul>
					</div><!--end categories-->

					<!-- <div class="special">
						<div class="titleHeader clearfix">
							<h3>Special</h3>
						</div>

						<ul class="vProductItemsTiny">
							@foreach($koleksi as $kolek)
							<li class="span4 clearfix">
								<div class="thumbImage">
									<a href=""><img src="{{URL::to(getPrefixDomain().'/galeri/'.$kolek->gambar)}}" alt=""></a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="{{generateSlug($kolek)}}" class="invarseColor">
											{{$kolek->nama}}
										</a>
									</div>
									
								</div>
							</li>
							@endforeach

						</ul>
					</div> -->

					<div class="special">
						<div class="titleHeader clearfix">
							<h3>Banner</h3>
						</div><!--end titleHeader-->
						@foreach(vertical_banner() as $item)
							<div>
								<a href="{{URL::to($item->url)}}">
									{{HTML::image(banner_image_url($item->gambar))}}
								</a>
							</div>
						@endforeach
					</div>
				</aside><!--end aside-->

				<div class="span9">
					<div id="productSlider" class="carousel slide">
						<!-- Carousel items -->
						<div class="carousel-inner">
						@foreach(horizontal_banner() as $key => $item)
							@if($key==0)
								<div class="active item">
									<a href="{{URL::to($item->url)}}">
										{{HTML::image(banner_image_url($item->gambar))}}
									</a>
								</div>
							@else
								<div class="item">
									<a href="{{URL::to($item->url)}}">
										{{HTML::image(banner_image_url($item->gambar))}}
									</a>
								</div>
							@endif
						@endforeach
						</div>
					</div><!--end productSlider-->

					<div class="productFilter clearfix">
						<div class="showItem inline pull-left">
							Show
							<select id="show" data-rel="{{URL::current()}}">
								<option value="15" {{Input::get('show')==15?'selected="selected"':''}}>15</option>
								<option value="25" {{Input::get('show')==25?'selected="selected"':''}}>25</option>
								<option value="50" {{Input::get('show')==50?'selected="selected"':''}}>50</option>
							</select>
						</div><!--end sortBy-->
					   
						<div class="displaytBy inline pull-right">
							Display
							<div class="btn-group">
								<a {{Input::get('view')=='grid'?'class="btn active"':'class="btn"'}} href="{{buatLink(URL::current(),array('view'=>'grid'))}}" class="grid" title="List View"><i class="icon-th"></i></a>
								<a {{Input::get('view')=='list'?'class="btn active"':'class="btn"'}} href="{{buatLink(URL::current(),array('view'=>'list'))}}" class="list" title="Grid View"><i class="icon-list"></i></a>
							</div>
						</div><!--end displaytBy-->
					</div><!--end productFilter-->

					<div class="row">
						<ul class="hProductItems clearfix">
						@if($view=='' || $view=='grid')
							@foreach($produk as $myproduk)
							<li class="span3 clearfix">
								<div class="thumbnail" style="min-height:210px">
									<a href="{{slugProduk($myproduk)}}">
										{{HTML::image(product_image_url($myproduk->gambar1), $myproduk->nama, array('class'=>'img1'))}}
									</a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle" style="height:54px">
										<h3>
											<a href="{{slugProduk($myproduk)}}" class="invarseColor">{{shortDescription($myproduk->nama,43)}}</a>
											@if(is_terlaris($myproduk))
											<span class="label label-success">Terlaris</span>
											@endif
											@if(is_produkbaru($myproduk))
											<span class="label label-success">Baru</span>
											@endif
											@if(is_outstok($myproduk))
											<span class="label label-success">Kosong</span>
											@endif
										</h3>
									</div>
									<div class="product-desc">
										<p>
										   {{shortDescription($myproduk->deskripsi,100)}}
										</p>
									</div>
									<div class="thumbPrice" style="height:43px">
										@if($myproduk->hargaCoret != 0)
										<span>
											<span class="strike-through">{{jadiRupiah($myproduk->hargaCoret)}}</span>
											<br>
											{{jadiRupiah($myproduk->hargaJual)}}
										</span>
										@else
										<span style="line-height:45px">{{jadiRupiah($myproduk->hargaJual)}}</span>			
										@endif
									</div>

									<div class="thumbButtons">
										<button onclick="window.location.href='{{slugProduk($myproduk)}}'" class="btn btn-primary btn-small btn-block">
											Lihat Produk
										</button>
									</div>
								</div>
							</li>
							@endforeach
						@else
							@foreach($produk as $myproduk)
							<li class="clearfix">
								<div class="span3">
									<div class="thumbnail" style="min-height:210px">
										<a href="{{slugProduk($myproduk)}}">
											{{HTML::image(product_image_url($myproduk->gambar1), $myproduk->nama, array('class'=>'img1'))}}
										</a>
									</div>
								</div>
								<div class="span6">
									<div class="thumbSetting">
										<div class="thumbTitle">
											<h3>
												<a href="{{slugProduk($myproduk)}}" class="invarseColor">{{$myproduk->nama}}</a>
												@if(is_terlaris($myproduk))
												<span class="label label-success">Terlaris</span>
												@endif
												@if(is_produkbaru($myproduk))
												<span class="label label-success">Baru</span>
												@endif
												@if(is_outstok($myproduk))
												<span class="label label-success">Kosong</span>
												@endif
											</h3>
										</div>
										<div class="thumbPrice-list clearfix">
											<span>
												@if($myproduk->hargaCoret != 0)
												<span class="strike-through">{{jadiRupiah($myproduk->hargaCoret)}}</span>
												@endif
												&nbsp;{{jadiRupiah($myproduk->hargaJual)}}
											</span>
										</div>
										<div class="thumbDesc">
											<p>
												{{shortDescription($myproduk->deskripsi,100)}}
											</p>
										</div>

										<div class="thumbButtons">
											<button onclick="window.location.href='{{slugProduk($myproduk)}}'" class="btn btn-primary btn-small">
												<i class="icon-shopping-cart"></i>
												Lihat Produk
											</button>
										</div><!--end thumbButtons-->
									</div>
								</div>
							</li>
							@endforeach
						@endif
					<div class="pagination pagination-right">
						<ul>
							{{$produk->links()}}
						</ul>
					</div><!--end pagination-->
				</div><!--end span9-->
			</div><!--end row-->
		</div><!--end conatiner-->
		<div class="container">
			<div class="row">
				<aside class="span3">
					@if(count(list_category()) > 0)
					<div class="categories">
						<div class="titleHeader clearfix">
							<h3>Categories</h3>
						</div><!--end titleHeader-->
						<ul class="unstyled">
							{{generateKategori(list_category(),'<li >;</li>','<i class="icon-caret-right"></i>&nbsp;',';',true)}}
						</ul>
					</div><!--end categories-->
					@endif
					<div class="special powerup">
						{{pluginSidePowerup()}}
					</div>
					<!-- <div class="special">
						<div class="titleHeader clearfix">
							<h3>Special</h3>
						</div>

						<ul class="vProductItemsTiny">
							@foreach(list_koleksi() as $kolek)
							<li class="span4 clearfix">
								<div class="thumbImage">
									<a href="{{koleksi_url($kolek)}}"><img src="{{koleksi_image_url($kolek->gambar)}}" alt="{{$kolek->nama}}"></a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="{{koleksi_url($kolek)}}" class="invarseColor">
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
							<!-- <h3>Banner</h3> -->
						</div><!--end titleHeader-->
						@foreach(vertical_banner() as $item)
						<div class="banners">
							<a href="{{URL::to($item->url)}}">
								{{HTML::image(banner_image_url($item->gambar),'Info Promo')}}
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
										{{HTML::image(banner_image_url($item->gambar),'Info Promo')}}
									</a>
								</div>
							@else
								<div class="item">
									<a href="{{URL::to($item->url)}}">
										{{HTML::image(banner_image_url($item->gambar),'Info Promo')}}
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
								<a {{Input::get('view')=='grid' || Input::get('view')==''?'class="btn active"':'class="btn"'}} href="{{buatLink(URL::current(),array('view'=>'grid'))}}" class="grid" title="List View"><i class="icon-th"></i></a>
								<a {{Input::get('view')=='list'?'class="btn active"':'class="btn"'}} href="{{buatLink(URL::current(),array('view'=>'list'))}}" class="list" title="Grid View"><i class="icon-list"></i></a>
							</div>
						</div><!--end displaytBy-->
					</div><!--end productFilter-->

					<div class="row">
						<ul class="hProductItems clearfix">
							{{-- */ $i=1 /* --}}
							@if($view=='' || $view=='grid')
								@foreach(list_product(Input::get('show'),@$category,@$collection) as $myproduk)
								<li class="span3 clearfix">
									<div class="thumbnail imagepro">
										<a href="{{product_url($myproduk)}}">
											{{HTML::image(product_image_url($myproduk->gambar1), $myproduk->nama, array('class'=>'img1'))}}
										</a>
									</div>
									<div class="thumbSetting">
										<div class="thumbTitle">
											<h3>
												<a href="{{product_url($myproduk)}}" class="invarseColor">{{shortDescription($myproduk->nama,17)}}</a>
												@if(is_terlaris($myproduk))
												<span class="label label-important">Hot</span>
												@endif
												@if(is_produkbaru($myproduk))
												<span class="label label-success">Baru</span>
												@endif
												@if(is_outstok($myproduk))
												<span class="label label-default">Kosong</span>
												@endif
											</h3>
										</div>
										<div class="product-desc">
											<p>
												{{short_description($myproduk->deskripsi,90)}}
											</p>
										</div>
										<div class="thumbPrice prices">
											@if($myproduk->hargaCoret != 0)
											<span>
												<span class="strike-through">{{price($myproduk->hargaCoret)}}</span>
												<br>
												{{price($myproduk->hargaJual)}}
											</span>
											@else
											<span class="pricepro">{{price($myproduk->hargaJual)}}</span>			
											@endif
										</div>

										<div class="thumbButtons">
											<button onclick="window.location.href='{{product_url($myproduk)}}'" class="btn btn-primary btn-small btn-block">
												Lihat Produk
											</button>
										</div>
									</div>
								</li>
									@if($i % 2 == 0)
									<div class="clearfix visible-phone"></div>
									@endif
									@if($i % 3 == 0)
									<div class="clearfix hidden-phone"></div>
									@endif
									{{-- */ $i++ /* --}}
								@endforeach
							@else
								@foreach(list_product(Input::get('show'),@$category,@$collection) as $myproduk)
								<li class="clearfix">
									<div class="span3">
										<div class="thumbnail imagepro">
											<a href="{{product_url($myproduk)}}">
												{{HTML::image(product_image_url($myproduk->gambar1), $myproduk->nama, array('class'=>'img1'))}}
											</a>
										</div>
									</div>
									<div class="span6">
										<div class="thumbSetting">
											<div class="thumbTitle">
												<h3>
													<a href="{{product_url($myproduk)}}" class="invarseColor">{{$myproduk->nama}}</a>
													@if(is_terlaris($myproduk))
													<span class="label label-important">Hot</span>
													@endif
													@if(is_produkbaru($myproduk))
													<span class="label label-success">Baru</span>
													@endif
													@if(is_outstok($myproduk))
													<span class="label label-default">Kosong</span>
													@endif
												</h3>
											</div>
											<div class="thumbPrice-list clearfix">
												<span>
													@if($myproduk->hargaCoret != 0)
													<span class="strike-through">{{price($myproduk->hargaCoret)}}</span>
													@endif
													&nbsp;{{price($myproduk->hargaJual)}}
												</span>
											</div>
											<div class="thumbDesc">
												<p>
													{{short_description($myproduk->deskripsi,100)}}
												</p>
											</div>

											<div class="thumbButtons">
												<button onclick="window.location.href='{{product_url($myproduk)}}'" class="btn btn-primary btn-small">
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
									{{list_product(Input::get('show'), @$category, @$collection)->appends(array('show' => Input::get('show'), 'view' => $view))->links()}}
								</ul>
							</div><!--end pagination-->
						</ul>
					</div>
				</div><!--end span9-->
			</div><!--end row-->
		</div><!--end conatiner-->
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="row">
						<div class="product-details clearfix">
							<div class="span6">
								<div class="product-title">
									<h1>{{$produk->nama}}</h1>
								</div>
								<div class="product-img-floated">
									<a class="fancybox" href="{{product_image_url($produk->gambar1,'large')}}" title="{{$produk->nama}}">
										<img src="{{product_image_url($produk->gambar1,'medium')}}" alt="{{$produk->nama}}">
									</a>
								</div><!--end product-img-->
								<div class="product-img-thumb-floated">
									@if($produk->gambar2!='')
									<a class="fancybox" href="{{product_image_url($produk->gambar2,'large')}}" title="{{$produk->nama}}">
										<img src="{{product_image_url($produk->gambar2,'thumb')}}" alt="thumbnail 1">
									</a>
									@endif
									@if($produk->gambar3!='')
									<a class="fancybox" href="{{product_image_url($produk->gambar3,'large')}}" title="{{$produk->nama}}">
										<img src="{{product_image_url($produk->gambar3,'thumb')}}" alt="thumbnail 2">
									</a>
									@endif
									@if($produk->gambar4!='')
									<a class="fancybox" href="{{product_image_url($produk->gambar4,'large')}}" title="{{$produk->nama}}">
										<img src="{{product_image_url($produk->gambar4,'thumb')}}" alt="thumbnail 3">
									</a>
									@endif
								</div><!--product-img-thumb-->
								<div class="clearfix"></div>
							</div><!--end span6-->

							<div class="span6">
								<div class="product-set">
									<div class="product-price">
										@if($produk->hargaCoret != 0)
										<span class="strike-through">{{ price($produk->hargaCoret) }}</span>
										@endif
										<span>{{ price($produk->hargaJual) }}</span>
									</div><!--end product-price-->
									<div class="product-info">
										{{ sosialShare(product_url($produk)) }}
									</div><!--end product-inputs-->
									<div class="product-info">
										<dl class="dl-horizontal">
											<p>{{$produk->deskripsi}}</p>
										</dl>
									</div><!--end product-info-->
									<div class="product-inputs">
										<form action="#" id="addorder">
											<div class="controls-row">
												@if($opsiproduk->count()>0)
												<select class="span3" name="opsiproduk">
													<option value="">-- Pilih Opsi --</option>
													@foreach ($opsiproduk as $key => $opsi)
													<option value="{{$opsi->id}}" {{ $opsi->stok==0 ? 'disabled':''}} >
														{{$opsi->opsi1.($opsi->opsi2=='' ? '':' / '.$opsi->opsi2).($opsi->opsi3=='' ? '':' / '.$opsi->opsi3)}} {{price($opsi->harga)}}
													</option>
													@endforeach
												</select>
												@endif
											</div><!--end controls-row-->

											<div class="input-append">
												<input class="span2" type="text" name="qty" value="1" placeholder="Jumlah">
												<button class="btn btn-primary add_cart"><i class="icon-shopping-cart"></i> &nbsp;Beli</button>
											</div>
										</form><!--end form-->
									</div><!--end product-inputs-->
									<div class="product-info">
										{{ pluginComment(product_url($produk), @$produk) }} 
									</div>
								</div><!--end product-set-->
							</div><!--end span6-->
						</div><!--end product-details-->
					</div><!--end row-->
					@if(count(other_product($produk)) > 0)
					<div class="related-product">
						<div class="titleHeader clearfix">
							<h3>Related Product</h3>
						</div><!--end titleHeader-->

						<div class="row">
							<ul class="hProductItems clearfix">
								@foreach(other_product($produk) as $myproduk)
								<li class="span3 clearfix">
									<div class="thumbnail imagepro">
										<a href="{{product_url($myproduk)}}">{{HTML::image(product_image_url($myproduk->gambar1,'medium'), $myproduk->nama)}}</a>
									</div>
									<div class="thumbSetting">
										<div class="thumbTitle">
											<h3>
												<a href="{{product_url($myproduk)}}" class="invarseColor">{{short_description($myproduk->nama,20)}}</a>
												@if(is_outstok($myproduk))
												<span class="label label-default">Kosong</span>
												@endif
											</h3>
										</div>
										<!-- <ul class="rating clearfix">
											<li><i class="star-on"></i></li>
											<li><i class="star-on"></i></li>
											<li><i class="star-on"></i></li>
											<li><i class="star-on"></i></li>
											<li><i class="star-off"></i></li>
										</ul> -->
										<div class="product-desc">
											<p>{{shortDescription($myproduk->deskripsi,100)}}</p>
										</div>
										<div class="thumbPrice">
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
								@endforeach
							</ul>
						</div><!--end row-->
					</div><!--end related-product-->
					@endif
				</div><!--end span12-->
			</div><!--end row-->
		</div><!--end conatiner-->
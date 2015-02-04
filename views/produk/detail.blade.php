		<div class="container">
			<div class="row">		
				<div class="span12">
					<div class="row">
						<div class="product-details clearfix">
							<div class="span6">
								<div class="product-title">
									<h1>{{$produk->nama}}</h1>
								</div>

								<div class="product-img-thumb-floated">
									@if($produk->gambar1!='')
									<a class="fancybox" href="{{URL::to(getPrefixDomain().'/produk/'.$produk->gambar1)}}"><img src="{{URL::to(getPrefixDomain().'/produk/thumb/'.$produk->gambar1)}}" alt=""></a>
									@endif
									@if($produk->gambar2!='')
									<a class="fancybox" href="{{URL::to(getPrefixDomain().'/produk/'.$produk->gambar2)}}"><img src="{{URL::to(getPrefixDomain().'/produk/thumb/'.$produk->gambar2)}}" alt=""></a>
									@endif
									@if($produk->gambar3!='')
									<a class="fancybox" href="{{URL::to(getPrefixDomain().'/produk/'.$produk->gambar3)}}"><img src="{{URL::to(getPrefixDomain().'/produk/thumb/'.$produk->gambar3)}}" alt=""></a>
									@endif
								</div><!--product-img-thumb-->

								<div class="product-img-floated">
									<a class="fancybox" href="{{URL::to(getPrefixDomain().'/produk/'.$produk->gambar1)}}"><img style="max-width: 80%;" src="{{URL::to(getPrefixDomain().'/produk/'.$produk->gambar1)}}" alt=""></a>
								</div><!--end product-img-->
								
							</div><!--end span6-->

							<div class="span6">
								<div class="product-set">
									<div class="product-price">
									@if($produk->hargaCoret != 0)
										<span class="strike-through">{{ jadiRUpiah($produk->hargaCoret) }}</span>
									@endif
										<span>{{ jadiRUpiah($produk->hargaJual) }}</span>
									</div><!--end product-price-->
									<div class="product-info">
										<dl class="dl-horizontal">
											<p>{{$produk->deskripsi}}</p>
										</dl>
									</div><!--end product-info-->
									<div class="product-info">
										<iframe src="//www.facebook.com/plugins/share_button.php?href={{URL::to(slugProduk($produk))}}&amp;layout=button" scrolling="no" frameborder="0" style="border:none; overflow:hidden;height:20px;width:65px;" allowTransparency="true"></iframe>
										<a class="twitter-share-button" href="https://twitter.com/share" data-count="none">Tweet </a>
										<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
									</div><!--end product-inputs-->
									<div class="product-inputs">
										<form action="#" id='addorder'>
											<div class="controls-row">
												@if($opsiproduk->count()>0)                 
													<select class="span3" name="opsiproduk">
															<option value="">-- Pilih Opsi --</option>
															@foreach ($opsiproduk as $key => $opsi)
															<option value="{{$opsi->id}}" {{ $opsi->stok==0 ? 'disabled':''}} >					
																{{$opsi->opsi1.($opsi->opsi2=='' ? '':' / '.$opsi->opsi2).($opsi->opsi3=='' ? '':' / '.$opsi->opsi3)}} {{jadiRupiah($opsi->harga)}}	
															</option>
															@endforeach
													</select>
													</p>
												@endif    												
											</div><!--end controls-row-->

											<div class="input-append">
												<input class="span2" type="text" name='qty' value="1" placeholder="QTY...">
												<button class="btn btn-primary add_cart"><i class="icon-shopping-cart"></i> Masukan Keranjang</button>
											</div>											
										</form><!--end form-->
									</div><!--end product-inputs-->
									<div class="product-info">
										{{pluginTrustklik()}}
									</div>
								</div><!--end product-set-->
							</div><!--end span6-->
						</div><!--end product-details-->
					</div><!--end row-->

					<div class="related-product">
						<div class="titleHeader clearfix">
							<h3>Related Product</h3>
						</div><!--end titleHeader-->

						<div class="row">
							<ul class="hProductItems clearfix">

								@foreach($produklain as $myproduk)
								<li class="span3 clearfix">
									<div class="thumbnail">
										<a href="{{slugProduk($myproduk)}}">{{HTML::image(getPrefixDomain().'/produk/'.$myproduk->gambar1, $myproduk->nama, array('style' => ''))}}</a>
									</div>
									<div class="thumbSetting">
										<div class="thumbTitle">
											<h3>
											<a href="{{slugProduk($myproduk)}}" class="invarseColor">{{$myproduk->nama}}</a>
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
											<span class="strike-through">{{jadiRupiah($myproduk->hargaCoret,true)}}</span>
										@endif
											<span>{{jadiRupiah($myproduk->hargaJual)}}</span>
										</div>

										<div class="thumbButtons">
											<button onclick="window.location.href='{{URL::to('produk/'.$myproduk->slug)}}'" class="btn btn-primary btn-small btn-block">
												Lihat Produk
											</button>
										</div>
									</div>
								</li>
								@endforeach	
							</ul>
						</div><!--end row-->
					</div><!--end related-product-->
				</div><!--end span12-->
			</div><!--end row-->
		</div><!--end conatiner-->
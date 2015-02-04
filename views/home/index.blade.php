            @if(count($newproduk) > 0)
            <div class="row">
                <div class="span12">

                    <div id="featuredItems">
                        <div class="titleHeader clearfix">
                            <h3>Recent Products</h3>
                            <div class="pagers">
                                <div class="btn-toolbar">
                                    <div class="btn-toolbar">
                                        
                                    </div>
                                </div><!--end btn-toolbar-->
                            </div><!--end pagers-->
                        </div><!--end titleHeader-->

                        <div class="row">
                            <ul class="hProductItems clearfix">

                                @foreach($newproduk as $key=>$myproduk)
                                <li class="span3 clearfix">
                                    <div class="thumbnail">
                                        <a href="{{slugProduk($myproduk)}}"><img src="{{URL::to(getPrefixDomain().'/produk/'.$myproduk->gambar1)}}" alt=""></a>
                                    </div>
                                    <div class="thumbSetting">
                                        <div class="thumbTitle">
                                            <h3>
                                            <a href="{{slugProduk($myproduk)}}" class="invarseColor">{{$myproduk->nama}}</a>
                                            @if(is_terlaris($myproduk))
                                               <span class="label label-success">Sale</span>
                                            @endif
                                            @if(is_produkbaru($myproduk))
                                               <span class="label label-success">Baru</span>
                                            @endif
                                            @if(is_outstok($myproduk))
                                                <span class="label label-success">Kosong</span>
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
                                            <p>
                                               {{shortDescription($myproduk->deskripsi,100)}}
                                            </p>
                                        </div>
                                        @if($setting->checkoutType==1)
                                            <div class="thumbPrice">
                                                <span><span class="strike-through">{{jadiRupiah($myproduk->hargaCoret,false)}}</span>{{jadiRupiah($myproduk->hargaJual,$matauang)}}</span>
                                            </div>
                                        @endif
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
                    </div><!--end featuredItems-->
                </div><!--end span12-->
            </div><!--end row-->
            @endif

            <div class="row">
                <div class="span12">
                    <div id="latestItems">
                        
                        <div class="titleHeader clearfix">
                            <h3>Featured Products</h3>
                            <div class="pagers">
                                <div class="btn-toolbar">
                                    <div class="btn-toolbar">
                                        <button class="btn btn-mini" onclick="window.location.href='{{URL::to('produk')}}'">View All</button>
                                    </div>
                                </div><!--end btn-toolbar-->
                            </div><!--end pagers-->
                        </div><!--end titleHeader-->
                        

                        <div class="row">
                            <ul class="hProductItems clearfix" id="cycleFeatured">

                                @foreach($produk as $key=>$myproduk)
                                <li class="span3 clearfix">
                                    <div class="thumbnail">
                                        <a href=""><img src="{{URL::to(getPrefixDomain().'/produk/'.$myproduk->gambar1)}}" alt=""></a>
                                    </div>
                                    <div class="thumbSetting">
                                        <div class="thumbTitle">
                                            <h3>
                                            <a href="{{slugProduk($myproduk)}}" class="invarseColor">{{$myproduk->nama}}</a>
                                            @if(is_terlaris($myproduk))
                                               <span class="label label-success">Sale</span>
                                            @endif
                                            @if(is_produkbaru($myproduk))
                                               <span class="label label-success">Baru</span>
                                            @endif
                                            @if(is_outstok($myproduk))
                                                <span class="label label-success">Kosong</span>
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
                                            <p>
                                               {{shortDescription($myproduk->deskripsi,100)}}
                                            </p>
                                        </div>
                                        @if($setting->checkoutType==1)
                                            <div class="thumbPrice">
                                                <span><span class="strike-through">{{jadiRupiah($myproduk->hargaCoret,false)}}</span>{{jadiRupiah($myproduk->hargaJual,$matauang)}}</span>
                                            </div>
                                        @endif
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
                    </div><!--end featuredItems-->
                </div><!--end span12-->
            </div><!--end row-->


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
                                        <a href="{{product_url($myproduk)}}">
                                            {{HTML::image(product_image_url($myproduk->gambar1))}}
                                        </a>
                                    </div>
                                    <div class="thumbSetting">
                                        <div class="thumbTitle">
                                            <h3>
                                            <a href="{{product_url($myproduk)}}" class="invarseColor">{{shortDescription($myproduk->nama, 15)}}</a>
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
                                        <div class="product-desc">
                                            <p>
                                               {{shortDescription($myproduk->deskripsi,100)}}
                                            </p>
                                        </div>
                                        @if($setting->checkoutType==1)
                                            <div class="thumbPrice">
                                            @if($myproduk->hargaCoret != 0)
                                                <span>
                                                    <span class="strike-through">{{jadiRupiah($myproduk->hargaCoret)}}</span>
                                                    <br>
                                                    {{jadiRupiah($myproduk->hargaJual,$matauang)}}
                                                </span>
                                            @else
                                                <span style="line-height:45px">{{jadiRupiah($myproduk->hargaJual,$matauang)}}</span>
                                            @endif
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
                                        <a href="{{product_url($myproduk)}}">
                                            {{HTML::image(product_image_url($myproduk->gambar1))}}
                                        </a>
                                    </div>
                                    <div class="thumbSetting">
                                        <div class="thumbTitle">
                                            <h3>
                                            <a href="{{product_url($myproduk)}}" class="invarseColor">{{shortDescription($myproduk->nama,15)}}</a>
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
                                        <div class="product-desc">
                                            <p>{{shortDescription($myproduk->deskripsi,100)}}</p>
                                        </div>
                                        @if($setting->checkoutType==1)
                                            <div class="thumbPrice">
                                            @if($myproduk->hargaCoret != 0)
                                                <span>
                                                    <span class="strike-through">{{jadiRupiah($myproduk->hargaCoret)}}</span>
                                                    <br>
                                                    {{jadiRupiah($myproduk->hargaJual,$matauang)}}
                                                </span>
                                            @else
                                                <span style="line-height:45px">{{jadiRupiah($myproduk->hargaJual,$matauang)}}</span>
                                            @endif
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
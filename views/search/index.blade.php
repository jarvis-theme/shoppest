<div class="container">

            <div class="row">

                @if($jumlahCari!=0)
                   
                    <div class="span12">

                        <div class="titleHeader clearfix">
                            <h3>Search Result</h3>
                        </div><!--end titleHeader-->


                        <div class="row">
                            <ul class="hProductItems clearfix">

                                @foreach($hasilpro as $myproduk)
                                <li class="span3 clearfix">
                                    <div class="thumbnail">
                                        <a href="">{{HTML::image(getPrefixDomain().'/produk/'.$myproduk->gambar1, $myproduk->nama, array('class="img1"'))}}</a>
                                    </div>
                                    <div class="thumbSetting">
                                        <div class="thumbTitle">
                                            <h3>
                                            <a href="#" class="invarseColor">{{$myproduk->nama}}</a>
                                            </h3>
                                        </div>
                                        <div class="product-desc">
                                            <p>
                                                Praesent ac condimentum felis. Nulla at nisl orci, at dignissim dolor...
                                            </p>
                                        </div>
                                        <div class="thumbPrice">
                                        @if($myproduk->hargaCoret != 0)
                                            <span class="strike-through">{{jadiRupiah($myproduk->hargaCoret, true)}}</span>
                                        @endif
                                            <span>{{jadiRupiah($myproduk->hargaJual)}}</span>
                                        </div>

                                        <div class="thumbButtons">
                                            <button class="btn btn-primary btn-small btn-block">
                                                Lihat Produk
                                            </button>
                                        </div>
                                    </div>
                                </li>
                                @endforeach

                            </ul>
                        </div><!--end row-->

                        <div class="pagination pagination-right">
                            <ul>
                                {{--$produk->links()--}}
                            </ul>
                        </div><!--end pagination-->

                    </div><!--end span12-->
                    
                    
                @else

                    <div class="span12">

                        <div class="alert alert-error">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <h4>Oh, We're So Sorry</h4>
                            There is no product that matches the search criteria.
                        </div><!--end alert-->

                        <div class="search">
                            <div class="titleHeader clearfix">
                                <h3>Search</h3>
                            </div>

                            <div class="well well-small">
                                <form method="post" action="{{URL::to('search')}}" class="form-inline">
                                    <input name="search" type="text" class="span3" placeholder="Type Search Term...">
                                    &nbsp;&nbsp;
                                    
                                    <button type="submit" class="btn btn-primary"><i class="icon-search"></i></button>
                                </form><!--end form-->
                            </div><!--end well-->

                        </div><!--end search-->
                    </div><!--end span3-->

                @endif

                


                

            </div><!--end row-->

        </div><!--end conatiner-->


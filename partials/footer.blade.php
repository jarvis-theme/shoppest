<!--begain footer-->
<footer>
    <div class="footerOuter">
        <div class="container">
            <div class="row-fluid">
                @foreach(all_menu() as $key=>$group)
                <div class="span3">
                    <div class="titleHeader clearfix">
                        <h3>{{$group->nama}}</h3>
                    </div>  
                     <div class="usefullLinks">
                        <div class="row-fluid">
                            <div class="span12">
                                <ul class="unstyled">
                                    @foreach($group->link as $key=>$link)
                                    <li>
                                        <a class="invarseColor" href="{{menu_url($link)}}"><i class="icon-caret-right"></i> {{$link->nama}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach 
                <div class="span3">
                    <div class="titleHeader clearfix">
                        <h3>Pembayaran</h3>
                    </div>
                    
                    <div class="usefullLinks">
                        <div class="row-fluid">
                            <div class="span12 payment">
                                <ul>
                                    @foreach(list_banks() as $bank)
                                        @if($bank->status == 1)
                                        <li class="banks">
                                            <a title="{{$bank->bankdefault->nama}}">
                                                {{HTML::image(bank_logo($bank), $bank->bankdefault->nama, array('title'=>$bank->bankdefault->nama))}} 
                                            </a>
                                        </li>
                                        @endif
                                    @endforeach
                                    @foreach(list_payments() as $pay)
                                        @if($pay->nama == 'paypal' && $pay->aktif == 1)
                                        <li class="banks">
                                            <a>
                                                <img src="{{URL::to('img/bank/paypal.png')}}" alt="support paypal" title="Paypal" />
                                            </a>
                                        </li>
                                        @endif
                                        @if($pay->nama == 'ipaymu' && $pay->aktif == 1)
                                        <li class="banks">
                                            <a>
                                                <img src="{{URL::to('img/bank/ipaymu.jpg')}}" alt="support ipaymu" />
                                            </a>
                                        </li>
                                        @endif
                                        @if($pay->nama == 'bitcoin' && $pay->aktif == 1)
                                        <li class="banks">
                                            <a>
                                                <img src="{{URL::to('img/bitcoin.png')}}" alt="Bitcoin" title="Bitcoin" />
                                            </a>
                                        </li>
                                        @endif
                                    @endforeach
                                    @if(count(list_dokus()) > 0 && list_dokus()->status == 1)
                                    <li class="banks">
                                        <a>
                                            <img src="{{URL::to('img/bank/doku.jpg')}}" alt="support doku myshortcart" title="Doku" />
                                        </a>
                                    </li>
                                    @endif
                                    @if(count(list_veritrans()) > 0 && list_veritrans()->status == 1 && list_veritrans()->type == 1)
                                    <li class="banks">
                                        <a>
                                            <img src="{{url('img/bank/veritrans.png')}}" alt="Veritrans" title="Veritrans">
                                        </a>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!--end span6-->
            </div><!--end row-fluid-->
        </div><!--end container-->
    </div><!--end footerOuter-->

    <div class="container">
        <div class="row">
            <div class="span12">
                <p>&copy; Copyrights {{date('Y')}} for <a href="{{URL::to('/')}}">{{ Theme::place('title') }}</a></p>
            </div>
        </div>
    </div>
</footer>
<!--end footer-->
{{pluginPowerup()}} 
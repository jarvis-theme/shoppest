</div></div>
<!--begain footer-->
<footer>
<div class="footerOuter">
    <div class="container">
        <div class="row-fluid">

            @foreach($tautan as $key=>$group)
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
                                        @if($link->halaman=='1')
                                            @if($link->linkTo == 'halaman/about-us')
                                            <li><a class="invarseColor" href={{"'".URL::to(strtolower($link->linkTo))."'"}}><i class="icon-caret-right"></i> {{$link->nama}}</a>

                                            @else
                                            <li><a class="invarseColor" href={{"'".URL::to("halaman/".strtolower($link->linkTo))."'"}}><i class="icon-caret-right"></i> {{$link->nama}}</a>
                                            @endif
                                        @elseif($link->halaman=='2')
                                            <a class="invarseColor" href={{"'".URL::to("blog/".strtolower($link->linkTo))."'"}}><i class="icon-caret-right"></i> {{$link->nama}}</a>
                                        @elseif($link->url=='1')
                                            <a class="invarseColor" href="http://{{strtolower($link->linkTo)}}"><i class="icon-caret-right"></i> {{$link->nama}}</a>
                                        @else
                                            <a class="invarseColor" href={{"'".URL::to(strtolower($link->linkTo))."'"}}><i class="icon-caret-right"></i> {{$link->nama}}</a>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach 
            <div class="span3">
                <div class="titleHeader clearfix" style="margin-bottom: 20px;">
                    <h3>Pembayaran</h3>
                </div>
                
                <div class="usefullLinks">
                    <div class="row-fluid">
                        <div class="span12">
                            <ul class="">
                                @if(!empty($bank))
                                    @foreach(list_banks() as $value)
                                        <li style="border-bottom:none;padding: 6px 0;list-style: none;">
                                            <a title="{{$value->bankdefault->nama}}">
                                                {{HTML::image(bank_logo($value), $value->bankdefault->nama)}}
                                            </a>
                                        </li>
                                    @endforeach

                                    @if(list_payments()[0]->aktif == 1)
                                        <li style="border-bottom:none;padding: 6px 0;list-style: none;">
                                            <a>
                                                <img src="{{URL::to('img/bank/paypal.png')}}" alt="support paypal" />
                                            </a>
                                        </li>
                                    @endif
                                    @if(list_payments()[2]->aktif == 1)
                                        <li style="border-bottom:none;padding: 6px 0;list-style: none;">
                                            <a>
                                                <img src="{{URL::to('img/bank/ipaymu.jpg')}}" alt="support ipaymu" />
                                            </a>
                                        </li>
                                    @endif
                                    @if(count(list_dokus()) > 0 && list_dokus()->status == 1)
                                        <li style="border-bottom:none;padding: 6px 0;list-style: none;">
                                            <a>
                                                <img src="{{URL::to('img/bank/doku.jpg')}}" alt="support doku myshortcart" />
                                            </a>
                                        </li>
                                    @endif
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
            <p>© Copyrights {{date('Y')}} for <a href="{{URL::to('/')}}">{{ Theme::place('title') }}</a></p>
        </div>
    </div>
</div>
</footer>
<!--end footer-->
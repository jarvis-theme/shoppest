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
                                <li><a class="invarseColor" href={{"'".URL::to("halaman/".strtolower($link->linkTo))."'"}}><i class="icon-caret-right"></i> {{$link->nama}}</a>
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
                                    @foreach($bank as $value)
                                        <li style="border-bottom:none;padding: 6px 0;list-style: none;"><a  title="{{$value->name}}"><img src="{{URL::to('img/'.$value->bankdefault->logo)}}" alt="{{$value->name}}"></a></li>
                                    @endforeach
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


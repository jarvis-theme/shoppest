<header>
    <div class="topHeader">
        <div class="container">

             <div class="pull-left">
                <ul class="pull-right">
                    <a href="{{URL::to('/')}}"><img style="max-height: 100px;float:left" src="{{URL::to(getPrefixDomain().'/galeri/'.$toko->logo)}}" alt="Shoppest"></a>
                   
                </ul>
                <!-- <div class="btn-group">
                    <button class="btn btn-small dropdown-toggle" data-toggle="dropdown">
                        $ <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu currency">
                        <li><a href="#">$</a></li>
                        <li class="divider"></li>
                        <li><a href="#">¥</a></li>
                        <li class="divider"></li>
                        <li><a href="#">£</a></li>
                        <li class="divider"></li>
                        <li><a href="#">€</a></li>
                    </ul>
                </div>
                <div class="btn-group">
                    <button class="btn btn-small dropdown-toggle" data-toggle="dropdown">
                        EN <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu language">
                        <li><a href="#">FR</a></li>
                        <li class="divider"></li>
                        <li><a href="#">CH</a></li>
                        <li class="divider"></li>
                        <li><a href="#">AR</a></li>
                    </ul>
                </div>-->
            </div> <!--end pull-left-->


            <div class="pull-right">
                {{$ShoppingCart}}
            </div><!--end pull-right-->

            <div class="pull-right">
                <form method="post" action="{{URL::to('search')}}" class="siteSearch">
                    <div class="input-append">
                        <input type="text" name="search" class="span2" id="appendedInputButton" placeholder="Search...">
                        <button class="btn" type="submit" ><i class="icon-search"></i></button>
                    </div>
                </form><!--end form-->
            </div><!--end pull-right-->

            <ul class="pull-right inline">
                @if ( ! Sentry::check())
                    <li><a class="invarseColor" href="{{URL::to('member')}}">Login</a></li>
                    <li class="sep-vertical"></li>
                    <li><a class="invarseColor" href="{{URL::to('member/create')}}">Register</a></li>
                    <li class="sep-vertical"></li>
                @else
                    <li><a class="invarseColor" href="{{URL::to('member')}}">My Account</a></li>
                    <li class="sep-vertical"></li>
                @endif
                <li><a class="invarseColor" href="{{URL::to('konfirmasiorder')}}">Konfirmasi Order</a></li>
                <!--<li class="sep-vertical"></li>
                 <li><a class="invarseColor" href="wishlist.html">Wishlist(4)</a></li> -->
                <li class="sep-vertical"></li>
                <li><a class="invarseColor" href="{{URL::to('checkout')}}">Checkout</a></li>
                
                 @if (Sentry::check())
                    <li class="sep-vertical"></li>
                    <li><a class="invarseColor" href="{{URL::to('logout')}}" >Logout</a></li>
                @endif
            </ul>

        </div><!--end container-->
    </div><!--end topHeader-->

    <div class="subHeader">
        <div class="container">
            <div class="navbar">
                
                <ul class="nav">
                    <li class="active"><a href="{{URL::to('/')}}"><i class="icon-home"></i>Home</a></li>

                    @if($katMenu!='1')   
                        @foreach($katMenu as $key=>$menu)
                            <li>
                                @if($menu->parent=='0')
                                <a href={{URL::to('category/'.$menu->slug)}}>{{$menu->nama}}</a>
                            <div>
                                <ul>
                                <!--SUbmenu Starts-->
                                @foreach($anMenu as $key1=>$submenu)
                                    
                                    @if($submenu->parent==$menu->id) 
                                        <li><a href={{URL::to('category/'.$submenu->slug)}}><span>-</span><i class="icon-caret-right"></i>{{$submenu->nama}}</a>
                                            <div><ul class="">
                                                @foreach($anMenu as $key2=>$submenu2)                                
                                                    @if($submenu->id==$submenu2->parent)
                                                    <li><a href={{URL::to('category/'.$submenu2->slug)}}>{{$submenu2->nama}}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul></div>
                                        </li>
                                    @endif
                                    
                                @endforeach
                                </ul>
                            </div>
                                <!--SUbmenu Ends-->
                                
                            </li>
                                @endif
                        @endforeach
                    
                    @endif

                   </ul>

            </div>
        </div><!--end container-->
    </div><!--end subHeader-->
</header>

<div class="container">
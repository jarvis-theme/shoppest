<!-- Default css-->
{{HTML::style(dirTemaToko().'shoppest/assets/css/bootstrap.min.css')}}
{{HTML::style(dirTemaToko().'shoppest/assets/css/jquery-ui-1.10.1.min.css')}}
{{HTML::style(dirTemaToko().'shoppest/assets/css/customize.css')}}
{{HTML::style(dirTemaToko().'shoppest/assets/css/font-awesome.css')}}
@if($tema->isiCss=='')
	{{HTML::style(dirTemaToko().'shoppest/assets/css/style.css')}}
@else
	{{HTML::style(dirTemaToko().'shoppest/assets/css/editstyle.css')}}
@endif
{{HTML::style(dirTemaToko().'shoppest/assets/js/fancybox/jquery.fancybox.css')}}


<link rel="shortcut icon" href="{{URL::to(getPrefixDomain().'/galeri/'.$toko->logo)}}">


<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="{{URL::to(dirTemaToko().'shoppest/assets/img/apple-touch-icon-72x72.png')}}">
<link rel="apple-touch-icon" sizes="114x114" href="{{URL::to(dirTemaToko().'shoppest/assets/img/apple-touch-icon-114x114.png')}}">

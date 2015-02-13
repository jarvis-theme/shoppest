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

{{createFavicon($toko)}}
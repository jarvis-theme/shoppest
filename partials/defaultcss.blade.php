<!-- Default css-->
{{generate_theme_css('shoppest/assets/css/bootstrap.min.css')}}
{{generate_theme_css('shoppest/assets/css/jquery-ui-1.10.1.min.css')}}
{{generate_theme_css('shoppest/assets/css/customize.css')}}
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

@if($tema->isiCss=='')
	{{generate_theme_css('shoppest/assets/css/style.css')}}
@else
	{{generate_theme_css('shoppest/assets/css/editstyle.css')}}
@endif
{{generate_theme_css('shoppest/assets/js/fancybox/jquery.fancybox.css')}}

{{favicon()}}
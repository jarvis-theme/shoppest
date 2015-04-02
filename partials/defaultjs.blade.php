<!-- Default js -->
{{--HTML::script(dirTemaToko().'shoppest/assets/js/lib/jquery-1.9.1.min.js')--}}
{{--HTML::script(dirTemaToko().'shoppest/assets/js/lib/jquery-ui-1.10.2.min.js')--}}
{{--HTML::script(dirTemaToko().'shoppest/assets/js/lib/bootstrap.min.js')--}}
{{--HTML::script(dirTemaToko().'shoppest/assets/js/lib/jquery.cookie.js')--}}
{{--HTML::script(dirTemaToko().'shoppest/assets/js/fancybox/jquery.fancybox.js')--}}
{{--HTML::script(dirTemaToko().'shoppest/assets/js/lib/jquery.tweet.js')--}}
{{--HTML::script(dirTemaToko().'shoppest/assets/js/lib/custom.js')--}}

<script data-main="http://{{Request::server('SERVER_NAME').'/'.dirTemaToko()}}shoppest/assets/js/app-main" src="/js/require.js"></script>

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
	<link rel="stylesheet" href="css/font-awesome-ie7.css">
<![endif]-->
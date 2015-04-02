var dirTema = document.getElementsByTagName('link')[1].getAttribute('href');
var inDevelopment = true, version = "001";

require.config({
	baseUrl: '/',
	shim: {
		"bootstrap"	: {
			deps : ['jquery'],
		},
		"jquery_cookie" : {
			deps : ['jquery'],
		},
		"jquery_ui" : {
			deps : ['jquery'],
		},
		"noty" : {
			deps : ['jquery'],
		},
	},
    "waitSeconds" : 60,
    urlArgs: "v=" +  ((inDevelopment) ? (new Date()).getTime() : version),

	paths: {
		// LIBRARY
		bootstrap 		: dirTema+'assets/js/lib/bootstrap.min',
		cart			: 'js/cart',
		jq_fancybox		: dirTema+'assets/js/fancybox/jquery.fancybox',
		jq_ui			: 'js/jquery-ui',
		jquery 			: dirTema+'assets/js/lib/jquery-1.9.1.min',
		jquery_cookie	: dirTema+'assets/js/lib/jquery.cookie',
		jquery_tweet	: dirTema+'assets/js/lib/jquery.tweet',
		jquery_ui		: dirTema+'assets/js/lib/jquery-ui-1.10.2.min',
		noty			: 'js/jquery.noty',

		// ROUTE
		router          : 'js/router',

		// CONTROLLER
		member          : dirTema+'assets/js/pages/member',
		main            : dirTema+'assets/js/pages/default',
		produk          : dirTema+'assets/js/pages/produk',
		// cart         	: dirTema+'assets/js/pages/cart',
	}
});
require([
	'router',
	'bootstrap',
	'main',
], function(router,b, main)
{
	// MEMBER
	router.define('member/*', 'member@run');

	// PRODUK
	// router.define('produk', 'cart@run');
	router.define('produk/*', 'produk@run');

	main.run();
	router.run();
});
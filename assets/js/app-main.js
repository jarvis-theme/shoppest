var dirTema = document.querySelector("meta[name='theme_path']").getAttribute('content');

require.config({
	baseUrl: '/',
    urlArgs: "v=002",
	waitSeconds : 60,
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
    
	paths: {
		// LIBRARY
		bootstrap 		: dirTema+'/assets/js/lib/bootstrap.min',
		cart			: 'js/shop_cart',
		jq_fancybox		: dirTema+'/assets/js/fancybox/jquery.fancybox',
		jq_ui			: 'js/jquery-ui',
		jquery 			: dirTema+'/assets/js/lib/jquery-1.9.1.min',
		jquery_cookie	: dirTema+'/assets/js/lib/jquery.cookie',
		jquery_tweet	: dirTema+'/assets/js/lib/jquery.tweet',
		jquery_ui		: dirTema+'/assets/js/lib/jquery-ui-1.10.2.min',
		noty			: 'js/jquery.noty',

		// ROUTE
		router          : 'js/router',

		// CONTROLLER
		member          : dirTema+'/assets/js/pages/member',
		main            : dirTema+'/assets/js/pages/default',
		produk          : dirTema+'/assets/js/pages/produk',
	}
});
require([
	'router',
	'bootstrap',
	'main',
	'cart'
], function(router,b,main,cart)
{
	router.define('member/*', 'member@run');
	router.define('produk/*', 'produk@run');

	main.run();
	cart.run();
	router.run();
});
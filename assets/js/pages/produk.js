define(['jquery','jq_fancybox'], function($)
{
	return new function()
	{
		var self = this;
		self.run = function()
		{			
			$('.fancybox').fancybox({
				padding: 10,
				openEffect : 'elastic',
				openSpeed  : 150,
				closeEffect : 'elastic',
				closeSpeed  : 150
			});
		};
	};
});
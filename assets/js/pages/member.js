define(['jquery'], function($)
{
	return new function()
	{
		var self = this;
		self.run = function()
		{
			showtooltip();
		};

		// bootstrap tooltip invocking
		var showtooltip = function() {
			$('a[data-tip=tooltip], button[data-tip=tooltip], input[data-tip=tooltip]')
			.tooltip({
				animation:false
			});
		};
	};
});
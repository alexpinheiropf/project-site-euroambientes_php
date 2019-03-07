jQuery(document).ready(function($){
		$('.forms').dcSlickForms();
	});

$(document).ready(function()
	{
		$("#showcase").awShowcase(
		{
			content_width:			900,
			content_height:			400,
			auto:					true,
			interval:				3000,
			continuous:				false,
			arrows:					true,
			buttons:				true,
			btn_numbers:			true,
			keybord_keys:			true,
			mousetrace:				false, /* Trace x and y coordinates for the mouse */
			pauseonover:			true,
			stoponclick:			false,
			transition:				'fade', /* hslide/vslide/fade */
			transition_delay:		0,
			transition_speed:		500,
			show_caption:			'onload' /* onload/onhover/show */
		});
	});
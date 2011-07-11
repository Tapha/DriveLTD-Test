// Making the tabs look nicer
$(document).ready(function() {
	$("ul.idTabs a.selected").parent('li').addClass('active');
	$('ul.idTabs > li > a').click(function() {
		$(this).parent().addClass('active').siblings().removeClass('active');
		return false;
	});
});

// Fade buttons on hover
$(document).ready(function() {
	if($.support.opacity) {
	$('.fader').hover(
		function() {
			$(this).stop().animate({opacity:0.75, filter: ''},100);
		},
		function() {
			$(this).stop().animate({opacity:1, filter: ''},100);
	});
	}
});

// Modal windows
$().ready(function() {
	$('#about').jqm({trigger: '#trigger_about, #trigger_about_footer'});
	$('#contact').jqm({trigger: '#trigger_contact, #trigger_contact_footer'});
});

// "Blinking" message
$(document).ready(function() {
	if($('.modal_window').is(':visible')) {
		$('.error_message, .ok_message, .msg_bottom').hide();
		$('.error_message, .ok_message, .msg_bottom').fadeIn(900);
	}
});

// Auto-clear input
$(document).ready(function() {
	$(".field").ClearInput();
});
(function($) {$.fn.ClearInput = function() {
	$(this).each(function() {
		var DefaultValue = this.defaultValue;
		$(this).focus(function(){
			var CurrValue = $(this).val();
			if(CurrValue == DefaultValue) {
				$(this).val("");
			}
		});
		$(this).blur(function(){
			var CurrValue = $(this).val();
			if(CurrValue.length == 0) {
				$(this).val(DefaultValue);
			}
		});
	});
}})(jQuery);

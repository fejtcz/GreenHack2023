/*
	Directive by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

(function ($) {

	var $window = $(window),
		$body = $('body');

	// Breakpoints.
	breakpoints({
		wide: ['1281px', '1680px'],
		normal: ['981px', '1280px'],
		narrow: ['841px', '980px'],
		narrower: ['737px', '840px'],
		mobile: ['481px', '736px'],
		mobilep: [null, '480px']
	});

	// Play initial animations on page load.
	$window.on('load', function () {
		window.setTimeout(function () {
			$body.removeClass('is-preload');
		}, 100);
	});

	$(send_button).on('click', function () {
		var data = {
			"basic": {
				"visits_per_day": $('#visits_per_day').val(),
				"open_days": $('#open_days').val(),
			},
			"paper_towel": {
				"price": $('#paper_price').val()
			},
			"cloth_towel": {
				"washmachine_capacity": $('#cloth_washmachine_capacity').val(),
				"wash_price": $('#cloth_wash_price').val()
			},
			"dryer": {
				"input_power": $('#dryer_input_power').val(),
				"electric_price": $('#dryer_electric_price').val()
			}
		};

		$.ajax({
			url: 'http://127.0.0.1:8088',
			method: 'POST',
			type: 'jsonp',
			contentType: "application/json; charset=utf-8",
			crossDomain: true,
			data: JSON.stringify(data),
			success: function (response) {
				console.log(response);
			},
			error: function (error) {
				console.log(error);
			}
		});
	});

})(jQuery);
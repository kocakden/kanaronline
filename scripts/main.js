window.jQuery && (function ($) {

	function getAccountInfo () {

		var info_html = 'Welcome [account_name] ([account_number])',

			$name = $('#account_name'),
			$number = $('#account_number');

		if ($name.length > 0 && $number.length > 0) {
			info_html = info_html.replace("[account_name]", $name.text());
			info_html = info_html.replace("[account_number]", $number.text());

			$('#account_info').html(info_html);
		}
	}

	function fixBasket () {

		var basketTxt = $('#basket_info').text().trim();

		basketTxt = basketTxt.length > 0 ? basketTxt : 'Empty';

		$('.basketHeader').click(function () {
			if (basketTxt != 'Empty') {
				$('.basketContent').slideToggle('fast', function () {
					$('.basketHeader').toggleClass('active');
				});
			}			
		}).text(basketTxt)


	}

	$(function () {

		getAccountInfo();

		fixBasket();

	});

}(window.jQuery));
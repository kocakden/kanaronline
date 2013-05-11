(function ($) {

	function getAccountInfo () {

		var info_html = 'Welcome <b>[account_name]</b> Your Account Number is: <b>[account_number]</b>.',

			$name = $('#account_name'),
			$number = $('#account_number');

		if ($name.length > 0 && $number.length > 0) {
			info_html = info_html.replace("[account_name]", $name.text());
			info_html = info_html.replace("[account_number]", $number.text());

			$('#account_info').html(info_html);
		}
	}

	$(function () {

		getAccountInfo();

	});

}(window.jQuery));
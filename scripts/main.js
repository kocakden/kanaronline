window.jQuery && (function ($) {
	//Add user info to header menu
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

	//Initialize all qty text fields with 1
	function initQTY() {
		$('.qtyField').val(1);
	}

	//Update the basket
	function updateBasket (async) {

		if (async) {
			$('#basketModal').load("/ #basketContent", function () { 
				updateBasket(); 
				$(this).prepend("<div class='modalBG'></div>");
				$('.basketLink').trigger('click');
			});
		} else {
			var basketTxt = $('#basket_info').text().trim();
			$('.basketLink').find('.txt').text(basketTxt.length > 0 ? basketTxt : 'Empty');

			var $basketModal = $('#basketModal').find('.modalContent'),
			$tbl = $basketModal.children('table').detach(),
			$rows = $tbl.find('tr[valign]').addClass('basketItem');


			$rows.each(function () {
				var $el = $(this);
				var $item = $el.find('.orderItemList');
				var itemId = $el.find('.orderListLink')[0].href.split("=")[1];

				//change some text
				var linkTxt = $item.html()
					.replace("Qty: ", "&times; ")
					.replace("|","");

				$item.html(linkTxt);

				//add image
				var img = [
					"<td class='basketImg'><img src='/img/inventory/small/",
					itemId,
					".jpg'></td>"
				].join("");

				$el.prepend(img);

				//add remove button
				var removeBtn = [
					"<td class='basketOptions'><button class='removeBtn btn icon' title='Remove Item' data-itemId='",
					itemId,
					"'>&#xe004;</button></td>"
				].join("");

				$el.append(removeBtn);
			});

			$tbl.find('tr').not('[valign]').remove();

			$basketModal.prepend($tbl);
		}

	}

	//initialize basket, add click handlers, etc
	function initBasket () {

		var removeUrl = '/order/order.php';

		$('.basketLink').on('click',function (e) {
			($('#basket_info').text().trim() === '') && e.stopPropagation();
		});

		$('.basket').on('click', '.removeBtn', function (e) {
			e.preventDefault();
			var $btn = $(this);

			var remData = {
				"removeInventoryID": $btn.data('itemid')
			}
			$.post(removeUrl, remData, function (argument) {
				$btn.closest('.basketItem').addClass('animated fadeOut');
				setTimeout(function () { $btn.closest('.basketItem').remove(); }, 500)

			})						
		});

		$(document).on('submit', 'form[name=addInventory]', function  (e) {
			e.preventDefault();

			var $form = $(this);

			$.post(this.action, $form.serialize(), function  (d) {
				updateBasket(true);
				$('.basketLink').removeClass('updated').addClass('updated');
			});

		});

		updateBasket();
	}

	function initModal () {
		$(document)
			.on('click', '.modalBG, .modalClose', function () {
				$(this).closest('.active').removeClass('active');})
			.on('click', '[data-modal]', function (e) {
				e.preventDefault();
				var modalId = $(this).data('modal');

				$(modalId).addClass('active');
			})
	}

	function initLogin() {

	};

	$(function () {

		getAccountInfo();
		initQTY();
		initBasket();
		initModal();
		initLogin();

	});

}(window.jQuery));
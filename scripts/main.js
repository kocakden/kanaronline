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
		//$('.qtyField').val(1);
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

			$('#basketModal').removeClass("loading");
		}

	}

	//initialize basket, add click handlers, etc
	function initBasket () {

		var removeUrl = '/order/order.php';

		$('.basket').on('click', '.removeBtn', function (e) {
			e.preventDefault();
			var $btn = $(this);

			var remData = {
				"removeInventoryID": $btn.data('itemid')
			}
			
			$btn.closest('.basketItem').addClass('animated fadeOut');	
			$.post(removeUrl, remData, function () { updateBasket(true); })
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

	function initSearch() {

		var specialKeyCodeMap = {
			9: "tab",
			27: "esc",
			37: "left",
			39: "right",
			13: "enter",
			38: "up",
			40: "down"
		};

		$('.searchTextBox').on("keyup", function (e) {
			if (specialKeyCodeMap[e.which || e.keyCode]) {
				return;
			}

			if (this.value && this.value.length >= 2) {
				$.post("/", {
					searchKeywords: this.value,
					navBarSubmitSearch: ""
				}, parseSearchResults)
			}

			
		});
	};

	var template = Hogan.compile(
			"	<ul class='search-result-list'>" +
			"		{{#products}}" +
			"			<li class='search-result-item'><a href='{{link}}'>" +
			"			<img src='{{imgUrl}}'/><span>{{title}}</span><strong class='search-result-price'>{{price}}</strong></a></li>" +
			"		{{/products}}" +
			"	</ul>");

	function parseSearchResults (response) {
		var $response = $(response),
			$links = $response.find('.catalogInvoiceLine'),
			$link,
			$price,
			len = $links.length < 6 ? $links.length : 6,
			products = [];		


		for (var i =  0; i < len; i++) {
			$link = $($links[i]);

			$price = $link.closest('td[width="33%"]').find('.priceTableList');
			$price = $price.siblings() ? $price.siblings() : $price;

			products.push({
				link: $link[0].href,
				title: $link.text(),
				imgUrl: $link.closest('td[width="33%"]').find('a img').attr('src'),
				price: $price.find('td:last').text()
			});

		};

		$('#searchResults').html(template.render({products: products}));

	}

	$(function () {

		getAccountInfo();
		initQTY();
		initBasket();
		initModal();
		initSearch();

	});

}(window.jQuery));
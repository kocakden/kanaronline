(function ($) {

	"use strict";

	var defaults = {
		url: "/search/q=[query]",
		ajaxData: {
			method: 'get'
		},
		postQueryParam: "",
		debounceDelay: 300,
		results : '.ajax-search-results',
		showClass : 'active',
		loadingClass: 'searching'
	}, specialKeyCodeMap = {
		9: "tab",
		27: "esc",
		37: "left",
		39: "right",
		13: "enter",
		38: "up",
		40: "down"
	}, cache = {}

	function AjaxSearch ($el, options) {
		this.$el = $el;
		this.options = $.extend({}, defaults, options);

		this.shown = false;
		this.debounceId = false;

		this.$results = $(this.options.results);
		this.showClass= this.options.showClass;
		this.parser = this.options.parser;
		this.url = this.options.url;
		this.postQueryParam = this.options.postQueryParam;
		this.ajaxData = this.options.ajaxData;

		this.init();
	}

	AjaxSearch.prototype = {

		init: function() {
			var me = this;

			me.$el.on("keyup", $.proxy(this.keyup, this));

			$('html').on('click', function(e) {

				if (e.target === me.$el[0]) return;

				if (e.target === me.$results[0]) return;

				if ($.contains(me.$results[0], e.target)) return;

				me.hide();

			})
		},

		show: function() {
			this.$results.addClass(this.options.showClass)
			this.shown = true;
		},

		hide: function() {
			this.$results.removeClass(this.options.showClass);
			this.shown = false
		},

		search: function() {
			var me = this,
				query = me.$el.val(),
				url = me.url,
				ajaxData = me.ajaxData

			me.hide();

			if (query.length > 2) {

				me.$el.addClass(this.options.loadingClass);

				if (cache[query]) {
					me.renderResults(query, cache[query]);
					return;
				}

				if (!me.postQueryParam)
					url = url.replace('[query]', query);
				else
					ajaxData.data[me.postQueryParam] = query;

				$.ajax({
					url: url,
					type: ajaxData.type,
					data: ajaxData.data,
				}).success(function(response) {
					me.renderResults(query,response);
				}).fail(function() {
					me.$el.removeClass(this.options.loadingClass);
				})

			}
		},

		renderResults:  function(query, response) {
			cache[query] = cache[query] || response;

			var results = this.parser(response);

			this.$el.removeClass(this.options.loadingClass);
			if (results) {
				this.$results.html(results);
				this.show();
			}
		},

		keyup: function(e) {
			var key = specialKeyCodeMap[e.which || e.keyCode];

			if (key) {

				if (this.shown && key === "esc" ) {
					this.hide();
				}

				return;
			}

			clearTimeout(this.debounceId);
			this.debounceId = setTimeout($.proxy(this.search, this), this.options.debounceDelay);
		}
	}


	$.fn.ajaxSearch = function (option, args) {
		this.each(function() {
			var $this = $(this),
				data = $this.data('ajax-search'),
				options = typeof option == "object" && option;

			if (!data) {

				if (options) {

					if (typeof options.parser !== "function")
						throw new Error("AjaxSearch: parser function must be provided");

					$this.data('ajax-search', (data = new AjaxSearch($this, options)));
				} else {
					throw new Error("AjaxSearch: A parser function is required");
				}

			}

			if (typeof option == "string") data[option](args);

		});
	}

})(window.jQuery);
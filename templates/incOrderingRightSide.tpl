<table border="0" cellspacing="0" cellpadding="0" width="0" style="position:relative">
	{if !$is_guest}
		<tr><!-- right side table r 1 -->
			<td align="center">
				<div class="basket">
	
					<a class="basketLink" data-modal="#basketModal" href="{$order_checkout_link}" title="Click to view details">
						<span class="icon" style="font-size: 16px;">&#xe000</span>
						<span class='txt'></span>
					</a>
					<div id="basketModal" class="modal">
						<div class="modalBG"></div>
						<div id="basketContent" class="modalWindow animated fadeInDown">
							<div class="modalHeader basketHeader">
								Your Order Details
								<span href="#" class="modalClose" title="Close">&times;</span>								
							</div>
							<div id="basket_info" class="hidden">{$short_order_display}</div>
							<div class="modalContent">
								{if $order_display}
									{$order_display}
									<a href="{$order_checkout_link}" class="btn basketBtn">Complete Order</a>
								{else}
									<div class="modalMessage">You have no items in your order</div>
								{/if}
								<div class="modalLoader"></div>
							</div>

						</div>												
					</div>
					<div class="hidden">
						<span id="account_name" class="yourAccountStore">{$store_name}</span><br>
						Account: <span id="account_number">{$store_account_number}</span><br>
						{if $buyer_account}
							Buyer: <span id="account_buyer">{$buyer_account}</span>
						{/if}
					</div>
				</div>
			</td>
		</tr>
	{/if}
	{if $info_pages}
		<tr><!-- right side table r 3 -->
			<td align="center">
				<table width="185" cellpadding="0" cellspacing="0" border="0"><!-- store info table -->
					<tr><!-- store info table r 1 -->
						<td height="23" class="infoBoxHeader">Store Information</td>
					</tr>
					<tr><!-- store info table r 2 -->
						<td class="infoBoxContent">
							<table cellpadding="2" border="0">
								<tr>
									<td class="large">{$info_pages}</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr><!-- store info table r 3 -->
						<td height="10" class="infoBoxFooter"><img src="site/interface/clear_spacer.gif" height="10"></td>
					</tr>
				</table><!-- end store info table -->
			</td>
		</tr>

	{/if}
	{if $enable_translate}
		<tr><!-- right side table r 4 -->
			<td align="center">
				<table width="185" cellpadding="0" cellspacing="0" border="0"><!-- languages table -->
					<tr><!-- languages table r 1 -->
						<td height="23" class="infoBoxHeader">Languages</td>
					</tr>
					<tr><!-- languages table r 1 -->
						<td class="infoBoxContent">
							<table width="100%" cellpadding="1" border="0">
								<tr valign="middle">
									<td><a href="javascript:translate('es');"><img src="/img/site/misc/languages/spanish.jpg" alt="Spanish"> Spanish</a></td>
								</tr>
								<tr valign="middle">
									<td><a href="javascript:translate('pt');"><img src="/img/site/misc/languages/portuguese.jpg" alt="Portuguese"> Portuguese</a></td>
								</tr>
								<tr valign="middle">
									<td><a href="javascript:translate('de');"><img src="/img/site/misc/languages/german.jpg" alt="German"> German</a></td>
								</tr>
								<tr valign="middle">
									<td><a href="javascript:translate('fr');"><img src="/img/site/misc/languages/french.jpg" alt="French"> French</a></td>
								</tr>
								<tr valign="middle">
									<td><a href="javascript:translate('it');"><img src="/img/site/misc/languages/italian.jpg" alt="Italian"> Italian</a></td>
								</tr>
								<tr valign="middle">
									<td><a href="javascript:translate('zh-CHS');"><img src="/img/site/misc/languages/chinese.jpg" alt="Chinese"> Chinese (Simplified)</a></td>
								</tr>
								<tr valign="middle">
									<td><a href="javascript:translate('ja');"><img src="/img/site/misc/languages/japanese.jpg" alt="Japanese"> Japanese</a></td>
								</tr>
								<tr valign="middle">
									<td><a href="javascript:translate('ko');"><img src="/img/site/misc/languages/korean.jpg" alt="Korean"> Korean</a></td>
								</tr>
								<tr valign="middle">
									<td align="center"><select class="searchSelect" onChange="translate(this.options[this.selectedIndex].value);"><option value="" selected>Other Languages...</option><option value="ar">Arabic</option><option value="bg">Bulgarian</option><option value="ca">Catalan</option><option value="zh-CHT">Chinese (Traditional)</option><option value="cs">Czech</option><option value="da">Danish</option><option value="nl">Dutch</option><option value="et">Estonian</option><option value="fi">Finnish</option><option value="el">Greek</option><option value="ht">Haitian Creole</option><option value="he">Hebrew</option><option value="hi">Hindi</option><option value="hu">Hungarian</option><option value="id">Indonesian</option><option value="lv">Latvian</option><option value="lt">Lithuanian</option><option value="no">Norwegian</option><option value="pl">Polish</option><option value="ro">Romanian</option><option value="ru">Russian</option><option value="sk">Slovak</option><option value="sl">Slovenian</option><option value="sv">Swedish</option><option value="th">Thai</option><option value="tr">Turkish</option><option value="uk">Ukrainian</option><option value="vi">Vietnamese</option></select></td>
								</tr>
								<tr valign="middle">
									<td><a href="javascript:revertLanguage();" style="font-weight: bold;"><img src="/img/site/misc/languages/english.jpg" alt="English"> Reset to English</a></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr><!-- languages table r 1 -->
						<td height="10" class="infoBoxFooter"><img src="site/interface/clear_spacer.gif" height="10"></td>
					</tr>
				</table><!-- end languages table -->
			</td>
		</tr>
		<tr>
			<td height="10"><img src="site/interface/clear_spacer.gif" height="10"></td>
		</tr>
	{/if}

</table>
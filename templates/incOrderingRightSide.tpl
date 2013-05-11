<table border="0" cellspacing="0" cellpadding="0" width="197">
	{if !$is_guest}
		<tr><!-- right side table r 1 -->
			<td align="center">
				<table width="185" cellpadding="0" cellspacing="0" border="0"><!-- your account table -->
					<tr><!-- your account table r 1 -->
						<td height="23" class="infoBoxHeader">Your Basket</td>
					</tr>
					<tr><!-- your account table r 1 -->
						<td class="infoBoxContent">
							<table cellpadding="2" border="0">
								<tr class="hidden">
									<td>
										<span id="account_name" class="yourAccountStore">{$store_name}</span><br>
										Account: <span id="account_number">{$store_account_number}</span><br>
										{if $buyer_account}
											Buyer: <span id="account_buyer">{$buyer_account}</span>
										{/if}
									</td>
								</tr>
								{if $order_display}
									<tr>
										<td align="center">
											<table cellpadding="0" cellspacing="0" border="0">
												<tr>
													<td height="8" class="resultsBoxHeader"><img src="site/interface/clear_spacer.gif" height="8"></td>
												</tr>
												<tr>
													<td class="resultsBoxContent">
														<table cellspacing="0" cellpadding="0" border="0" width="100%">
															<tr>
																<td width="100%" valign="top">{$short_order_display}</td>
															</tr>
															<tr>
																<td width="100%" valign="top">{$order_display}</td>
															</tr>
															<tr>
																<td width="100%" height="1" valign="top"><img src="site/interface/clear_spacer.gif" height="1"></td>
															</tr>
															<tr>
																<td width="100%" height="1" valign="top" class="resultsDivider"><img src="site/interface/clear_spacer.gif" height="1"></td>
															</tr>
															<tr>
																<td width="100%" align="center" valign="top"><a href="{$order_checkout_link}"><img src="site/interface/order_box_complete_order.gif" border="0"></a></td>
															</tr>
														</table>
													</td>
												</tr>
												<tr>
													<td height="8" class="resultsBoxFooter"><img src="site/interface/clear_spacer.gif" height="8"></td>
												</tr>
											</table>
										</td>
									</tr>
								{/if}
							</table>
						</td>
					</tr>
					<tr><!-- your account table r 1 -->
						<td height="10" class="infoBoxFooter"><img src="site/interface/clear_spacer.gif" height="10"></td>
					</tr>
				</table><!-- end your account table -->
			</td>
		</tr>
		<tr>
			<td height="10"><img src="site/interface/clear_spacer.gif" height="10"></td>
		</tr>
	{else}
		<tr><!-- right side table r 3 -->
			<td align="center">
				<table width="185" cellpadding="0" cellspacing="0" border="0" class="promoTable"><!-- promo table -->
					<tr valign="top"><!-- promo table r 1 -->
						<td class="resultsBoxHeader promoHeaderFooter">
							<div class="promoTitle">Profit <span class="promoSmall">with the</span><br/>Internet Advantage<div class="promoApplyOuter"><a href="{$apply_link}" class="promoApplyLink"><div class="promoApplyInner">apply<br/>now</div></a></div></div>
						</td>
					</tr>
					<tr valign="top"><!-- promo table r 2 -->
						<td height="7" class="promoBullet"><img src="site/interface/clear_spacer.gif" height="7"></td>
					</tr>
					<tr valign="top"><!-- promo table r 3 -->
						<td class="promoBullet">
							&#149;First Look at Daily & Weekly Specials<br/><br/>
							&#149;Large, Full Color Photographs<br/><br/>
							&#149;Instantly Sell Entire Product Lines<br/><br/>
							&#149;Quick, responsive customer service<br/>
						</td>
					</tr>
					<tr valign="top"><!-- promo table r 4 -->
						<td height="15" class="resultsBoxFooter promoHeaderFooter"><img src="site/interface/clear_spacer.gif" height="15"></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td height="10"><img src="site/interface/clear_spacer.gif" height="10"></td>
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
		<tr>
			<td height="10"><img src="site/interface/clear_spacer.gif" height="10"></td>
		</tr>
	{/if}
		<tr><!-- right side table r 3 -->
			<td align="center">
				<table width="185" cellpadding="0" cellspacing="0" border="0"><!-- tools table -->
					<tr><!-- tools table r 1 -->
						<td height="23" class="infoBoxHeader">Tools</td>
					</tr>
					<tr><!-- tools table r 1 -->
						<td class="infoBoxContent">
							<table cellpadding="2" border="0">
								{if !$is_guest}
									<tr valign="middle">
										<td width="23" align="center"><a href="{$quick_order_link}" class="tools"><img src="site/interface/tools_quick_order_but.gif" border="0"></a></td>
										<td><a href="{$quick_order_link}" class="tools">Quick Order Composer</a></td>
									</tr>
									<tr valign="middle">
										<td width="23" align="center"><a href="{$saved_orders_link}"><img src="site/interface/tools_view_saved_but.gif" border="0"></a></td>
										<td><a href="{$saved_orders_link}" class="tools">View Saved Orders</a></td>
									</tr>
									<tr valign="middle">
										<td width="23" align="center"><a href="{$active_orders_link}"><img src="site/interface/tools_track_active_but.gif" border="0"></a></td>
										<td><a href="{$active_orders_link}" class="tools">Track Active Orders</a></td>
									</tr>
									<tr valign="middle">
										<td width="23" align="center"><a href="{$advanced_item_search_link}" class="tools"><img src="site/interface/tools_search_but.gif" border="0"></a></td>
										<td><a href="{$advanced_item_search_link}" class="tools">Advanced Item Search</a></td>
									</tr>
								{else}
									<tr valign="middle">
										<td width="23" align="center"><a{$guest_alert}><img src="site/interface/tools_quick_order_but.gif" border="0"></a></td>
										<td><a{$guest_alert} class="tools">Quick Order Composer</a></td>
									</tr>
									<tr valign="middle">
										<td width="23" align="center"><a{$guest_alert}><img src="site/interface/tools_view_saved_but.gif" border="0"></a></td>
										<td><a{$guest_alert} class="tools">View Saved Orders</a></td>
									</tr>
									<tr valign="middle">
										<td width="23" align="center"><a{$guest_alert}><img src="site/interface/tools_track_active_but.gif" border="0"></a></td>
										<td><a{$guest_alert} class="tools">Track Active Orders</a></td>
									</tr>
									<!--tr valign="middle">
										<td width="23" align="center"><a{$guest_alert}><img src="site/interface/tools_batch_import_but.gif" border="0"></a></td>
										<td><a{$guest_alert} class="tools">{$SITE_NAME} InfoSync</a></td>
									</tr-->
									<tr valign="middle">
										<td width="23" align="center"><a href="{$advanced_item_search_link}" class="tools"><img src="site/interface/tools_search_but.gif" border="0"></a></td>
										<td><a href="{$advanced_item_search_link}" class="tools">Advanced Item Search</a></td>
									</tr>
								{/if}
							</table>
						</td>
					</tr>
					<tr><!-- tools table r 1 -->
						<td height="10" class="infoBoxFooter"><img src="site/interface/clear_spacer.gif" height="10"></td>
					</tr>
				</table><!-- end tools table -->
			</td>
		</tr>
		<tr>
			<td height="10"><img src="site/interface/clear_spacer.gif" height="10"></td>
		</tr>
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
		<tr>
			<td align="center"><img src="/img/site/misc/promo_promise_improvement.gif" border="0"></td>
		</tr>

</table>
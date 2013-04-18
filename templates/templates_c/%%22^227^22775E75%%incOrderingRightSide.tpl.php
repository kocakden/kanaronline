<?php /* Smarty version 2.6.3, created on 2013-04-18 12:45:53
         compiled from incOrderingRightSide.tpl */ ?>
<script type="text/javascript">
var quick_order = new Image();
quick_order.src = "http://www.kanaronline.com/img/site/interface/tool_quick_order.gif";

var quick_order_on = new Image();
quick_order_on.src = "http://www.kanaronline.com/img/site/interface/tool_quick_order_on.gif";

var saved_orders = new Image();
saved_orders.src = "http://www.kanaronline.com/img/site/interface/tool_saved_orders.gif";

var saved_orders_on = new Image();
saved_orders_on.src = "http://www.kanaronline.com/img/site/interface/tool_saved_orders_on.gif";

var active_orders = new Image();
active_orders.src = "http://www.kanaronline.com/img/site/interface/tool_active_orders.gif";

var active_orders_on = new Image();
active_orders_on.src = "http://www.kanaronline.com/img/site/interface/tool_active_orders_on.gif";

//var infosync = new Image();
//infosync.src = "http://www.kanaronline.com/img/site/interface/tool_infosync.gif";

//var infosync_on = new Image();
//infosync_on.src = "http://www.kanaronline.com/img/site/interface/tool_infosync_on.gif";

var advanced_search = new Image();
advanced_search.src = "http://www.kanaronline.com/img/site/interface/tool_advanced_search.gif";

var advanced_search_on = new Image();
advanced_search_on.src = "http://www.kanaronline.com/img/site/interface/tool_advanced_search_on.gif";

function toolListener(id, state)
{
	if(state == "ON") // hover
	{
		turnLinkImgOn(id);
		showToolTip(id);
	}
	else // not hovering
	{
		turnLinkImgOff(id);
		hideToolTip();
	}
}

function showToolTip(id)
{
	var toolTips = new Array();
	toolTips["quick_order"] = "Quick Order Composer";
	toolTips["saved_orders"] = "View Saved Orders";
	toolTips["active_orders"] = "Track Active Orders";
	toolTips["advanced_search"] = "Advanced Item Search";

	var toolTipCell = document.getElementById("toolTip");
	toolTipCell.innerHTML = toolTips[id];
}

function hideToolTip()
{
	var toolTipCell = document.getElementById("toolTip");
	toolTipCell.innerHTML = "&nbsp;"
}
</script>
<table border="0" cellspacing="0" cellpadding="0" width="197">
	<?php if (! $this->_tpl_vars['is_guest']): ?>
		<tr><!-- right side table r 1 -->
			<td align="center">
				<table width="185" cellpadding="0" cellspacing="0" border="0"><!-- your account table -->
					<tr><!-- your account table r 1 -->
						<td height="23" class="infoBoxHeader">Your Account</td>
					</tr>
					<tr><!-- your account table r 1 -->
						<td class="infoBoxContent">
							<table cellpadding="2" border="0">
								<tr>
									<td>
										<span class="yourAccountStore"><?php echo $this->_tpl_vars['store_name']; ?>
</span><br>
										Account: <?php echo $this->_tpl_vars['store_account_number']; ?>
<br>
										<?php if ($this->_tpl_vars['buyer_account']): ?>
											Buyer: <?php echo $this->_tpl_vars['buyer_account']; ?>

										<?php endif; ?>
									</td>
								</tr>
								<?php if ($this->_tpl_vars['order_display']): ?>
									<tr>
										<td align="center">
											<table cellpadding="0" cellspacing="0" border="0">
												<tr>
													<td height="8" class="resultsBoxHeader"><img src="http://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="8"></td>
												</tr>
												<tr>
													<td class="resultsBoxContent">
														<table cellspacing="0" cellpadding="0" border="0" width="100%">
															<tr>
																<td width="100%" valign="top"><?php echo $this->_tpl_vars['short_order_display']; ?>
</td>
															</tr>
															<tr>
																<td width="100%" valign="top"><?php echo $this->_tpl_vars['order_display']; ?>
</td>
															</tr>
															<tr>
																<td width="100%" height="1" valign="top"><img src="http://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="1"></td>
															</tr>
															<tr>
																<td width="100%" height="1" valign="top" class="resultsDivider"><img src="http://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="1"></td>
															</tr>
															<tr>
																<td width="100%" align="center" valign="top"><a href="<?php echo $this->_tpl_vars['order_checkout_link']; ?>
"><img src="http://www.kanaronline.com/img/site/interface/order_box_complete_order.gif" border="0"></a></td>
															</tr>
														</table>
													</td>
												</tr>
												<tr>
													<td height="8" class="resultsBoxFooter"><img src="http://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="8"></td>
												</tr>
											</table>
										</td>
									</tr>
								<?php endif; ?>
							</table>
						</td>
					</tr>
					<tr><!-- your account table r 1 -->
						<td height="10" class="infoBoxFooter"><img src="http://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="10"></td>
					</tr>
				</table><!-- end your account table -->
			</td>
		</tr>
		<tr>
			<td height="10"><img src="http://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="10"></td>
		</tr>
	<?php else: ?>
		<tr><!-- right side table r 3 -->
			<td align="center">
				<table width="185" cellpadding="0" cellspacing="0" border="0" class="promoTable"><!-- promo table -->
					<tr valign="top"><!-- promo table r 1 -->
						<td class="resultsBoxHeader promoHeaderFooter">
							<div class="promoTitle">Profit <span class="promoSmall">with the</span><br/>Internet Advantage<div class="promoApplyOuter"><a href="<?php echo $this->_tpl_vars['apply_link']; ?>
" class="promoApplyLink"><div class="promoApplyInner">apply<br/>now</div></a></div></div>
						</td>
					</tr>
					<tr valign="top"><!-- promo table r 2 -->
						<td height="7" class="promoBullet"><img src="http://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="7"></td>
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
						<td height="15" class="resultsBoxFooter promoHeaderFooter"><img src="http://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="15"></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td height="10"><img src="http://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="10"></td>
		</tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['info_pages']): ?>
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
									<td class="large"><?php echo $this->_tpl_vars['info_pages']; ?>
</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr><!-- store info table r 3 -->
						<td height="10" class="infoBoxFooter"><img src="http://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="10"></td>
					</tr>
				</table><!-- end store info table -->
			</td>
		</tr>
		<tr>
			<td height="10"><img src="http://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="10"></td>
		</tr>
	<?php endif; ?>
		<tr><!-- right side table r 3 -->
			<td align="center">
				<table width="185" cellpadding="0" cellspacing="0" border="0"><!-- tools table -->
					<tr><!-- tools table r 1 -->
						<td height="23" class="infoBoxHeader">Tools</td>
					</tr>
					<tr><!-- tools table r 1 -->
						<td class="infoBoxContent">
							<table cellpadding="2" border="0">
								<?php if (! $this->_tpl_vars['is_guest']): ?>
									<tr valign="middle">
										<td width="23" align="center"><a href="<?php echo $this->_tpl_vars['quick_order_link']; ?>
" class="tools"><img src="http://www.kanaronline.com/img/site/interface/tools_quick_order_but.gif" border="0"></a></td>
										<td><a href="<?php echo $this->_tpl_vars['quick_order_link']; ?>
" class="tools">Quick Order Composer</a></td>
									</tr>
									<tr valign="middle">
										<td width="23" align="center"><a href="<?php echo $this->_tpl_vars['saved_orders_link']; ?>
"><img src="http://www.kanaronline.com/img/site/interface/tools_view_saved_but.gif" border="0"></a></td>
										<td><a href="<?php echo $this->_tpl_vars['saved_orders_link']; ?>
" class="tools">View Saved Orders</a></td>
									</tr>
									<tr valign="middle">
										<td width="23" align="center"><a href="<?php echo $this->_tpl_vars['active_orders_link']; ?>
"><img src="http://www.kanaronline.com/img/site/interface/tools_track_active_but.gif" border="0"></a></td>
										<td><a href="<?php echo $this->_tpl_vars['active_orders_link']; ?>
" class="tools">Track Active Orders</a></td>
									</tr>
									<tr valign="middle">
										<td width="23" align="center"><a href="<?php echo $this->_tpl_vars['advanced_item_search_link']; ?>
" class="tools"><img src="http://www.kanaronline.com/img/site/interface/tools_search_but.gif" border="0"></a></td>
										<td><a href="<?php echo $this->_tpl_vars['advanced_item_search_link']; ?>
" class="tools">Advanced Item Search</a></td>
									</tr>
								<?php else: ?>
									<tr valign="middle">
										<td width="23" align="center"><a<?php echo $this->_tpl_vars['guest_alert']; ?>
><img src="http://www.kanaronline.com/img/site/interface/tools_quick_order_but.gif" border="0"></a></td>
										<td><a<?php echo $this->_tpl_vars['guest_alert']; ?>
 class="tools">Quick Order Composer</a></td>
									</tr>
									<tr valign="middle">
										<td width="23" align="center"><a<?php echo $this->_tpl_vars['guest_alert']; ?>
><img src="http://www.kanaronline.com/img/site/interface/tools_view_saved_but.gif" border="0"></a></td>
										<td><a<?php echo $this->_tpl_vars['guest_alert']; ?>
 class="tools">View Saved Orders</a></td>
									</tr>
									<tr valign="middle">
										<td width="23" align="center"><a<?php echo $this->_tpl_vars['guest_alert']; ?>
><img src="http://www.kanaronline.com/img/site/interface/tools_track_active_but.gif" border="0"></a></td>
										<td><a<?php echo $this->_tpl_vars['guest_alert']; ?>
 class="tools">Track Active Orders</a></td>
									</tr>
									<!--tr valign="middle">
										<td width="23" align="center"><a<?php echo $this->_tpl_vars['guest_alert']; ?>
><img src="http://www.kanaronline.com/img/site/interface/tools_batch_import_but.gif" border="0"></a></td>
										<td><a<?php echo $this->_tpl_vars['guest_alert']; ?>
 class="tools"><?php echo $this->_tpl_vars['SITE_NAME']; ?>
 InfoSync</a></td>
									</tr-->
									<tr valign="middle">
										<td width="23" align="center"><a href="<?php echo $this->_tpl_vars['advanced_item_search_link']; ?>
" class="tools"><img src="http://www.kanaronline.com/img/site/interface/tools_search_but.gif" border="0"></a></td>
										<td><a href="<?php echo $this->_tpl_vars['advanced_item_search_link']; ?>
" class="tools">Advanced Item Search</a></td>
									</tr>
								<?php endif; ?>
							</table>
						</td>
					</tr>
					<tr><!-- tools table r 1 -->
						<td height="10" class="infoBoxFooter"><img src="http://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="10"></td>
					</tr>
				</table><!-- end tools table -->
			</td>
		</tr>
		<tr>
			<td height="10"><img src="http://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="10"></td>
		</tr>
	<?php if ($this->_tpl_vars['enable_translate']): ?>
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
									<td><a href="javascript:translate('es');"><img src="http://www.kanaronline.com/img/site/misc/languages/spanish.jpg" alt="Spanish"> Spanish</a></td>
								</tr>
								<tr valign="middle">
									<td><a href="javascript:translate('pt');"><img src="http://www.kanaronline.com/img/site/misc/languages/portuguese.jpg" alt="Portuguese"> Portuguese</a></td>
								</tr>
								<tr valign="middle">
									<td><a href="javascript:translate('de');"><img src="http://www.kanaronline.com/img/site/misc/languages/german.jpg" alt="German"> German</a></td>
								</tr>
								<tr valign="middle">
									<td><a href="javascript:translate('fr');"><img src="http://www.kanaronline.com/img/site/misc/languages/french.jpg" alt="French"> French</a></td>
								</tr>
								<tr valign="middle">
									<td><a href="javascript:translate('it');"><img src="http://www.kanaronline.com/img/site/misc/languages/italian.jpg" alt="Italian"> Italian</a></td>
								</tr>
								<tr valign="middle">
									<td><a href="javascript:translate('zh-CHS');"><img src="http://www.kanaronline.com/img/site/misc/languages/chinese.jpg" alt="Chinese"> Chinese (Simplified)</a></td>
								</tr>
								<tr valign="middle">
									<td><a href="javascript:translate('ja');"><img src="http://www.kanaronline.com/img/site/misc/languages/japanese.jpg" alt="Japanese"> Japanese</a></td>
								</tr>
								<tr valign="middle">
									<td><a href="javascript:translate('ko');"><img src="http://www.kanaronline.com/img/site/misc/languages/korean.jpg" alt="Korean"> Korean</a></td>
								</tr>
								<tr valign="middle">
									<td align="center"><select class="searchSelect" onChange="translate(this.options[this.selectedIndex].value);"><option value="" selected>Other Languages...</option><option value="ar">Arabic</option><option value="bg">Bulgarian</option><option value="ca">Catalan</option><option value="zh-CHT">Chinese (Traditional)</option><option value="cs">Czech</option><option value="da">Danish</option><option value="nl">Dutch</option><option value="et">Estonian</option><option value="fi">Finnish</option><option value="el">Greek</option><option value="ht">Haitian Creole</option><option value="he">Hebrew</option><option value="hi">Hindi</option><option value="hu">Hungarian</option><option value="id">Indonesian</option><option value="lv">Latvian</option><option value="lt">Lithuanian</option><option value="no">Norwegian</option><option value="pl">Polish</option><option value="ro">Romanian</option><option value="ru">Russian</option><option value="sk">Slovak</option><option value="sl">Slovenian</option><option value="sv">Swedish</option><option value="th">Thai</option><option value="tr">Turkish</option><option value="uk">Ukrainian</option><option value="vi">Vietnamese</option></select></td>
								</tr>
								<tr valign="middle">
									<td><a href="javascript:revertLanguage();" style="font-weight: bold;"><img src="http://www.kanaronline.com/img/site/misc/languages/english.jpg" alt="English"> Reset to English</a></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr><!-- languages table r 1 -->
						<td height="10" class="infoBoxFooter"><img src="http://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="10"></td>
					</tr>
				</table><!-- end languages table -->
			</td>
		</tr>
		<tr>
			<td height="10"><img src="http://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="10"></td>
		</tr>
	<?php endif; ?>
		<tr>
			<td align="center"><img src="http://www.kanaronline.com/img/site/misc/promo_promise_improvement.gif" border="0"></td>
		</tr>

</table>
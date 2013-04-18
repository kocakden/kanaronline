<?php /* Smarty version 2.6.3, created on 2013-04-17 12:50:58
         compiled from incStoreRightSide.tpl */ ?>
<script type="text/javascript">
var quick_order = new Image();
quick_order.src = "https://www.kanaronline.com/img/site/interface/tool_quick_order.gif";

var quick_order_on = new Image();
quick_order_on.src = "https://www.kanaronline.com/img/site/interface/tool_quick_order_on.gif";

var saved_orders = new Image();
saved_orders.src = "https://www.kanaronline.com/img/site/interface/tool_saved_orders.gif";

var saved_orders_on = new Image();
saved_orders_on.src = "https://www.kanaronline.com/img/site/interface/tool_saved_orders_on.gif";

var active_orders = new Image();
active_orders.src = "https://www.kanaronline.com/img/site/interface/tool_active_orders.gif";

var active_orders_on = new Image();
active_orders_on.src = "https://www.kanaronline.com/img/site/interface/tool_active_orders_on.gif";

//var infosync = new Image();
//infosync.src = "https://www.kanaronline.com/img/site/interface/tool_infosync.gif";

//var infosync_on = new Image();
//infosync_on.src = "https://www.kanaronline.com/img/site/interface/tool_infosync_on.gif";

var advanced_search = new Image();
advanced_search.src = "https://www.kanaronline.com/img/site/interface/tool_advanced_search.gif";

var advanced_search_on = new Image();
advanced_search_on.src = "https://www.kanaronline.com/img/site/interface/tool_advanced_search_on.gif";

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
<table width="197" cellpadding="0" cellspacing="0" border="0"><!-- right side table -->
	<tr><!-- right side table r 1 -->
		<td align="center">
			<table width="185" cellpadding="0" cellspacing="0" border="0"><!-- your account table -->
				<tr><!-- your account table r 1 -->
					<td height="23" class="infoBoxHeader">Your Account</td>
				</tr>
				<tr><!-- your account table r 1 -->
					<td class="infoBoxContent">
						<table cellpadding="2" border="0" width="167">
							<tr>
								<td>
									<span class="yourAccountStore"><?php echo $this->_tpl_vars['store_name']; ?>
</span><br/>
									Account: <?php echo $this->_tpl_vars['store_account_number']; ?>
<br>
									<?php if ($this->_tpl_vars['buyer_account']): ?>
										Buyer: <?php echo $this->_tpl_vars['buyer_account']; ?>

									<?php endif; ?>
								</td>
							</tr>
							<?php if ($this->_tpl_vars['short_order_display']): ?>
							<tr>
								<td align="center" width="100%">
									<table cellpadding="0" cellspacing="0" border="0" width="100%">
										<tr>
											<td height="8" class="resultsBoxHeader"><img src="https://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="8"></td>
										</tr>
										<tr>
											<td class="resultsBoxContent">
												<table cellspacing="0" cellpadding="0" border="0" width="100%">
													<tr>
														<td width="100%" valign="top"><?php echo $this->_tpl_vars['short_order_display']; ?>
</td>
													</tr>
													<tr>
														<td width="100%" align="center" valign="top"><a href="<?php echo $this->_tpl_vars['order_checkout_link']; ?>
"><img src="https://www.kanaronline.com/img/site/interface/order_box_complete_order.gif" border="0"></a></td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td height="8" class="resultsBoxFooter"><img src="https://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="8"></td>
										</tr>
									</table>
								</td>
							</tr>
							<?php endif; ?>
						</table>
					</td>
				</tr>
				<tr><!-- your account table r 1 -->
					<td height="10" class="infoBoxFooter"><img src="https://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="10"></td>
				</tr>
			</table><!-- end your account table -->
		</td>
	</tr>
	<tr>
		<td height="10"><img src="https://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="10"></td>
	</tr>
	<tr>
		<td align="center"><img src="https://www.kanaronline.com/img/site/misc/promo_promise_improvement.gif" border="0"></td>
	</tr>
</table><!-- end right side table -->
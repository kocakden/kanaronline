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
									<span class="yourAccountStore">{$store_name}</span><br/>
									Account: {$store_account_number}<br>
									{if $buyer_account}
										Buyer: {$buyer_account}
									{/if}
								</td>
							</tr>
							{if $short_order_display}
							<tr>
								<td align="center" width="100%">
									<table cellpadding="0" cellspacing="0" border="0" width="100%">
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
	<tr>
		<td align="center"><img src="site/misc/promo_promise_improvement.gif" border="0"></td>
	</tr>
</table><!-- end right side table -->
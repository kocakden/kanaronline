<td>
	<table width="170" cellpadding="0" cellspacing="0" border="0" style="margin-left:-2px;"><!-- left side table -->
		<tr>
			<td align="center">
				<table width="170" cellpadding="0" cellspacing="0" border="0"><!-- browse depts table -->
					<tr><!-- browse depts table r 1 -->
						<td height="23" class="infoBoxHeader navBoxHeader">Manage Account</td>
					</tr>
					<tr><!-- browse depts table r 2 -->
						<td class="infoBoxContent navBoxContent">
							<table cellpadding="1" border="0">
								<tr>
									<td><a class="listDepartmentLink" href="{$active_orders_link}">Active Orders</a></td>
								</tr>
								{if !$buyer}
									<tr>
										<td><a class="listDepartmentLink" href="{$account_statement_link}">Account Statement</a></td>
									</tr>
									{*<tr>
										<td><a class="listDepartmentLink" href="{$counter_catalog_link}">Counter Catalog</a></td>
									</tr>*}
									{*<tr>
										<td><a class="listDepartmentLink" href="{$showcase_link}">Showcase Store</a></td>
									</tr>*}
									<tr>
										<td>&nbsp;</td>
									</tr>
									{if $is_export}
									<tr>
										<td><a class="listDepartmentLink" href="{$customers_link}">Customers</a></td>
									</tr>
									{/if}
									<tr>
										<td><a class="listDepartmentLink" href="{$credit_cards_link}">Credit Cards</a></td>
									</tr>
									<tr>
										<td><a class="listDepartmentLink" href="{$buyers_link}">Buyers</a></td>
									</tr>
									<tr>
										<td>&nbsp;</td>
									</tr>
								{/if}
								<tr>
									<td><a class="listDepartmentLink" href="{$preferences_link}">Preferences</a></td>
								</tr>
								<tr>
									<td><a class="listDepartmentLink" href="{$change_password_link}">Change Password</a></td>
								</tr>
								{if !$buyer}
									<tr>
										<td><a class="listDepartmentLink" href="{$company_info_link}">Company Info</a></td>
									</tr>
									<tr>
										<td><a class="listDepartmentLink" href="{$contacts_link}">Contacts</a></td>
									</tr>
									<tr>
										<td><a class="listDepartmentLink" href="{$locations_link}">Locations</a></td>
									</tr>
									{if $is_export && $payment_method == "CC"}
										<tr>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td><a class="listDepartmentLink" href="{$credit_application_link}">Credit Application</a></td>
										</tr>
									{/if}
								{/if}
							</table>
						</td>
					</tr>
					<tr><!-- browse depts table r 3 -->
						<td height="10" class="infoBoxFooter navBoxFooter"><img src="site/interface/clear_spacer.gif" height="10"></td>
					</tr>
				</table><!-- end browse depts table -->
			</td>
		</tr>
		{include file='logos.tpl'}
	</table><!-- end left side table -->
<?php /* Smarty version 2.6.3, created on 2013-04-17 12:50:58
         compiled from incStoreLeftSide.tpl */ ?>
<td>
	<table width="170" cellpadding="0" cellspacing="0" border="0"><!-- left side table -->
		<tr>
			<td align="center">
				<table width="158" cellpadding="0" cellspacing="0" border="0"><!-- browse depts table -->
					<tr><!-- browse depts table r 1 -->
						<td height="23" class="infoBoxHeader navBoxHeader">Manage Account</td>
					</tr>
					<tr><!-- browse depts table r 2 -->
						<td class="infoBoxContent navBoxContent">
							<table cellpadding="1" border="0">
								<tr>
									<td><a class="listDepartmentLink" href="<?php echo $this->_tpl_vars['active_orders_link']; ?>
">Active Orders</a></td>
								</tr>
								<?php if (! $this->_tpl_vars['buyer']): ?>
									<tr>
										<td><a class="listDepartmentLink" href="<?php echo $this->_tpl_vars['account_statement_link']; ?>
">Account Statement</a></td>
									</tr>
																											<tr>
										<td>&nbsp;</td>
									</tr>
									<?php if ($this->_tpl_vars['is_export']): ?>
									<tr>
										<td><a class="listDepartmentLink" href="<?php echo $this->_tpl_vars['customers_link']; ?>
">Customers</a></td>
									</tr>
									<?php endif; ?>
									<tr>
										<td><a class="listDepartmentLink" href="<?php echo $this->_tpl_vars['credit_cards_link']; ?>
">Credit Cards</a></td>
									</tr>
									<tr>
										<td><a class="listDepartmentLink" href="<?php echo $this->_tpl_vars['buyers_link']; ?>
">Buyers</a></td>
									</tr>
									<tr>
										<td>&nbsp;</td>
									</tr>
								<?php endif; ?>
								<tr>
									<td><a class="listDepartmentLink" href="<?php echo $this->_tpl_vars['preferences_link']; ?>
">Preferences</a></td>
								</tr>
								<tr>
									<td><a class="listDepartmentLink" href="<?php echo $this->_tpl_vars['change_password_link']; ?>
">Change Password</a></td>
								</tr>
								<?php if (! $this->_tpl_vars['buyer']): ?>
									<tr>
										<td><a class="listDepartmentLink" href="<?php echo $this->_tpl_vars['company_info_link']; ?>
">Company Info</a></td>
									</tr>
									<tr>
										<td><a class="listDepartmentLink" href="<?php echo $this->_tpl_vars['contacts_link']; ?>
">Contacts</a></td>
									</tr>
									<tr>
										<td><a class="listDepartmentLink" href="<?php echo $this->_tpl_vars['locations_link']; ?>
">Locations</a></td>
									</tr>
									<?php if ($this->_tpl_vars['is_export'] && $this->_tpl_vars['payment_method'] == 'CC'): ?>
										<tr>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td><a class="listDepartmentLink" href="<?php echo $this->_tpl_vars['credit_application_link']; ?>
">Credit Application</a></td>
										</tr>
									<?php endif; ?>
								<?php endif; ?>
							</table>
						</td>
					</tr>
					<tr><!-- browse depts table r 3 -->
						<td height="10" class="infoBoxFooter navBoxFooter"><img src="https://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="10"></td>
					</tr>
				</table><!-- end browse depts table -->
			</td>
		</tr>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'logos.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</table><!-- end left side table -->
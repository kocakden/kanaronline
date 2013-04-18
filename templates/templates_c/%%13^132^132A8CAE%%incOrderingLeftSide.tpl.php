<?php /* Smarty version 2.6.3, created on 2013-04-18 12:45:53
         compiled from incOrderingLeftSide.tpl */ ?>
				<td width="170">
					<table width="170" cellpadding="0" cellspacing="0" border="0"><!-- left side table -->
						<?php if ($this->_tpl_vars['selected_classID'] || $this->_tpl_vars['selected_inventoryID']): ?>
						<tr>
							<td align="center">
								<table width="158" cellpadding="0" cellspacing="0" border="0"><!-- browse depts table -->
									<tr><!-- browse categories table r 1 -->
										<td height="23" class="infoBoxHeader navBoxHeader">Browse Categories</td>
									</tr>
									<tr><!-- browse categories table r 2 -->
										<td class="infoBoxContent navBoxContent">
											<table cellpadding="0" border="0" width="*">
												<tr>
													<td height="5"><img src="http://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="5"></td>
												</tr>
												<!--tr>
													<td align="center"><img src="http://www.kanaronline.com/img/site/interface/add_to_favs_label.gif"></td>
												</tr-->
												<tr>
													<td>
														<?php if (count($_from = (array)$this->_tpl_vars['catalog_hierarchy'])):
    foreach ($_from as $this->_tpl_vars['department']):
?>
															<?php if ($this->_tpl_vars['department']['classID'] == $this->_tpl_vars['selected_departmentID']): ?>
																<?php if (count($_from = (array)$this->_tpl_vars['department']['children'])):
    foreach ($_from as $this->_tpl_vars['parent']):
?>
																	<table width="140" border="0" cellspacing="0" cellpadding="0">
																		<tr>
																			<td class="listHeadline">
																				<img src="http://www.kanaronline.com/img/site/interface/ftv2pnode.gif" id="tgl_img_<?php echo $this->_tpl_vars['parent']['classID']; ?>
"/><a href="javascript:toggleChildren(<?php echo $this->_tpl_vars['parent']['classID']; ?>
);" class="listHeadlineLink"><?php echo $this->_tpl_vars['parent']['name']; ?>
</a>
																			</td>
																		</tr>
																		<tr>
																			<td height="1"><img height="1" width="140" src="http://www.kanaronline.com/img/site/interface/headline_divider.gif"/></td>
																		</tr>
																		<tr>
																			<td class="listCatalog">
																				<?php if ($this->_tpl_vars['parent']['classID'] == $this->_tpl_vars['selected_parentID']): ?>
																					<div style="padding-left: 15px;" id="children_<?php echo $this->_tpl_vars['parent']['classID']; ?>
">
																				<?php else: ?>
																					<div style="display: none; padding-left: 15px;" id="children_<?php echo $this->_tpl_vars['parent']['classID']; ?>
">
																				<?php endif; ?>
																					<?php if (count($_from = (array)$this->_tpl_vars['parent']['children'])):
    foreach ($_from as $this->_tpl_vars['class']):
?>
																						<?php if ($this->_tpl_vars['class']['classID'] == $this->_tpl_vars['selected_classID']): ?>
																							&#149;&nbsp;<a href="<?php echo $this->_tpl_vars['catalog_link'];  echo $this->_tpl_vars['class']['classID']; ?>
" class="listCatalogLink" style="color: black;"><?php echo $this->_tpl_vars['class']['name']; ?>
</a><br/>
																						<?php else: ?>
																							&#149;&nbsp;<a href="<?php echo $this->_tpl_vars['catalog_link'];  echo $this->_tpl_vars['class']['classID']; ?>
" class="listCatalogLink"><?php echo $this->_tpl_vars['class']['name']; ?>
</a><br/>
																						<?php endif; ?>
																					<?php endforeach; unset($_from); endif; ?>
																				</div>
																			</td>
																		</tr>
																	</table>
																<?php endforeach; unset($_from); endif; ?>
															<?php endif; ?>
														<?php endforeach; unset($_from); endif; ?>
														<?php if ($this->_tpl_vars['selected_parentID']): ?>
															<script type="text/javascript">
																updateNodeImgs(<?php echo $this->_tpl_vars['selected_parentID']; ?>
);
															</script>
														<?php endif; ?>
													</td>
												</tr>
												<tr>
													<td height="10"><img src="http://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="10"></td>
												</tr>
												<tr>
													<td align="center"><a href="<?php echo $this->_tpl_vars['advanced_search_link']; ?>
" class="advancedSearch">Advanced Item Search</a></td>
												</tr>
											</table>
										</td>
									</tr>
									<tr><!-- browse categories table r 3 -->
										<td height="10" class="infoBoxFooter navBoxFooter"><img src="http://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="10"></td>
									</tr>
								</table><!-- end browse categories table -->
							</td>
						</tr>
						<tr>
							<td height="10"><img src="http://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="10"></td>
						</tr>
						<?php endif; ?>
						<tr>
							<td align="center">
								<table width="158" cellpadding="0" cellspacing="0" border="0"><!-- browse depts table -->
									<tr><!-- browse depts table r 1 -->
										<td height="23" class="infoBoxHeader navBoxHeader">Browse Departments</td>
									</tr>
									<tr><!-- browse depts table r 2 -->
										<td class="infoBoxContent navBoxContent">
											<table cellpadding="1" border="0">
												<?php if (count($_from = (array)$this->_tpl_vars['catalog_hierarchy'])):
    foreach ($_from as $this->_tpl_vars['department']):
?>
													<tr>
														<td class="listDepartment">
															<a href="<?php echo $this->_tpl_vars['department_link'];  echo $this->_tpl_vars['department']['classID']; ?>
" class="listDepartmentLink"><?php echo $this->_tpl_vars['department']['name']; ?>
</a>
														</td>
													</tr>
												<?php endforeach; unset($_from); endif; ?>
											</table>
										</td>
									</tr>
									<tr><!-- browse depts table r 3 -->
										<td height="10" class="infoBoxFooter navBoxFooter"><img src="http://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="10"></td>
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
				</td>
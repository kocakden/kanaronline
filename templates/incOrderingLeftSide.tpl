				<td width="170">
					<table width="170" cellpadding="0" cellspacing="0" border="0"><!-- left side table -->
						{if $selected_classID || $selected_inventoryID}
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
													<td height="5"><img src="site/interface/clear_spacer.gif" height="5"></td>
												</tr>
												<!--tr>
													<td align="center"><img src="site/interface/add_to_favs_label.gif"></td>
												</tr-->
												<tr>
													<td>
														{foreach item=department from=$catalog_hierarchy}
															{if $department.classID == $selected_departmentID}
																{foreach item=parent from=$department.children}
																	<table width="140" border="0" cellspacing="0" cellpadding="0">
																		<tr>
																			<td class="listHeadline">
																				<img src="site/interface/ftv2pnode.gif" id="tgl_img_{$parent.classID}"/><a href="javascript:toggleChildren({$parent.classID});" class="listHeadlineLink">{$parent.name}</a>
																			</td>
																		</tr>
																		<tr>
																			<td height="1"><img height="1" width="140" src="/img/site/interface/headline_divider.gif"/></td>
																		</tr>
																		<tr>
																			<td class="listCatalog">
																				{if $parent.classID == $selected_parentID}
																					<div style="padding-left: 15px;" id="children_{$parent.classID}">
																				{else}
																					<div style="display: none; padding-left: 15px;" id="children_{$parent.classID}">
																				{/if}
																					{foreach item=class from=$parent.children}
																						{if $class.classID == $selected_classID}
																							&#149;&nbsp;<a href="{$catalog_link}{$class.classID}" class="listCatalogLink" style="color: black;">{$class.name}</a><br/>
																						{else}
																							&#149;&nbsp;<a href="{$catalog_link}{$class.classID}" class="listCatalogLink">{$class.name}</a><br/>
																						{/if}
																					{/foreach}
																				</div>
																			</td>
																		</tr>
																	</table>
																{/foreach}
															{/if}
														{/foreach}
														{if $selected_parentID}
															<script type="text/javascript">
																updateNodeImgs({$selected_parentID});
															</script>
														{/if}
													</td>
												</tr>
												<tr>
													<td height="10"><img src="site/interface/clear_spacer.gif" height="10"></td>
												</tr>
												<tr>
													<td align="center"><a href="{$advanced_search_link}" class="advancedSearch">Advanced Item Search</a></td>
												</tr>
											</table>
										</td>
									</tr>
									<tr><!-- browse categories table r 3 -->
										<td height="10" class="infoBoxFooter navBoxFooter"><img src="site/interface/clear_spacer.gif" height="10"></td>
									</tr>
								</table><!-- end browse categories table -->
							</td>
						</tr>
						<tr>
							<td height="10"><img src="site/interface/clear_spacer.gif" height="10"></td>
						</tr>
						{/if}
						<tr>
							<td align="center">
								<table width="158" cellpadding="0" cellspacing="0" border="0"><!-- browse depts table -->
									<tr><!-- browse depts table r 1 -->
										<td height="23" class="infoBoxHeader navBoxHeader">Browse Departments</td>
									</tr>
									<tr><!-- browse depts table r 2 -->
										<td class="infoBoxContent navBoxContent">
											<table cellpadding="1" border="0">
												{foreach item=department from=$catalog_hierarchy}
													<tr>
														<td class="listDepartment">
															<a href="{$department_link}{$department.classID}" class="listDepartmentLink">{$department.name}</a>
														</td>
													</tr>
												{/foreach}
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
				</td>
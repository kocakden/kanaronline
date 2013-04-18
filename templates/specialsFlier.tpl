<html>
<head>
<title>{$SITE_NAME} Deals {$specials_valid_thru}</title>
{literal}
<style type="text/css">
body
{
	font-family:arial,helvetica,verdana,sans-serif;
}

td 
{
	font-size:8.5pt;
}

a.link
{
	color:#66759C;
	text-decoration:underline;
}

a.link:hover
{
	color:#000000;
	text-decoration:underline;
}

td.copyrt
{
	font-size:8pt;
	color:#555555;
	padding:8px;
}

td.leftDivider
{
	border-left:1pt solid #CCCCCC;
}

td.leftTopDivider
{
	border-left:1pt solid #CCCCCC;
	border-top:1pt solid #CCCCCC;
}

td.topDivider
{
	border-top:1pt solid #CCCCCC;
}


a.lineItem
{
	color:#546591;
	font-size:8pt;
	text-decoration:underline;
}

a.lineItem:hover
{
	color:#000000;
	font-size:8pt;
	text-decoration:underline;
}

.brand
{
	font-size:9pt;
	font-weight:bold;
	color:#000000;
	text-decoration:none;
}

.tag
{
	font-size:9pt;
	font-weight:bold;
	/*color:#C8D96B;*/
	color:#B3C459;
	font-style:italic;
}

.list
{
	color:#333333;
	font-size:8pt;
}

.model
{
	color:#696969;
}

a.unsubscribe
{
	font-size:8pt;
	color:#555555;
	text-decoration:none;
}

a.unsubscribe:hover
{
	color:#000000;
	text-decoration:underline;
}

td.botBorder
{
	background:#66759C;
	color:#FFFFFF;
	font-weight:bold;
	font-size:9pt;
}

td.promoBar
{
	background:#FFFFFF;
	color:#000000;
	font-weight:bold;
	font-size:10pt;
	border-bottom:1pt solid #CCCCCC;
}

td.promo
{
	color:#000000;
	font-weight:bold;
	font-size:10pt;
}

td.footerPromo
{
	color:#66759C;
	font-weight:bold;
	font-size:10pt;
	padding:6px;
	border-top:1pt solid #CCCCCC;
}

</style>
{/literal}
</head>
	<body bgcolor="white">
		<center>
		<table cellpadding="0" cellspacing="0" border="0" style="width: 800px;">
			<tr>
				<td align="center" colspan="3"><img src="/img/site/interface/confidential_wholesale.gif"></td>
			</tr>
			<tr height="4">
				<td align="center" colspan="3"><img src="/img/site/interface/clear_spacer.gif" height="4"></td>
			</tr>
			<tr valign="middle">
				<td colspan="3">
					<table cellpadding="0" cellspacing="0" border="0">
						<tr valign="middle">
							<td><img src="/img/site/interface/logo.png" border="0"></td>
							<td width="100%" align="right"><a href="{$SITE_URL}?{$qs}"><img src="/img/email/em_want_more.gif" border="0"></a></td>
						</tr>
					</table>
				</td>
			</tr>
			{if $header_content}
			<tr>
				<td colspan="3">{$header_content}</td>
			</tr>
			{/if}
			<tr height="13">
				<td width="11"><img src="/img/email/em_top_left.gif"></td>
				<td width="*" align="left" bgcolor="#66759C">
					<table cellpadding="0" cellspacing="0" border="0" width="100%">
						<tr valign="middle">
							<td align="left"><img src="/img/email/em_top.gif"></td>
							<td align="left"><img src="/email/spfl/{$id}/img/date.jpg"></td>
							<td align="right" width="100%"><img src="/img/email/em_1800.gif" border="0"></td>
						</tr>
					</table>
				</td>
				<td width="11"><img src="/img/email/em_top_right.gif"></td>
			</tr>
			{if (!$registered)}
			<tr>
				<td width="11" height="100%" background="/img/email/em_left_bg.gif"></td>
				<td class="promoBar" align="center">
					<table cellpadding="6" cellspacing="8" border="0">
						<tr valign="middle">
							<td class="promo">Become a Dealer!&nbsp;&nbsp;<a href="{$LINK_APPLY}apply.php?v=1" class="link">Click Here to Apply Now!</a></td>
						</tr>
					</table>
				</td>
				<td width="11" height="100%" background="/img/email/em_right_bg.gif"></td>
			</tr>
			{/if}
			<tr>
				<td width="11" height="100%" background="/img/email/em_left_bg.gif">&nbsp;</td>
				<td width="*" align="center">{$features}</td>
				<td width="11" height="100%" background="/img/email/em_right_bg.gif"></td>
			</tr>
			<tr>
				<td width="11" height="29"><img src="/img/email/em_bot_left.gif"></td>
				<td width="*" height="29" bgcolor="#66759C">
					<table cellpadding="0" cellspacing="0" border="0" width="100%">
						<tr>
							<td align="left" class="botBorder" width="33%">{$SITE_NICE_URL}</td>
							<td align="center" width="33%"><img src="/img/email/em_tag_line.gif"></td>
							<td align="right" class="botBorder" width="33%">{$SITE_TOLL_FREE}</td>
						</tr>
					</table>	
				</td>
				<td width="11" height="29"><img src="/img/email/em_bot_right.gif"></td>
			</tr>
			{if $footer_content}
			<tr>
				<td colspan="3">{$footer_content}</td>
			</tr>
			{/if}
			<tr>
				<td colspan="3" align="center">
					<table cellpadding="0" cellspacing="0" border="0" width="100%">
						<tr valign="top">
							<td align="center" colspan="3" class="copyrt">Proud Members Of</td>
							<td align="right" class="copyrt" rowspan="2" nowrap>
								{if (!$registered)}
								<a href="{$SITE_URL}email/remove.php" class="unsubscribe">Unsubscribe</a>&nbsp;&nbsp;|&nbsp;&nbsp;
								{/if}
								&copy;2002-{$current_year}&nbsp;<a href="http://www.cutting-edgesolutions.com/" target="_blank">Cutting-Edge Solutions</a>&nbsp;&nbsp;
								{if ($dateExpire)}
									<br><br><i>Prices not guaranteed after {$dateExpire}.</i>
								{/if}
								<br><br><i>For dealers and insitutions only. {$SITE_NAME} does not sell to individual consumers.</i>
							</td>
						</tr>
						<tr valign="top">
							<td align="center"><img src="/img/site/misc/namm_logo.gif"></td>
							<td width="20">&nbsp;</td>
							<td align="center"><img src="/img/site/misc/mda_logo.gif"></td> 
						</tr>
					</table>
				</td>
			</tr>
		</table>
		</center>
		<img src="{$SITE_URL}email/tally.php?mbID={$id}" border="0" width="0" height="0">
	</body>
</html>
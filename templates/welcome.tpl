<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>Welcome to {$SITE_NAME}</title>
	<script type="text/javascript" src="http://www.musicpayhost.com:8080/jquery/jquery-1.5.2.min.js"></script>
	<script type="text/javascript" src="http://www.musicpayhost.com:8080/jquery/jquery.cookie.min.js"></script>
{if $enable_translate}
	<script type="text/javascript" src="http://www.musicpayhost.com:8080/jquery/jquery.translate-1.4.7a.min.js"></script>
	<script type="text/javascript" src="/includes/js/incTranslate.js"></script>
	<script type="text/javascript">
	translateOnBodyReady('{$TRANSLATOR_API_KEY}');
	</script>
{/if}
</head>
<body bgcolor="white" pagemargin="0" leftmargin="0" rightmargin="0" topmargin="0" bottommargin="0" onLoad="setCursor();" onLoad="preloadImages();">
		<table width="100%" cellspacing="10" cellpadding="0" border="0" align="center" bgcolor="#ffffff">		
			<tr>
				<td colspan="3" align="center">
					<table width="100%" height="59" cellspacing="0" cellpadding="0" border="0">
						<tr>
							<td colspan="2" align="center"><img src="/img/site/interface/confidential_wholesale.gif"></td>
						</tr>	
						<tr>
							<td rowspan="2"><img src="/img/site/interface/logo.png" border="0"></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3">&nbsp;</td>
			</tr>
			<tr valign="top">
				<td class="msg">
					<span class="welcome">Welcome to the {$STORE_NAME_PLUG}!</span>
					<br>
					<br>
					Thank you for taking the time to visit <b>{$SITE_NAME} Online</b>. We are extremely excited about the new opportunities we'll be able to offer you by doing business online together.
					<br>
					<br>
					Our entire staff has been working very hard to develop this <b>best-in-industry</b> site, which includes many features you will not find anywhere else.
					<br>
					<br>					
					First and foremost, we're proud to be offering our &quot;<b>New {$STORE_NAME_PLUG} eCommerce Website Solution</b>.&quot; It's preloaded with over 3500 products and has every feature that a professional, world-class website should have -- all at a low monthly cost!
					<br>
					<br>
					<b>Click on &quot;Get a Profitable Website&quot; for more information</b>.
					<br>
					<br>
					<span class="welcome">What would you like to do?</span>
					<br>
					<br>
					<center>
					<table cellpadding="0" cellspacing="10" border="0">
						<tr>
							<td><a href="{$tour_link}" onMouseOver="turnImageOn('tour');" onMouseOut="turnImageOff('tour');"><img name="tour" src="/img/site/interface/welcome_tour_off.gif" border="0"></a></td>
							<td><a href="{$apply_link}" onMouseOver="turnImageOn('apply');" onMouseOut="turnImageOff('apply');"><img name="apply" src="/img/site/interface/welcome_apply_off.gif" border="0"></a></td>
							<!--td><a href="#" onClick="showCC();" onMouseOver="turnImageOn('cc');" onMouseOut="turnImageOff('cc');"><img name="cc" src="/img/site/interface/welcome_cc_off.gif" border="0"></a></td-->
							<td><a href="#" onClick="showEComm();" onMouseOver="turnImageOn('web');" onMouseOut="turnImageOff('web');"><img name="web" src="/img/site/interface/welcome_web_off.gif" border="0"></a></td>
						</tr>
					</table>
					</center>
					<br>
					<br>					
					If you have an existing account with {$SITE_NAME}, but have not completed our online application, we ask that you please do so in order to activate your {$STORE_NAME_PLUG} account.
					<br>
					<br>
					If you have any questions about the {$STORE_NAME_PLUG}, please feel free to <a href="mailto:{$sales_email}"><b>email</b></a> or call us toll free at <b>{$SITE_TOLL_FREE}</b>.
				</td>
				<td width="1" height="100%" bgcolor="#696969"><img src="/img/site/interface/clear_spacer.gif" width="1" height="100%"></td>
				<td align="center">
										<table width="185" cellpadding="0" cellspacing="0" border="0"><!-- your account table -->
						<tr><!-- login table r 1 -->
							<td height="23" class="infoBoxHeader">Account Login</td>
						</tr>
						<tr><!-- login table r 1 -->
							<td class="infoBoxContent">
								<form method="post" name="login" action="welcome.php?redirect=index.php?">
								<table cellpadding="2" border="0">
									<tr>
										<td colspan="2" height="5"><img src="/img/site/interface/clear_spacer.gif" height="5"></td>
									</tr>
									<tr valign="middle">
										<td class="instruction">User ID</td>
										<td>
											<input type="text" class="loginTextBox" name="userID" size="15" maxlength="8" value="">
										</td>
									</tr>
									<tr valign="middle">
										<td class="instruction">Password</td>
										<td>	
											<input type="password" class="loginTextBox" name="password" size="15" maxlength="16" value="">
										</td>
									</tr>
									<tr valign="middle">
										<td colspan="2" align="center" class="instruction"><input type="checkbox" name="showUserID" value="Y"><a href="#" class="checkBox" onClick="checkUserID();">Check to Save User ID</a></td>
									</tr>
									<tr valign="middle">
										<td colspan="2" align="left"><input type="image" name="login" src="/img/site/interface/login.png" align="right" border="0"></td>
									</tr>
									<tr>
										<td colspan="2" height="5"><img src="/img/site/interface/clear_spacer.gif" height="5"></td>
									</tr>
									<tr valign="middle">
										<td colspan="2" align="center"><a href="{$forgot_link}" class="advancedSearch">Forgot Your Password?</a></td>
									</tr>
									<tr valign="middle">
										<td colspan="2" align="center"><a href="#" class="help" onClick="viewHelp('WELCOME','');">Help</a></td>
									</tr>
									<!--tr>
										<td colspan="2" height="5"><img src="/img/site/interface/clear_spacer.gif" height="5"></td>
									</tr>
									<tr valign="middle">
										<td colspan="2" align="center"><input type="image" name="goToCC" src="/img/site/interface/go_to_counter_catalog_but.gif" border="0"></td>
									</tr-->
								</table>
								</form>
							</td>
						</tr>
						<tr>
							<td height="10" class="infoBoxFooter"><img src="/img/site/interface/clear_spacer.gif" height="10"></td>
						</tr>
					{if $enable_translate}
						<tr>
							<td height="10"><img src="/img/site/interface/clear_spacer.gif" height="10"></td>
						</tr>
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
							<td height="10" class="infoBoxFooter"><img src="/img/site/interface/clear_spacer.gif" height="10"></td>
						</tr>
					{/if}
					</table>
				</td>
			</tr>

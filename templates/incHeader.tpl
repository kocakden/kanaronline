<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

	<title>{$title}</title>

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

<body onLoad="preloadImages();">



	<table width="100%" cellspacing="0" cellpadding="0" border="0">

		<tr>

			<td align="center" colspan="3"><img src="site/interface/confidential_wholesale.gif"></td>

		</tr>

		<tr valign="bottom">

			<td align="left"><a href="/"><img src="site/interface/logo_small.png" alt="Kanar Online Logo"></a></td>
			<td>
				{if !$hide_search}
				<form method="post" action="">
					Search <input type="text" class="searchTextBox" name="searchKeywords" size="15"> by
					{$type_select} in {$department_select}
					<input type="submit" name="navBarSubmitSearch" value="search" />
					<a href="{$search_link}" class="subHeader">[Advanced]</a>
				</form>
				{/if}
			</td>
			<!--
			<td>{$banner}</td>
			-->
		</tr>

		<tr>

			<td colspan="3" height="1" bgcolor="#000000"><img src="site/interface/clear_spacer.gif" height="1"></td>

		</tr>

		<tr>

			<td colspan="3">

			<table cellspacing="3" cellpadding="0" border="0" width="100%" height="35" id="newSearchTable">

					<tr id="newSearch">

						<td  style="padding-left:5px;" align="left" class="topRightNav">

						{if $apply_nav}

							<a href="#" onClick="alert('Please call {$SITE_TOLL_FREE} for help with your application.');">Help</a>

						{else}

							<a href="{$LINK_STORE}">Home</a>

							&#149;

						{if $is_guest}

							<a href="{$apply_link}">Apply</a>

						{else}

							<a href="{$manage_account_link}">Manage Account</a>

						{/if}

							&#149;

							<a href="{$contact_link}">Contact Us</a>

							&#149;

							<a href="javascript: {$help_link}">Help</a>
						</td>
						<td align="right" class="topRightNav" style="padding-right:5px;">
							{if $is_guest}
							<a href="{$logout_link}">Log In</a>
							{else}
							<a href="{$logout_link}">Log Out</a>
							{/if}
						</td>

						{/if}

					</tr>

				</table>

			</td>

		</tr>

		<tr>

			<td colspan="3" height="1" bgcolor="#000000"><img src="site/interface/clear_spacer.gif" height="1"></td>

		</tr>

		<tr>

			<td colspan="3"><img src="site/interface/clear_spacer.gif" height="10"></td>

		</tr>

	</table>
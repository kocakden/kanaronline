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

	<div class="wrapper">
	
	<table id="header" width="100%" cellspacing="0" cellpadding="0" border="0">
		
		<tr style="display:none">

			<td align="center" colspan="3"><img src="site/interface/confidential_wholesale.gif"></td>

		</tr>

		<tr>

			<td align="left"><a href="/"><img width src="site/interface/logo_small.png" alt="Kanar Online Logo"></a></td>

			<td align="right" valign="middle">
				{if !$hide_search}
				<form method="post" action="">
					<input type="text" class="searchTextBox" name="searchKeywords" size="15" placeholder="Search">
					<input type="submit" name="navBarSubmitSearch" class="searchBtn" value="Go" /> 
					<a href="{$search_link}" class="advancedSearchBtn">Advanced</a>
					<!-- By {$type_select} in {$department_select} -->
				</form>
				{/if}				
			</td>
			<!--
			<td>{$banner}</td>
			-->
		</tr>


		<tr>

			<td colspan="3" style="">

			<table cellspacing="3" cellpadding="0" border="0" width="100%" height="35" id="newSearchTable">

					<tr id="newSearch">

						<td  style="padding-left:5px;" align="left" class="topRightNav">

						{if $apply_nav}

							<a href="#" onClick="alert('Please call {$SITE_TOLL_FREE} for help with your application.');">Help</a>

						{else}

							<a href="{$LINK_STORE}">Home</a>

						</td>
						<td align="right" class="topRightNav">
							{if $is_guest}
							<a href="{$apply_link}">Apply</a>

							&#149;

							<a href="{$logout_link}">Log In</a>
							{else}
							<span id="account_info"></span>

							&#149;

							<a href="{$manage_account_link}">Account</a>

							&#149;

							<a href="{$logout_link}">Log Out</a>
							{/if}
						</td>

						{/if}

					</tr>

				</table>

			</td>

		</tr>


		<tr>

			<td colspan="3"><img src="site/interface/clear_spacer.gif" height="30"></td>

		</tr>		

	</table>
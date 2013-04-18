<?php /* Smarty version 2.6.3, created on 2013-04-18 12:35:04
         compiled from welcome.tpl */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://www.kanaronline.com/includes/css/incBASE_CSS.php">
<link rel="stylesheet" type="text/css" href="https://www.kanaronline.com/includes/css/incWELCOME_CSS.php">
	<title>Welcome to <?php echo $this->_tpl_vars['SITE_NAME']; ?>
</title>
	<script type="text/javascript" src="https://www.musicpayhost.com:8443/jquery/jquery-1.5.2.min.js"></script>
	<script type="text/javascript" src="https://www.musicpayhost.com:8443/jquery/jquery.cookie.min.js"></script>
<?php if ($this->_tpl_vars['enable_translate']): ?>
	<script type="text/javascript" src="https://www.musicpayhost.com:8443/jquery/jquery.translate-1.4.7a.min.js"></script>
	<script type="text/javascript" src="/includes/js/incTranslate.js"></script>
	<script type="text/javascript">
	translateOnBodyReady('<?php echo $this->_tpl_vars['TRANSLATOR_API_KEY']; ?>
');
	</script>
<?php endif; ?>
<script type="text/javascript">
function tellError(msg, url, linenumber) {
	alert('Error message= '+msg+'\nURL= '+url+'\nLine Number= '+linenumber)
	return true
}


var IMGDIR_INTERFACE = "https://www.kanaronline.com/img/site/interface/"; // img interface dir

function viewHelp(pageCode, xferQs) {
	var url = "http://www.kanaronline.com/help.php?page=" + pageCode + "&" + xferQs;
	window.open(url, "Help", "width=450,height=550,scrollbars=yes,toolbars=no");
}

function changeHomePage() {
	var url = "http://www.kanaronline.com/inventory/department.php?classID=";	
	var classID = homeRedirect.searchDeptCode[homeRedirect.searchDeptCode.selectedIndex].value;
	var tab = homeRedirect.tab.value;
	
	if (classID == "SITE") // send to home page
		window.location.href = "http://www.kanaronline.com/?tab=" + tab;
	else // send to dept page
		window.location.href = url + classID + "&tab=" + tab;
}

function findMatchingIndex(select, value) {
	var index;
	
	for (j = 0; j < select.length; j++) {
		if (select[j].value == value) {
			index = j;
			break;
		}
	}
	return index;
}

function MM_preloadImages() { //v3.0
 var d = document; 
 if (d.images) { 
 	if (!d.MM_p) 
 		d.MM_p = new Array();
	var i, j = d.MM_p.length, a = MM_preloadImages.arguments;
	for(i=0; i < a.length; i++)
		if (a[i].indexOf("#") != 0) {
			d.MM_p[j] = new Image;
			d.MM_p[j++].src = a[i];
		}
  }
}

function preloadImages() {
	return;
}

function turnImageOn(image) {
	var currImg = eval("document." + image);
	var onSrc = eval(image + "on.src");
	currImg.src = onSrc;
}

function turnImageOff(image) {
	var currImg = eval("document." + image);
	var offSrc = eval(image + ".src");
	currImg.src = offSrc;
}

function highlight(element) {
	element.focus();
	element.select();
}

function eraseValue(element) {
	element = eval(element);
	element.value = "";
}

function selectValidOptions(select) {
	for (i = 0; i < select.length; i++) {
		if (select[i].value != "") // select
			select[i].selected = true;
	}
}

function checkEmail(str) {
	var reg1 = /(@.*@)|(\.\.)|(@\.)|(\.@)|(^\.)/; // not valid
	var reg2 = /^.+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/; // valid
	
	if (!reg1.test(str) && reg2.test(str)) { // if syntax is valid
		return 1;
	}
  	else
  	 	return 0;
}

function checkUSZip(zip)
{
	var reg1 = /^[0-9]{5}$/;
	var reg2 = /^[0-9]{5}\-[0-9]{4}$/;
	
	if (!reg1.test(zip) && !reg2.test(zip)) // invalid
		return 1;
	else
		return 0;
}

function isNumeric(sText) {
	var validChars = "0123456789.";
	var isNumber = true;
	var c;

	for (i = 0; i < sText.length && isNumber == true; i++) { 
		c = sText.charAt(i);
		if (validChars.indexOf(c) == -1) {
			isNumber = false;
		}
	}
	return isNumber;
}

function guestAlert() {
	alert("To access this part of Kanar - Barber, Beauty, Personal Care, please click the Apply link!");
}

function comingSoonAlert() {
	alert("This feature is coming soon!");
}

//var login = document.forms["login"];

// list preloaded images
var tour = new Image();
tour.src = "https://www.kanaronline.com/img/site/interface/welcome_tour_off.gif";
var touron = new Image();
touron.src = "https://www.kanaronline.com/img/site/interface/welcome_tour_on.gif"; 

var apply = new Image();
apply.src = "https://www.kanaronline.com/img/site/interface/welcome_apply_off.gif";
var applyon = new Image();
applyon.src = "https://www.kanaronline.com/img/site/interface/welcome_apply_on.gif";

var cc = new Image();
cc.src = "https://www.kanaronline.com/img/site/interface/welcome_cc_off.gif";
var ccon = new Image();
ccon.src = "https://www.kanaronline.com/img/site/interface/welcome_cc_on.gif";

var web = new Image();
web.src = "https://www.kanaronline.com/img/site/interface/welcome_web_off.gif";
var webon = new Image();
webon.src = "https://www.kanaronline.com/img/site/interface/welcome_web_on.gif"; 

function preloadImages() {
	MM_preloadImages(tourOn.src,applyOn.src,ccON.src);
}

function setCursor() {	
	var login = document.forms["login"];
	if (login.userID.value != "")
		login.password.focus();
	else
		login.userID.focus();	
}

function showCC() {
	var url = "http://www.kanaronline.com/promo/ccPopUp.php";
	
	window.open(url, "cc", "width=500,height=485,toolbars=no,scrollbars=yes");
}

function showEComm() {
	var url = "http://www.kanaronline.com/promo/eCommerce.php";
	
	window.open(url, "eComm", "width=760,height=580,toolbars=no,scrollbars=yes");
}

function viewHelp(pageCode, xferQs) {
	var url = "http://www.kanaronline.com/help.php?page=" + pageCode + "&" + xferQs;
	window.open(url, "Help", "width=450,height=550,scrollbars=yes,toolbars=no");
}

function checkUserID()
{
	var login = document.forms["login"];
	var box = login.showUserID;
	
	if (box.checked)
		box.checked = false;
	else
		box.checked = true;
}
</script>
</head>
<body bgcolor="white" pagemargin="0" leftmargin="0" rightmargin="0" topmargin="0" bottommargin="0" onLoad="setCursor();" onLoad="preloadImages();">
		<table width="100%" cellspacing="10" cellpadding="0" border="0" align="center" bgcolor="#ffffff">		
			<tr>
				<td colspan="3" align="center">
					<table width="100%" height="59" cellspacing="0" cellpadding="0" border="0">
						<tr>
							<td colspan="2" align="center"><img src="https://www.kanaronline.com/img/site/interface/confidential_wholesale.gif"></td>
						</tr>	
						<tr>
							<td rowspan="2"><img src="https://www.kanaronline.com/img/site/interface/logo.png" border="0"></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3">&nbsp;</td>
			</tr>
			<tr valign="top">
				<td class="msg">
					<span class="welcome">Welcome to the <?php echo $this->_tpl_vars['STORE_NAME_PLUG']; ?>
!</span>
					<br>
					<br>
					Thank you for taking the time to visit <b><?php echo $this->_tpl_vars['SITE_NAME']; ?>
 Online</b>. We are extremely excited about the new opportunities we'll be able to offer you by doing business online together.
					<br>
					<br>
					Our entire staff has been working very hard to develop this <b>best-in-industry</b> site, which includes many features you will not find anywhere else.
					<br>
					<br>					
					First and foremost, we're proud to be offering our &quot;<b>New <?php echo $this->_tpl_vars['STORE_NAME_PLUG']; ?>
 eCommerce Website Solution</b>.&quot; It's preloaded with over 3500 products and has every feature that a professional, world-class website should have -- all at a low monthly cost!
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
							<td><a href="<?php echo $this->_tpl_vars['tour_link']; ?>
" onMouseOver="turnImageOn('tour');" onMouseOut="turnImageOff('tour');"><img name="tour" src="https://www.kanaronline.com/img/site/interface/welcome_tour_off.gif" border="0"></a></td>
							<td><a href="<?php echo $this->_tpl_vars['apply_link']; ?>
" onMouseOver="turnImageOn('apply');" onMouseOut="turnImageOff('apply');"><img name="apply" src="https://www.kanaronline.com/img/site/interface/welcome_apply_off.gif" border="0"></a></td>
							<!--td><a href="#" onClick="showCC();" onMouseOver="turnImageOn('cc');" onMouseOut="turnImageOff('cc');"><img name="cc" src="https://www.kanaronline.com/img/site/interface/welcome_cc_off.gif" border="0"></a></td-->
							<td><a href="#" onClick="showEComm();" onMouseOver="turnImageOn('web');" onMouseOut="turnImageOff('web');"><img name="web" src="https://www.kanaronline.com/img/site/interface/welcome_web_off.gif" border="0"></a></td>
						</tr>
					</table>
					</center>
					<br>
					<br>					
					If you have an existing account with <?php echo $this->_tpl_vars['SITE_NAME']; ?>
, but have not completed our online application, we ask that you please do so in order to activate your <?php echo $this->_tpl_vars['STORE_NAME_PLUG']; ?>
 account.
					<br>
					<br>
					If you have any questions about the <?php echo $this->_tpl_vars['STORE_NAME_PLUG']; ?>
, please feel free to <a href="mailto:<?php echo $this->_tpl_vars['sales_email']; ?>
"><b>email</b></a> or call us toll free at <b><?php echo $this->_tpl_vars['SITE_TOLL_FREE']; ?>
</b>.
				</td>
				<td width="1" height="100%" bgcolor="#696969"><img src="https://www.kanaronline.com/img/site/interface/clear_spacer.gif" width="1" height="100%"></td>
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
										<td colspan="2" height="5"><img src="https://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="5"></td>
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
										<td colspan="2" align="left"><input type="image" name="login" src="https://www.kanaronline.com/img/site/interface/login.png" align="right" border="0"></td>
									</tr>
									<tr>
										<td colspan="2" height="5"><img src="https://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="5"></td>
									</tr>
									<tr valign="middle">
										<td colspan="2" align="center"><a href="<?php echo $this->_tpl_vars['forgot_link']; ?>
" class="advancedSearch">Forgot Your Password?</a></td>
									</tr>
									<tr valign="middle">
										<td colspan="2" align="center"><a href="#" class="help" onClick="viewHelp('WELCOME','');">Help</a></td>
									</tr>
									<!--tr>
										<td colspan="2" height="5"><img src="https://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="5"></td>
									</tr>
									<tr valign="middle">
										<td colspan="2" align="center"><input type="image" name="goToCC" src="https://www.kanaronline.com/img/site/interface/go_to_counter_catalog_but.gif" border="0"></td>
									</tr-->
								</table>
								</form>
							</td>
						</tr>
						<tr>
							<td height="10" class="infoBoxFooter"><img src="https://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="10"></td>
						</tr>
					<?php if ($this->_tpl_vars['enable_translate']): ?>
						<tr>
							<td height="10"><img src="https://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="10"></td>
						</tr>
						<tr><!-- languages table r 1 -->
							<td height="23" class="infoBoxHeader">Languages</td>
						</tr>
						<tr><!-- languages table r 1 -->
							<td class="infoBoxContent">
								<table width="100%" cellpadding="1" border="0">
									<tr valign="middle">
										<td><a href="javascript:translate('es');"><img src="https://www.kanaronline.com/img/site/misc/languages/spanish.jpg" alt="Spanish"> Spanish</a></td>
									</tr>
									<tr valign="middle">
										<td><a href="javascript:translate('pt');"><img src="https://www.kanaronline.com/img/site/misc/languages/portuguese.jpg" alt="Portuguese"> Portuguese</a></td>
									</tr>
									<tr valign="middle">
										<td><a href="javascript:translate('de');"><img src="https://www.kanaronline.com/img/site/misc/languages/german.jpg" alt="German"> German</a></td>
									</tr>
									<tr valign="middle">
										<td><a href="javascript:translate('fr');"><img src="https://www.kanaronline.com/img/site/misc/languages/french.jpg" alt="French"> French</a></td>
									</tr>
									<tr valign="middle">
										<td><a href="javascript:translate('it');"><img src="https://www.kanaronline.com/img/site/misc/languages/italian.jpg" alt="Italian"> Italian</a></td>
									</tr>
									<tr valign="middle">
										<td><a href="javascript:translate('zh-CHS');"><img src="https://www.kanaronline.com/img/site/misc/languages/chinese.jpg" alt="Chinese"> Chinese (Simplified)</a></td>
									</tr>
									<tr valign="middle">
										<td><a href="javascript:translate('ja');"><img src="https://www.kanaronline.com/img/site/misc/languages/japanese.jpg" alt="Japanese"> Japanese</a></td>
									</tr>
									<tr valign="middle">
										<td><a href="javascript:translate('ko');"><img src="https://www.kanaronline.com/img/site/misc/languages/korean.jpg" alt="Korean"> Korean</a></td>
									</tr>
									<tr valign="middle">
										<td align="center"><select class="searchSelect" onChange="translate(this.options[this.selectedIndex].value);"><option value="" selected>Other Languages...</option><option value="ar">Arabic</option><option value="bg">Bulgarian</option><option value="ca">Catalan</option><option value="zh-CHT">Chinese (Traditional)</option><option value="cs">Czech</option><option value="da">Danish</option><option value="nl">Dutch</option><option value="et">Estonian</option><option value="fi">Finnish</option><option value="el">Greek</option><option value="ht">Haitian Creole</option><option value="he">Hebrew</option><option value="hi">Hindi</option><option value="hu">Hungarian</option><option value="id">Indonesian</option><option value="lv">Latvian</option><option value="lt">Lithuanian</option><option value="no">Norwegian</option><option value="pl">Polish</option><option value="ro">Romanian</option><option value="ru">Russian</option><option value="sk">Slovak</option><option value="sl">Slovenian</option><option value="sv">Swedish</option><option value="th">Thai</option><option value="tr">Turkish</option><option value="uk">Ukrainian</option><option value="vi">Vietnamese</option></select></td>
									</tr>
									<tr valign="middle">
										<td><a href="javascript:revertLanguage();" style="font-weight: bold;"><img src="https://www.kanaronline.com/img/site/misc/languages/english.jpg" alt="English"> Reset to English</a></td>
									</tr>
								</table>
							</td>
						</tr>
						<tr><!-- languages table r 1 -->
							<td height="10" class="infoBoxFooter"><img src="https://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="10"></td>
						</tr>
					<?php endif; ?>
					</table>
				</td>
			</tr>
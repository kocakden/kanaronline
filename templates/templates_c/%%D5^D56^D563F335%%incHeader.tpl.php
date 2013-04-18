<?php /* Smarty version 2.6.3, created on 2013-04-18 12:45:53
         compiled from incHeader.tpl */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="http://www.kanaronline.com/includes/css/incBASE_CSS.php">
	<title><?php echo $this->_tpl_vars['title']; ?>
</title>
	<script type="text/javascript" src="http://www.musicpayhost.com:8080/jquery/jquery-1.5.2.min.js"></script>
	<script type="text/javascript" src="http://www.musicpayhost.com:8080/jquery/jquery.cookie.min.js"></script>
<?php if ($this->_tpl_vars['enable_translate']): ?>
	<script type="text/javascript" src="http://www.musicpayhost.com:8080/jquery/jquery.translate-1.4.7a.min.js"></script>
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


var IMGDIR_INTERFACE = "http://www.kanaronline.com/img/site/interface/"; // img interface dir

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

function turnLinkImgOn(image)
{
	//var currImg = eval("document." + image);
	var currImg = document.getElementById(image);
	var onSrc = eval(image + "_on");
	currImg.src = onSrc.src;
}

function turnLinkImgOff(image)
{
	var currImg = document.getElementById(image);
	var onSrc = eval(image);
	currImg.src = onSrc.src;
}

function toggleChildren(id) {
	var childrenDiv = document.getElementById("children_" + id);
	
	if (childrenDiv.style.display == "none") {
		childrenDiv.style.display = "block";
	} else {
		childrenDiv.style.display = "none";
	}

	updateNodeImgs(id);
}

function updateNodeImgs(id) {
	var childrenDiv = document.getElementById("children_" + id);
	var img = document.getElementById("tgl_img_" + id);

	if (childrenDiv.style.display == "none") {
		img.src = "http://www.kanaronline.com/img/site/interface/ftv2pnode.gif";
	} else {
		img.src = "http://www.kanaronline.com/img/site/interface/ftv2mnode.gif";
	}
}
</script>
</head>
<body onLoad="preloadImages();">

	<table width="100%" cellspacing="0" cellpadding="0" border="0">
		<tr>
			<td align="center" colspan="3"><img src="http://www.kanaronline.com/img/site/interface/confidential_wholesale.gif"></td>
		</tr>
		<tr>
			<td colspan="3"><img src="http://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="10"></td>
		</tr>
		<tr valign="bottom">
			<td align="center"><img src="http://www.kanaronline.com/img/site/interface/logo.png"></td>
			<td><?php echo $this->_tpl_vars['banner']; ?>
</td>
		</tr>
		<tr>
			<td colspan="3" height="1" bgcolor="#000000"><img src="http://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="1"></td>
		</tr>
		<tr>
			<td colspan="3">
			<table cellspacing="3" cellpadding="0" border="0" width="100%" height="35" id="newSearchTable">
					<tr id="newSearch">
					<?php if (! $this->_tpl_vars['hide_search']): ?>
						<form method="post" action="">
						<td>Search</td>
						<td><input type="text" class="searchTextBox" name="searchKeywords" size="15"></td>
						<td>by</td>
						<td><?php echo $this->_tpl_vars['type_select']; ?>
</td>
						<td>in</td>
						<td><?php echo $this->_tpl_vars['department_select']; ?>
</td>
						<td>
							<input type="image" name="navBarSubmitSearch" value="search" src="http://www.kanaronline.com/img/site/interface/nav_bar_search_but.gif">
						</td>
						<td><a href="<?php echo $this->_tpl_vars['search_link']; ?>
" class="subHeader">[Advanced]</a></td>
						</form>
					<?php endif; ?>
						<td align="right" class="topRightNav" width="99%">
						<?php if ($this->_tpl_vars['apply_nav']): ?>
							<a href="#" onClick="alert('Please call <?php echo $this->_tpl_vars['SITE_TOLL_FREE']; ?>
 for help with your application.');">Help</a>
						<?php else: ?>
							<a href="<?php echo $this->_tpl_vars['LINK_STORE']; ?>
">Home</a>
							&#149;
						<?php if ($this->_tpl_vars['is_guest']): ?>
							<a href="<?php echo $this->_tpl_vars['apply_link']; ?>
">Apply</a>
						<?php else: ?>
							<a href="<?php echo $this->_tpl_vars['manage_account_link']; ?>
">Manage Account</a>
						<?php endif; ?>
							&#149;
							<a href="<?php echo $this->_tpl_vars['contact_link']; ?>
">Contact Us</a>
							&#149;
							<a href="javascript: <?php echo $this->_tpl_vars['help_link']; ?>
">Help</a>
							&#149;
						<?php if ($this->_tpl_vars['is_guest']): ?>
							<a href="<?php echo $this->_tpl_vars['logout_link']; ?>
">Log In</a>
						<?php else: ?>
							<a href="<?php echo $this->_tpl_vars['logout_link']; ?>
">Log Out</a>
						<?php endif; ?>
						<?php endif; ?>
							<img src="http://www.kanaronline.com/img/site/interface/clear_spacer.gif" width="7">
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td colspan="3" height="1" bgcolor="#000000"><img src="http://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="1"></td>
		</tr>
		<tr>
			<td colspan="3"><img src="http://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="10"></td>
		</tr>
	</table>
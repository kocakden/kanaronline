<?php /* Smarty version 2.6.3, created on 2013-04-17 08:53:30
         compiled from genericHeader.tpl */ ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://www.kanaronline.com/includes/css/incBASE_CSS.php">
	<title><?php echo $this->_tpl_vars['title']; ?>
</title>
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
</script>
</head>
<body bgcolor="white" pagemargin="0" leftmargin="0" rightmargin="0" topmargin="0" bottommargin="0"<?php echo $this->_tpl_vars['bodyParams']; ?>
>
		<table width="<?php echo $this->_tpl_vars['pageWidth']; ?>
" cellspacing="10" cellpadding="0" border="0" align="center" bgcolor="#ffffff">		
			<tr>
				<td colspan="3" align="center">
					<table width="100%" height="59" cellspacing="0" cellpadding="0" border="0">
						<tr>
							<td colspan="2" align="center"><img src="https://www.kanaronline.com/img/site/interface/confidential_wholesale.gif"></td>
						</tr>	
						<tr>
							<td rowspan="2" align="center"><img src="https://www.kanaronline.com/img/site/interface/logo.png" border="0"></td>
							<td align="right"><img src="https://www.kanaronline.com/img/site/interface/800_number.gif"></td>
						</tr>
						<tr>
							<td align="right"><img src="https://www.kanaronline.com/img/site/interface/800_number_bot.gif"></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3">&nbsp;</td>
			</tr>
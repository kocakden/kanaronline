<?php /* Smarty version 2.6.3, created on 2012-11-06 15:21:44
         compiled from specialsFlier.tpl */ ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="http://www.kanaronline.com/includes/css/incBASE_CSS.php">
<title><?php echo $this->_tpl_vars['SITE_NAME']; ?>
 Deals <?php echo $this->_tpl_vars['specials_valid_thru']; ?>
</title>
<?php echo '
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
'; ?>

<script type="text/javascript">
function tellError(msg, url, linenumber) {
	alert('Error message= '+msg+'\nURL= '+url+'\nLine Number= '+linenumber)
	return true
}

window.onerror = tellError
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
</script>
</head>
	<body bgcolor="white">
		<center>
		<table cellpadding="0" cellspacing="0" border="0" style="width: 800px;">
			<tr>
				<td align="center" colspan="3"><img src="http://www.kanaronline.com/img/site/interface/confidential_wholesale.gif"></td>
			</tr>
			<tr height="4">
				<td align="center" colspan="3"><img src="http://www.kanaronline.com/img/site/interface/clear_spacer.gif" height="4"></td>
			</tr>
			<tr valign="middle">
				<td colspan="3">
					<table cellpadding="0" cellspacing="0" border="0">
						<tr valign="middle">
							<td><img src="http://www.kanaronline.com/img/site/interface/logo.png" border="0"></td>
							<td width="100%" align="right"><a href="<?php echo $this->_tpl_vars['SITE_URL']; ?>
?<?php echo $this->_tpl_vars['qs']; ?>
"><img src="http://www.kanaronline.com/img/email/em_want_more.gif" border="0"></a></td>
						</tr>
					</table>
				</td>
			</tr>
			<?php if ($this->_tpl_vars['header_content']): ?>
			<tr>
				<td colspan="3"><?php echo $this->_tpl_vars['header_content']; ?>
</td>
			</tr>
			<?php endif; ?>
			<tr height="13">
				<td width="11"><img src="http://www.kanaronline.com/img/email/em_top_left.gif"></td>
				<td width="*" align="left" bgcolor="#66759C">
					<table cellpadding="0" cellspacing="0" border="0" width="100%">
						<tr valign="middle">
							<td align="left"><img src="http://www.kanaronline.com/img/email/em_top.gif"></td>
							<td align="left"><img src="http://www.kanaronline.com/email/spfl/<?php echo $this->_tpl_vars['id']; ?>
/img/date.jpg"></td>
							<td align="right" width="100%"><img src="http://www.kanaronline.com/img/email/em_1800.gif" border="0"></td>
						</tr>
					</table>
				</td>
				<td width="11"><img src="http://www.kanaronline.com/img/email/em_top_right.gif"></td>
			</tr>
			<?php if (( ! $this->_tpl_vars['registered'] )): ?>
			<tr>
				<td width="11" height="100%" background="http://www.kanaronline.com/img/email/em_left_bg.gif"></td>
				<td class="promoBar" align="center">
					<table cellpadding="6" cellspacing="8" border="0">
						<tr valign="middle">
							<td class="promo">Become a Dealer!&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['LINK_APPLY']; ?>
apply.php?v=1" class="link">Click Here to Apply Now!</a></td>
						</tr>
					</table>
				</td>
				<td width="11" height="100%" background="http://www.kanaronline.com/img/email/em_right_bg.gif"></td>
			</tr>
			<?php endif; ?>
			<tr>
				<td width="11" height="100%" background="http://www.kanaronline.com/img/email/em_left_bg.gif">&nbsp;</td>
				<td width="*" align="center"><?php echo $this->_tpl_vars['features']; ?>
</td>
				<td width="11" height="100%" background="http://www.kanaronline.com/img/email/em_right_bg.gif"></td>
			</tr>
			<tr>
				<td width="11" height="29"><img src="http://www.kanaronline.com/img/email/em_bot_left.gif"></td>
				<td width="*" height="29" bgcolor="#66759C">
					<table cellpadding="0" cellspacing="0" border="0" width="100%">
						<tr>
							<td align="left" class="botBorder" width="33%"><?php echo $this->_tpl_vars['SITE_NICE_URL']; ?>
</td>
							<td align="center" width="33%"><img src="http://www.kanaronline.com/img/email/em_tag_line.gif"></td>
							<td align="right" class="botBorder" width="33%"><?php echo $this->_tpl_vars['SITE_TOLL_FREE']; ?>
</td>
						</tr>
					</table>	
				</td>
				<td width="11" height="29"><img src="http://www.kanaronline.com/img/email/em_bot_right.gif"></td>
			</tr>
			<?php if ($this->_tpl_vars['footer_content']): ?>
			<tr>
				<td colspan="3"><?php echo $this->_tpl_vars['footer_content']; ?>
</td>
			</tr>
			<?php endif; ?>
			<tr>
				<td colspan="3" align="center">
					<table cellpadding="0" cellspacing="0" border="0" width="100%">
						<tr valign="top">
							<td align="center" colspan="3" class="copyrt">Proud Members Of</td>
							<td align="right" class="copyrt" rowspan="2" nowrap>
								<?php if (( ! $this->_tpl_vars['registered'] )): ?>
								<a href="<?php echo $this->_tpl_vars['SITE_URL']; ?>
email/remove.php" class="unsubscribe">Unsubscribe</a>&nbsp;&nbsp;|&nbsp;&nbsp;
								<?php endif; ?>
								&copy;2002-<?php echo $this->_tpl_vars['current_year']; ?>
&nbsp;<a href="http://www.cutting-edgesolutions.com/" target="_blank">Cutting-Edge Solutions</a>&nbsp;&nbsp;
								<?php if (( $this->_tpl_vars['dateExpire'] )): ?>
									<br><br><i>Prices not guaranteed after <?php echo $this->_tpl_vars['dateExpire']; ?>
.</i>
								<?php endif; ?>
								<br><br><i>For dealers and insitutions only. <?php echo $this->_tpl_vars['SITE_NAME']; ?>
 does not sell to individual consumers.</i>
							</td>
						</tr>
						<tr valign="top">
							<td align="center"><img src="http://www.kanaronline.com/img/site/misc/namm_logo.gif"></td>
							<td width="20">&nbsp;</td>
							<td align="center"><img src="http://www.kanaronline.com/img/site/misc/mda_logo.gif"></td> 
						</tr>
					</table>
				</td>
			</tr>
		</table>
		</center>
		<img src="<?php echo $this->_tpl_vars['SITE_URL']; ?>
email/tally.php?mbID=<?php echo $this->_tpl_vars['id']; ?>
" border="0" width="0" height="0">
	</body>
</html>
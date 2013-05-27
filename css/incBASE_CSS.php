<?php
// $Id: incBASE_CSS.php 3609 2012-02-22 21:26:38Z eric $

include_once("../../global/globalInitClose.php");

initCSS();

if ($store)
	$fontSizeChange = $store->getFontSize();
else
	$fontSizeChange = 0;
$baseText = 8;
?>

/******************************************************************************************
	Icon Set:	IcoMoon - Free -- http://keyamoon.com/icomoon/
	License:	CC BY 3.0 -- http://creativecommons.org/licenses/by/3.0/ 
*******************************************************************************************/

@font-face {
	font-family: 'icons';
	src:url('fonts/icons.eot');
}
@font-face {
	font-family: 'icons';
	src: url(data:application/x-font-woff;charset=utf-8;base64,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) format('woff'),
		 url(data:application/x-font-ttf;charset=utf-8;base64,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) format('truetype');
	font-weight: normal;
	font-style: normal;
}

.icon {
	font-family: 'icons';
	display: inline-block;
	vertical-align: text-top;
	
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: none;
	line-height: 1;
	
	speak: none;
	-webkit-font-smoothing: antialiased;
}

/*
'cart' : 		'&#xe000;'
'search' : 		'&#xe001;'
'remove' : 		'&#xe004;'
'spinner' : 	'&#xe005;'
'checkmark' : 	'&#xe006;'
'close' : 		'&#xe007;'
'key' : 		'&#xe003;'
'user' : 		'&#xe002;'
'enter' : 		'&#xe008;'
'exit' : 		'&#xe009;'
'arrow-right' : '&#xe00a;'
*/

/******************************************************************************************/


body 
{
	font-family: arial, helvetica, ver dana;
	margin: 0px;
	background: url(/img/site/bg/furley_bg.png);
	color: black;
}

body > .wrapper {
	width: 960px;
	margin: 32px auto;
	background: #fff;
	padding: 16px;
	border: 1px solid #ccc;
	border-radius: 8px;
	box-shadow: 0 0 5px rgba(0,0,0,0.1);
}

img{
	border: 0pt black solid;
}

a 
{ 
	font-size:<?=$baseText + $fontSizeChange?>pt; 
	text-decoration:underline; 
	color:<?=PRIMARY_COLOR?>;
}

a.bold 
{ 
	font-size:<?=$baseText + $fontSizeChange?>pt; 
	text-decoration:underline; 
	font-weight:bold;
	color:<?=PRIMARY_COLOR?>;
}

.btn {
	padding: 4px 5px 5px;
	border: 1px solid #333;
	background: #333;
	cursor: pointer;
	text-decoration: none;
	color: white;
	border-radius: 4px;
	font-size: 10pt;
	-webkit-transition: background-color 0.3s ease;
	-moz-transition: background-color 0.3s ease;
	-o-transition: background-color 0.3s ease;
	-ms-transition: background-color 0.3s ease;
	transition: background-color 0.3s ease;
}

.btn:hover {
	background-color: #666;
}

td 
{
	font-size:<?=$baseText + $fontSizeChange?>pt;
}

/* Colored curved boxes CSS */
table.lightBox
{
	background-color: #DA5858;
}

table.lightBox td.borderLeft
{
	border-left: 1px #C70202 solid;
}

table.lightBox td.borderRight
{
	border-right: 1px #C70202 solid;
}

table.lightBox td.borderBottom
{
	border-bottom: 1px #C70202 solid;
}

td.footer
{
	font-size:<?=$baseText + $fontSizeChange?>pt;
	height: 21px;
	vertical-align: bottom;
	text-align: center;
	color: #999;
}

td.footer a {
	font-size:<?=$baseText + $fontSizeChange?>pt;
	color: #999;
}

td.footer a:hover {
	color: #333;
}

.large
{
	font-size:<?=$baseText + 1 + $fontSizeChange?>pt;
}

.pageHeader 
{
	font-size:<?=$baseText + 4 + $fontSizeChange?>pt; 
	font-weight:bold;
	border-bottom: 1px black solid;
}

.pageSubHeader 
{
	font-size:<?=$baseText + 3 + $fontSizeChange?>pt; 
	font-weight:bold;
	color:<?=PRIMARY_COLOR?>; 
	border-bottom: 1px <?=PRIMARY_COLOR?> solid;
}

a.subHeader
{
	font-size:<?=$baseText + 2 + $fontSizeChange?>pt; 
	text-decoration: none;
	color:<?=PRIMARY_COLOR?>; 
}

a.subHeader:hover
{
	color:#000000;
	text-decoration: underline; 
}

.pageDescription
{
	font-size:<?=$baseText + 1 + $fontSizeChange?>pt; 
	color:#333333; 
}

.pageDescTip  
{ 
	font-size:<?=$baseText + 1 + $fontSizeChange?>pt; 
	color:<?=PRIMARY_COLOR?>; 
	font-weight:bold;
}

a.pageDescLink 
{
	font-size:<?=$baseText + 1 + $fontSizeChange?>pt; 
	color:<?=PRIMARY_COLOR?>; 
	text-decoration:underline;
	font-weight:bold;
}

a.pageDescLink:hover { color:#000000; }

tr.tableHeaderOutline 
{
	background-color:#333333; 
	color:#ffffff; 
	font-family:arial; 
	font-size:<?=$baseText - 2 + $fontSizeChange?>pt; 
} 

td.tableHeaderOutlineLeftVert { border-left: 1px #333333 solid; } 

#errorMsg
{
	color:#CC6666; 
	font-size: <?=$baseText + 2 + $fontSizeChange?>pt;
	font-weight: bold;
}

#successMsg
{
	color:<?=PRIMARY_COLOR?>;
	font-size: <?=$baseText + 2 + $fontSizeChange?>pt;
	font-weight: bold;
}

/* Header */
table#newSearchTable
{
	border: 1px solid #333; 
	border-left:0; 
	border-right:0;
	/*background-color: <?=SEARCH_COLOR?>;*/
}

tr#newSearch 
{
	color: <?=PRIMARY_COLOR?>; 
}

tr#newSearch td {font-size: <?=$baseText + 2 + $fontSizeChange?>pt;}

td.topRightNav
{
	padding:0 5px;
	color: #696969; 
	font-size: <?=$baseText + 2 + $fontSizeChange?>pt;
}

td.topRightNav a 
{
	color: #696969; 
	text-decoration: none; 
	font-size: <?=$baseText + 2 + $fontSizeChange?>pt; 
	font-weight: bold;
}

td.topRightNav a:hover {color: #111;}

.searchSelect 
{  
	font-size: 12px;
	color: #333;
	border: 1px solid #ccc;
	padding: 5px 6px;
	border-radius: 4px;
}

.searchTextBox 
{ 
	font-size: 12px;
	color: #999;
	padding: 5px 10px;
	width: 233px;
	border-radius: 4px 0 0 4px;
	border: 1px solid #ccc;
	-webkit-transition: color 0.3s ease, border-color 0.3s ease;
}

.searchTextBox:focus {
	outline: 0;
	color: #333333;
	border-color: #333;
}

.searchBtn {
	border: 1px solid #333;
	border-radius: 0 4px 4px 0;
	margin: 0 0 0 -4px;
}


/* Info Boxes */
td.infoBoxHeader
{
	color: #FFFFFF;
	font-size: 10pt;
	font-weight: bold;
	background-color: #333;
	padding-left: 10px;
	border-radius: 4px 4px 0 0;
	text-align:center;
}

td.infoBoxContent
{
	background-color: <?=PRIMARY_BG_COLOR?>;
	padding-left: 8px;
	padding-right: 8px;
	border-left: 1px solid <?=PRIMARY_COLOR?>;
	border-right: 1px solid <?=PRIMARY_COLOR?>;
}

td.infoBoxFooter
{
	background-color: <?=PRIMARY_BG_COLOR?>;
	border: 1px solid <?=PRIMARY_COLOR?>;
	border-top: 0;
	border-radius: 0 0 4px 4px;
}

td.navBoxHeader
{
	background-color: <?=NAV_COLOR?>;
}

td.navBoxContent
{
	background-color: <?=NAV_BG_COLOR?>;
	border-color: <?=NAV_COLOR?>;
}

td.navBoxFooter
{
	background-color: <?=NAV_BG_COLOR?>;
	border-color: <?=NAV_COLOR?>;
}

/* Left Include */
a.listDepartmentLink 
{ 
	font-size:<?=$baseText + 2 + $fontSizeChange?>pt; 
	font-weight:bold; 
	color:#000000; 
	text-decoration:none;
}

a.listDepartmentLink:hover 
{ 
	color:<?=PRIMARY_COLOR?>;
	text-decoration:none;
}

a.listCatalogLink 
{
	font-size:<?=$baseText + $fontSizeChange?>pt; 
	text-decoration:none; 
	color: #696969;
	font-weight: bold;
}

a.listCatalogLink:hover { color:<?=PRIMARY_COLOR?>;}

a.listHeadlineLink 
{ 
	font-size:<?=$baseText + $fontSizeChange?>pt;
	color: black; 
	text-decoration: none;
}

a.advancedSearch 
{ 
	font-size:<?=$baseText + 1 + $fontSizeChange?>pt; 
	font-weight:bold; 
	text-decoration:none; 
	color:#333333;
}

a.advancedSearch:hover { color:<?=PRIMARY_COLOR?>;}

/* Inventory Pages */
a.location 
{ 
	font-size:<?=$baseText + 2 + $fontSizeChange?>pt; 
	text-decoration:none;
	font-weight:bold; 
	color:#000000;
}

a.location:hover { color:<?=PRIMARY_COLOR?>;}

a.catalogInvoiceLine 
{ 
	font-size:<?=$baseText + 3 + $fontSizeChange?>pt; 
	font-weight:bold; text-decoration:none; 
	color:#000000;
}

a.catalogInvoiceLine:hover 
{ 
	text-decoration:none; 
	color:<?=PRIMARY_COLOR?>; 
}

a.catalogDescriptionLink 
{
	font-size:<?=$baseText + $fontSizeChange?>pt; 
	font-weight:bold; 
	text-decoration:underline; 
	color:<?=PRIMARY_COLOR?>;
}

a.catalogDescriptionLink:hover { color:#000000; }

.catalogModel
{
	font-size:<?=$baseText + $fontSizeChange?>pt;
	font-weight:bold; 
	color:<?=PRIMARY_COLOR?>;
}


td.resultsBoxHeader
{
	background-color: <?=SECONDARY_BG_COLOR?>;
	border: 1px solid <?=PRIMARY_COLOR?>;
	border-bottom: 0;
	-moz-border-radius: 10px 10px 0 0;
	-webkit-border-radius: 10px 10px 0 0;
	border-radius: 10px 10px 0 0;
}

td.resultsBoxContent
{
	background-color: <?=SECONDARY_BG_COLOR?>;
	padding-left: 8px;
	padding-right: 8px;
	border-left: 1px solid <?=PRIMARY_COLOR?>;
	border-right: 1px solid <?=PRIMARY_COLOR?>;
}

td.resultsBoxFooter
{
	background-color: <?=SECONDARY_BG_COLOR?>;
	border: 1px solid <?=PRIMARY_COLOR?>;
	border-top: 0;
	-moz-border-radius: 0 0 10px 10px;
	-webkit-border-radius: 0 0 10px 10px;
	border-radius: 0 0 10px 10px;
}

/*.catalogAttribute { border-bottom: 1px <?=PRIMARY_COLOR?> dotted; }*/
tr.priceTableOnDiscount
{ 
	font-size:<?=$baseText + 1 + $fontSizeChange?>pt; 
	font-weight:bold;
	color:#000000; 
	background-color:#C8D96B;
}

tr.priceTableList
{ 
	font-size:<?=$baseText + $fontSizeChange?>pt; 
	color:#696969; 
	background-color:#ffffff;
}

td.regPriceTableLabel
{ 
	font-size:<?=$baseText + $fontSizeChange?>pt; 
	color:#333333;
	background-color:#ffffff;
}

td.regPriceTableValue
{ 
	font-size:<?=$baseText + $fontSizeChange?>pt; 
	color:#333333;
	background-color:#ffffff;
}

td.endColumnTableLabel
{ 
	font-size:<?=$baseText + $fontSizeChange?>pt; 
	color:#000000; 
	background-color:#ffffff;
}

td.endColumnTableValue
{ 
	font-size:<?=$baseText + $fontSizeChange?>pt; 
	font-weight: bold; 
	color:#000000;
	background-color:#ffffff;
}

/*
tr.priceTableBlue 
{ 
	font-size:<?=$baseText + $fontSizeChange?>pt; 
	font-weight: bold; 
	color:<?=PRIMARY_COLOR?>;
	background-color:#ffffff;
}

tr.priceTableRed 
{ 
	font-size:<?=$baseText + $fontSizeChange?>pt; 
	color:#CC6666; 
	background-color:#ffffff;
}

*/
td.listDepartment 
{ 
	font-size:<?=$baseText + 2 + $fontSizeChange?>pt; 
	font-weight:bold; 
	color:<?=PRIMARY_COLOR?>;
}

td.listHeadline 
{
	font-size:<?=$baseText + $fontSizeChange?>pt; 
	font-weight:bold; 
	padding-top: 2px; 
	color:#000000;
}

td.listCatalog 
{
	font-size:<?=$baseText + $fontSizeChange?>pt; 
	font-weight:bold; 
	color:#696969;
}

td.locationNoLink
{
	font-size:<?=$baseText + 2 + $fontSizeChange?>pt; 
	font-weight:bold;
	color:#696969;
}

td.catalogDescription {font-size:<?=$baseText + $fontSizeChange?>pt;}

td.catalogAttributeDescription 
{
	font-size:<?=$baseText + $fontSizeChange?>pt; 
	color:#696969; 
	font-weight:bold;
}

.moreArrow 
{
	font-size:<?=$baseText + $fontSizeChange?>pt; 
	color:<?=PRIMARY_COLOR?>; 
	font-weight:bold;
}

td.qty 
{
	font-size:<?=$baseText + $fontSizeChange?>pt; 
	font-weight:bold; 
	color:#696969;
}

td.itemCount 
{
	font-size:<?=$baseText + 1 + $fontSizeChange?>pt; 
	color:<?=PRIMARY_COLOR?>; 
	font-weight:bold;
}

.qtyField 
{
	font-size:<?=$baseText + $fontSizeChange?>pt;
	text-align:center;
	color:<?=PRIMARY_COLOR?>; 
	font-weight:bold; 
	border: 1px #000000 solid; 
}

/* Right Include */
a.viewOrder
{
	font-size:<?=$baseText + 1 + $fontSizeChange?>pt; 
	font-weight:bold; 
	text-decoration:none; 
	color:white;
}

a.viewOrder:hover{ text-decoration:underline;}




a.tools
{
	font-size:12px; 
	text-decoration:none;
	color:#000000;
}

a.tools:hover { text-decoration:underline;}

.yourAccountStore 
{
	font-size:<?=$baseText + 1 + $fontSizeChange?>pt; 
	font-weight:bold;
}

table.promoTable
{
	margin-top: 27px;
}

td.promoHeaderFooter
{
	background-color: #F0F0F0;
	border-color: #000000;
}

td.promoBullet
{
	font-size:<?=$baseText + $fontSizeChange?>pt; 
	color:<?=PRIMARY_COLOR?>;
	font-weight:bold;
	background-color: #F0F0F0;
	padding-left: 5px;
	padding-right: 5px;
	border-left: 1px solid #000000;
	border-right: 1px solid #000000;
}

div.promoTitle
{
	position: relative;
	font-size: 15pt;
	padding-left: 7px;
}

span.promoSmall
{
	font-size: 11pt;
}

div.promoApplyOuter
{
	position: absolute;
	top: -28px;
	right: 8px;
	width: 52px;
	height: 52px;
	background-color: #C8D96B;
	border: 1px solid #000000;
	-moz-border-radius: 27px;
	-webkit-border-radius: 27px;
	border-radius: 27px;
}

div.promoApplyInner
{
	padding: 9px 0;
	text-align: center;
}

a.promoApplyLink
{
	text-decoration: none;
	font-size: 11pt;
	color: #000000;
}

/* Product.php */
td.detailInvoiceLine 
{
	font-size:<?=$baseText + 3 + $fontSizeChange?>pt;
	font-weight:bold;
	color:<?=PRIMARY_COLOR?>;
}

td.slaveTableMsg 
{
	font-size:<?=$baseText + $fontSizeChange?>pt; 
	font-weight:bold; 
	color:<?=PRIMARY_COLOR?>;
}

td.slaveTableHeader 
{
	font-size:<?=$baseText + $fontSizeChange?>pt; 
	/*font-weight: bold; */
	color:#696969; 
	background-color:#ffffff;
}

td.slaveTableQty 
{
	font-size:<?=$baseText + $fontSizeChange?>pt; 
	color:<?=PRIMARY_COLOR?>; 
	background-color:#ffffff;
}

td.slaveTableReg 
{
	font-size:<?=$baseText + $fontSizeChange?>pt; 
	color:#000000; 
	background-color:#ffffff;
}

td.slaveTableList 
{
	font-size:<?=$baseText + $fontSizeChange?>pt; 
	color:#696969; 
	background-color:#ffffff;
}

td.slaveTableRegPrice 
{
	font-size:<?=$baseText + $fontSizeChange?>pt; 
	color:#333333;
	background-color:#ffffff;
}

td.slaveTableEndColumn 
{
	font-size:<?=$baseText + $fontSizeChange?>pt; 
	font-weight:bold; color:#000000;  
	background-color:#ffffff;
}

table.notes
{
	border-left: 1px black solid; 
	border-top: 1px black solid;
}

table.notes td
{
	border-right: 1px black solid; 
	border-bottom: 1px black solid;
}

/* Paging */
a.newSearch
{
	font-size:<?=$baseText + $fontSizeChange?>pt; 
	text-decoration:none;
	font-weight:bold;  
	color:<?=PRIMARY_COLOR?>;
}

a.newSearch:hover { text-decoration:underline;}

a.viewMode 
{
	font-size:<?=$baseText + $fontSizeChange?>pt; 
	font-weight:bold; 
	text-decoration:none; 
	color:<?=PRIMARY_COLOR?>;
}

a.viewMode:hover { text-decoration:underline;}

a.pagingBold
{
	font-size:<?=$baseText + $fontSizeChange?>pt;
	font-weight:bold; 
	text-decoration:none; 
	color:<?=PRIMARY_COLOR?>;
}

a.pagingBold:hover { color:#000000;}

a.pagingPageLink
{
	font-size:<?=$baseText + $fontSizeChange?>pt;
	font-weight:bold; 
	text-decoration:underline; 
	color:<?=PRIMARY_COLOR?>;
}

a.pagingPageLink:hover { color:#000000; }

.pagingPageNoLink
{
	font-size:<?=$baseText + $fontSizeChange?>pt;
	font-weight:bold; 
}

.pagingInactive
{
	font-size:<?=$baseText + $fontSizeChange?>pt;
	color:#696969;
}

td.numResultsFound 
{
	font-size:<?=$baseText + 1 + $fontSizeChange?>pt; 
	font-weight:bold; 
	color:#000000;
}

td.resultsLabel 
{
	font-size:<?=$baseText + $fontSizeChange?>pt; 
	color:#000000;
}

td.paging 
{
	font-size:<?=$baseText + 1 + $fontSizeChange?>pt; 
	color:#000000;
}

select.resultsSelect 
{
	font-family:arial; 
	font-size:<?=$baseText + $fontSizeChange?>pt; 
	font-weight:bold;
	border-style:solid; 
	border-width:1px; 
	background-color:#ffffff; 
	color:<?=PRIMARY_COLOR?>;
}

/* Complete Order Pages */
td.completeOrderActive 
{
	font-size:<?=$baseText + $fontSizeChange?>pt; 
	color:#CC6666; 
	font-weight:bold;
}

td.completeOrderFuture 
{
	font-size:<?=$baseText + $fontSizeChange?>pt; 
	color:#000000;
}

td.completeOrderMsg 
{
	font-size:13px; 
	font-weight:bold; 
	color:#000000;
}

span#step 
{
	font-size: 13px; 
	font-weight: bold; 
	color: black;
}

table.tableForm {border-top: 1px black solid;}

table.tableForm td 
{
	font-size: <?=$baseText + $fontSizeChange?>pt; 
	padding: 5px;
}

table.tableForm td.leftCell
{ 
	border-bottom: 1px black solid; 
	border-left: 1px black solid; 
	background-color: #696969; 
	color: white; 
	font-weight: bold; 
	border-right: 1px black solid;
}

table.tableForm td.rightCell
{ 
	border-bottom: 1px black solid; 
	border-right: 1px black solid; 
	background-color: #DDDDDD;
}

.seperator {border-top: 2px black solid;}

table.tableForm td.sectionTitle
{ 
	background-color: black; 
	color: white; 
	font-weight: bold;
}

table.tableForm td.white
{ 
	border: 1px black solid; 
	border-top: 0pt white solid; 
	color: black;
}

td#weightCost
{ 
	background-color: <?=PRIMARY_COLOR?>; 
	color: white;
}

input.textInput { border: 1px black solid;}

select.selectInput { border: 1px black solid;}

a.orderProgressLink 
{
	font-size:12px; 
	text-decoration:none; 
	font-weight:bold; 
	color:<?=PRIMARY_COLOR?>;
}

a.orderProgressLink:hover { text-decoration:underline;}

.orderProgress 
{ 
	font-size:12px; 
	text-decoration:none; 
	font-weight:bold; 
	color:#696969;
}

.summaryPo 
{ 
	font-size:12px; 
	text-decoration:none;
	font-weight:bold;
	color:#ffffff;
}

.orderSummary 
{ 
	font-size:12px;
	text-decoration:none;
	color:#000000;
}

.orderSummaryHeader
{
	position: relative;
	padding-top: 3px;
}

.orderSummaryHeaderImg
{
	position: absolute;
	top: 1px;
	right: 2px;
}

.orderSummarySubHeader
{
	color: #FFFFFF;
	font-size: 10pt;
	background: <?=PRIMARY_COLOR?> no-repeat 95% 100%;
	padding-left: 10px;
}

.orderSummarySubHeaderProgress
{
	background-image: url(<?=IMGDIR_INTERFACE?>arrow.png);
}

.orderSummarySubHeaderSecure
{
	background-image: url(<?=IMGDIR_INTERFACE?>lock.png);
}

.shipRate 
{ 
	font-size:12px;
	font-weight:bold;
	color:#000000;
}

.commitOrderSubTotalLabel 
{ 
	font-weight:bold;
	color:#ffffff;
	border-right: 1px black solid;
	border-bottom: 1px black solid;
	background-color:#000000;
}

.commitOrderSubTotal 
{
	font-weight:bold;
	color:#000000;
	border-bottom: 1px black solid;
	border-left: 1px black solid;
	border-right: 1px black solid;
} 
.commitOrderShipTotalLabel 
{ 
	font-weight:bold; 
	color:#ffffff; 
	border-right: 1px black solid; 
	border-bottom: 1px white solid; 
	background-color:#000000; 
}

.commitOrderShipTotal 
{
	color:#000000; 
	border-bottom: 1px black solid; 
	border-left: 1px black solid; 
	border-right: 1px black solid;
} 
.commitOrderTotalLabel 
{
	font-weight:bold;
	color:#ffffff;
	border-right: 1px black solid;
	background-color:#000000;
}

.commitOrderTotal
{
	color:#000000;
	font-weight:bold;
	border-bottom: 1px black solid;
	border-left: 1px black solid;
	border-right: 1px black solid;
} 
/* Order.php */
a.orderRecordLink 
{ 
	color: black;
	text-decoration: none
}

a.orderRecordLink:hover { text-decoration: underline;}

tr.orderRow {font-size: 15pt;}

tr.orderHeader 
{
	font-size:<?=$baseText + $fontSizeChange?>pt;
	font-weight:bold; color:#ffffff;
	background-color:#000000;
}

td.orderStd 
{
	font-size:<?=$baseText + $fontSizeChange?>pt;
	color:#000000;
	background-color:#DDDDDD;
	border-bottom: 1px black solid;
}

td.leftCorner
{
	border-left: 1px black solid;
	border-bottom: 1px black solid;
}

td.orderTotal 
{
	font-size:<?=$baseText + $fontSizeChange?>pt;
	font-weight:bold;
	color:<?=PRIMARY_COLOR?>;
	background-color:#ffffff;
	border: 1px black solid;
	border-top: 0pt black solid;
}

td.orderSubTotalLabel 
{
	font-size:<?=$baseText + $fontSizeChange?>pt;
	font-weight:bold;
	color:#ffffff;
	background-color:#000000;
	border: 1px black solid;
	border-right: 0pt black solid;
	border-top: 0pt black solid;
}

td.orderSubTotal 
{
	font-size:<?=$baseText + $fontSizeChange?>pt;
	font-weight:bold;
	color:#000000;
	background-color:#ffffff;
	border: 1px black solid;
	border-top: 0pt black solid;
}	
td.crossSellTitle
{
	background-color: <?=PRIMARY_COLOR?>;
	color: white;
	border: 1px black solid;
	border-top: 0pt black solid;
	border-right: 0pt black solid;
}

td.crossSellStd 
{
	font-size:<?=$baseText + $fontSizeChange?>pt;
	color:#000000;
	border-bottom: 1px black solid;
}

td.crossSellRight {border-left: 1px black solid;}

/* Forms */
td.formLabel 
{ 
	font-size:<?=$baseText + 1 + $fontSizeChange?>pt;
	color:#696969; font-weight:bold;
}

td.formLabelBlue
{
	font-size:<?=$baseText + 1 + $fontSizeChange?>pt;
	color:<?=PRIMARY_COLOR?>; font-weight:bold;
}

td.formHeader 
{ 
	font-size:<?=$baseText + 3 + $fontSizeChange?>pt;
	color:<?=PRIMARY_COLOR?>;
	font-weight:bold;
	border-bottom: 1px <?=PRIMARY_COLOR?> solid; 
}

.formInputSide
{
	font-size:<?=$baseText + $fontSizeChange?>pt;
	color:#696969; 
}

.formTextBox 
{
	font-size:<?=$baseText + $fontSizeChange?>pt;
	color:<?=PRIMARY_COLOR?>;
	font-weight:bold;
	border: 1px #000000 solid;
}

.formSelect 
{ 
	font-size:<?=$baseText + $fontSizeChange?>pt;
	color:<?=PRIMARY_COLOR?>; 
	font-weight:bold;
}

.formSubmit 
{ 
	font-size:<?=$baseText + $fontSizeChange?>pt;
	color:<?=PRIMARY_COLOR?>; 
	font-weight:bold;
}

/* Tabs */
.navTab {
	background: #D7D7D7;
	border: 1px solid #696969;
	border-bottom: 0px;
	-moz-border-radius: 10px 10px 0 0;
	-webkit-border-radius: 10px 10px 0 0;
	border-radius: 10px 10px 0 0;
	padding: 5px 8px;
}

.navTab a {
	color: #696969;
	font-size: 9pt;
	font-weight: bold;
	text-decoration: none;
}

.navTabEnabled {
	background: #FFFFFF;
	border: 1px solid #000000;
	border-bottom: 0px;
	-moz-border-radius: 10px 10px 0 0;
	-webkit-border-radius: 10px 10px 0 0;
	border-radius: 10px 10px 0 0;
	padding: 0 5px;

	color: #000000;
	font-size: 9pt;
	font-weight: bold;
	text-decoration: none;
}

/* Apply Pages */
.applyMsgHeader
{
	font-size:10pt;
	color:<?=PRIMARY_COLOR?>; 
	font-weight:bold;
}

.applyMsg
{
	padding:8px;
}

/* Legal Page */
p.bold
{ 
	font-weight: bold; 
	font-size: 8pt
}

ol.legalNumberOutline li{ padding-top: 15px}

/* Generic CSS */
.center{text-align: center;}

.hidden {
	display: none;
}

/* Clearfix */
.cf:before,
.cf:after {
    content: " "; 
    display: table; 
}

.cf:after {
    clear: both;
}

.cf {
    *zoom: 1;
}

/* Modal window */

.modal {
	display:none;
	
	position: fixed;
	z-index: 10;
	top: 0;
	left: 0;

	height:100%;
	width: 100%;

	-webkit-transform: translate3d(0,0,0,);
}

.active.modal {
	display: block;
}

.modalBG {
	position: absolute;
	top:0;
	left: 0;
	width:100%;
	height: 100%;
	background-color: #fff; /* ie fallback */ 
	background-color: rgba(255,255,255,0.8);
	z-index: 10;
}

.modalWindow {
	position: relative;
	z-index: 12;

	width: 600px;
	margin: 160px auto 0;

	background-color: #f4fbf3;
	border: 1px solid #333;
	border-radius: 4px;
	background-clip: padding-box;

	box-shadow: 0px 0px 15px rgba(0,0,0,0.3);
}

.modalHeader {
	background-color: #4e9e45;
	padding: 5px;
	color: white;
	font-size: 13pt;
	border-radius: 4px 4px 0 0;
	text-align: center;
}

.modalClose {
	font-size: 24px;
	float: right;
	cursor: pointer;
	display: block;
	margin-top: -2px;
}

.modalContent {
	padding: 16px 0;
	position: relative;
}

.modalLoader {
	display: none;
	position: absolute;
	background-image: url(data:image/gif;base64,R0lGODlhKwALAPEAAP///06eRanQpE6eRSH5BAkKAAAAIf4aQ3JlYXRlZCB3aXRoIGFqYXhsb2FkLmluZm8AIf8LTkVUU0NBUEUyLjADAQAAACwAAAAAKwALAAACMoSOCMuW2diD88UKG95W88uF4DaGWFmhZid93pq+pwxnLUnXh8ou+sSz+T64oCAyTBUAACH5BAkKAAAALAAAAAArAAsAAAI9xI4IyyAPYWOxmoTHrHzzmGHe94xkmJifyqFKQ0pwLLgHa82xrekkDrIBZRQab1jyfY7KTtPimixiUsevAAAh+QQJCgAAACwAAAAAKwALAAACPYSOCMswD2FjqZpqW9xv4g8KE7d54XmMpNSgqLoOpgvC60xjNonnyc7p+VKamKw1zDCMR8rp8pksYlKorgAAIfkECQoAAAAsAAAAACsACwAAAkCEjgjLltnYmJS6Bxt+sfq5ZUyoNJ9HHlEqdCfFrqn7DrE2m7Wdj/2y45FkQ13t5itKdshFExC8YCLOEBX6AhQAADs=);
	background-repeat: no-repeat;
	background-position: center center;
	background-color: #f4fbf3;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	border-radius: 4px;
}

.modal.loading .modalLoader{
	display: block;
}

/* Basket */

.basket {

	position: absolute;
	top: -120px;
	right: -3px;
	width: 354px;
}

.basketLink {
	float:right;
	display:block;
	background-color: #4e9e45;
	padding: 5px 8px;
	text-align:center;
	line-height:20px;
	color: white;
	font-size: 10pt;
	border: 1px solid #000;
	border-radius: 4px;
	cursor: pointer;
	text-decoration: none;

	-webkit-background-clip: padding-box;
	-moz-background-clip: padding-box;
	background-clip: padding-box;

	text-shadow: 1px 1px 0px #333;

	-webkit-transition: background-color 0.3s ease;
	-moz-transition: background-color 0.3s ease;
	-o-transition: background-color 0.3s ease;
	-ms-transition: background-color 0.3s ease;
	transition: background-color 0.3s ease;
}

.basketLink:hover {
	background-color: #4ebc45;
}

.basketItem:hover {
	background-color: #bde2b9 !important;
}

.basketItem:nth-child(odd) {
	background-color: rgb(224, 243, 222);
}

.basketImg {
	text-align: center;
	vertical-align: middle;
	width: 60px;
	padding-left: 16px;
}

.basketImg img {
	height:40px;
	border: 1px solid #ccc;  padding: 5px;  background-color: #fff;
	margin: 5px;
}

td.orderItemList 
{
	font-size: 10pt; 
	color:#000000;
	padding: 8px;
}

td.orderItemList:hover {
}

a.orderListLink 
{
	font-size: 12pt; 
	text-decoration:none; 
	color:#000000;
	margin-left: 16px;
	display: inline-block;
	width: 390px;
	overflow: hidden;
	white-space: nowrap;
	text-overflow: ellipsis;
}

a.orderListLink:hover {
	text-decoration: underline;
}

.basketOptions {
	text-align: right;
	padding-right: 16px;
	width:40px;
}

.btn.removeBtn {
	font-size: 16px;
	padding: 8px;
	opacity: 0.5;
}

.basketItem:hover .removeBtn {
	opacity: 1;
}

.btn.removeBtn:hover {
	background-color: #f44;
}

.btn.basketBtn {
	display: block;
	padding: 8px;
	width: 200px;
	margin-top: 16px;
	background-color: #4e9e45;
	font-size: 13pt;
}

.btn.basketBtn:hover, .btn.basketBtn:active{
	background-color: #4ebc45;
}

/* Animations */

.animated{
	-webkit-animation-fill-mode:both;
	-moz-animation-fill-mode:both;
	-ms-animation-fill-mode:both;
	-o-animation-fill-mode:both;
	animation-fill-mode:both;

	-webkit-animation-duration: 0.6s;
	-moz-animation-duration:0.6s;
	-ms-animation-duration:0.6s;
	-o-animation-duration:0.6s;
	animation-duration:0.6s;}


@-moz-keyframes shake {
	0%, 100% {-moz-transform: translateX(0);}
	10%, 30%, 50%, 70%, 90% {-moz-transform: translateX(-10px);}
	20%, 40%, 60%, 80% {-moz-transform: translateX(10px);}
}

@-o-keyframes shake {
	0%, 100% {-o-transform: translateX(0);}
	10%, 30%, 50%, 70%, 90% {-o-transform: translateX(-10px);}
	20%, 40%, 60%, 80% {-o-transform: translateX(10px);}
}

@keyframes shake {
	0%, 100% {transform: translateX(0);}
	10%, 30%, 50%, 70%, 90% {transform: translateX(-10px);}
	20%, 40%, 60%, 80% {transform: translateX(10px);}
}

.shake {
	-webkit-animation-name: shake;
	-moz-animation-name: shake;
	-o-animation-name: shake;
	animation-name: shake;
}
@-webkit-keyframes fadeInDown {
	0% {
		opacity: 0;
		-webkit-transform: translateY(-20px);
	}
	
	100% {
		opacity: 1;
		-webkit-transform: translateY(0);
	}
}

@-moz-keyframes fadeInDown {
	0% {
		opacity: 0;
		-moz-transform: translateY(-20px);
	}
	
	100% {
		opacity: 1;
		-moz-transform: translateY(0);
	}
}

@-o-keyframes fadeInDown {
	0% {
		opacity: 0;
		-o-transform: translateY(-20px);
	}
	
	100% {
		opacity: 1;
		-o-transform: translateY(0);
	}
}

@keyframes fadeInDown {
	0% {
		opacity: 0;
		transform: translateY(-20px);
	}
	
	100% {
		opacity: 1;
		transform: translateY(0);
	}
}

.fadeInDown {
	-webkit-animation-name: fadeInDown;
	-moz-animation-name: fadeInDown;
	-o-animation-name: fadeInDown;
	animation-name: fadeInDown;
}
@-webkit-keyframes fadeOut {
	0% {
		opacity: 1;
	}
	
	100% {
		opacity: 0;
	}
}
@-moz-keyframes fadeOut {
	0% {
		opacity: 1;
	}
	
	100% {
		opacity: 0;
	}
}
@-o-keyframes fadeOut {
	0% {
		opacity: 1;
	}
	
	100% {
		opacity: 0;
	}
}
@keyframes fadeOut {
	0% {
		opacity: 1;
	}
	
	100% {
		opacity: 0;
	}
}

.fadeOut {
	-webkit-animation-name: fadeOut;
	-moz-animation-name: fadeOut;
	-o-animation-name: fadeOut;
	animation-name: fadeOut;
}


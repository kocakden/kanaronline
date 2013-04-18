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
body 
{
	font-family: arial, helvetica, verdana;
	margin: 0px;
	background-color: white;
	color: black;
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

/*a:hover 
{ 
	font-size:<?=$baseText + $fontSizeChange?>pt; 
	text-decoration:underline; 
	color:<?=PRIMARY_COLOR?>;
}*/

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
	margin: 0;
	background-color: <?=SEARCH_COLOR?>;
}

tr#newSearch 
{
	color: <?=PRIMARY_COLOR?>; 
	font-weight: bold;
}

tr#newSearch td {font-size: <?=$baseText + 2 + $fontSizeChange?>pt;}

td.topRightNav
{
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

td.topRightNav a:hover {color: white;}

.searchSelect 
{  
	font-size:<?=$baseText + 1 + $fontSizeChange?>pt; 
	color:<?=PRIMARY_COLOR?>; 
	font-weight:bold; 
}

.searchTextBox 
{ 
	font-size:<?=$baseText + 1 + $fontSizeChange?>pt;
	color:#333333; 
	font-weight:bold; 
	border: 1px <?=PRIMARY_COLOR?> solid;
}

/* Info Boxes */
td.infoBoxHeader
{
	color: #FFFFFF;
	font-size: 10pt;
	font-weight: bold;
	background-color: <?=PRIMARY_COLOR?>;
	padding-left: 10px;
	-moz-border-radius: 10px 10px 0 0;
	-webkit-border-radius: 10px 10px 0 0;
	border-radius: 10px 10px 0 0;
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
	-moz-border-radius: 0 0 10px 10px;
	-webkit-border-radius: 0 0 10px 10px;
	border-radius: 0 0 10px 10px;
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

.resultsDivider
{
	border-top: 1px solid <?=PRIMARY_COLOR?>;
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

td.orderItemList 
{
	font-size:<?=$baseText + $fontSizeChange?>pt; 
	color:#000000;
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
	color:#000000;
}

a.viewOrder:hover{ text-decoration:underline;}

a.orderListLink 
{
	font-size:<?=$baseText + $fontSizeChange?>pt; 
	text-decoration:none; 
	color:#000000;
}

a.orderListLink:hover { text-decoration:underline;}

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
td.navTab {
	background: #D7D7D7;
	border: 1px solid #696969;
	border-bottom: 0px;
	-moz-border-radius: 10px 10px 0 0;
	-webkit-border-radius: 10px 10px 0 0;
	border-radius: 10px 10px 0 0;
	padding: 0 5px;
}

td.navTab a {
	color: #696969;
	font-size: 9pt;
	font-weight: bold;
	text-decoration: none;
}

td.navTabEnabled {
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

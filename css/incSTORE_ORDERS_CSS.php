<?php
// $Id: incSTORE_ORDERS_CSS.php 2501 2009-01-07 19:06:44Z eric $

include_once("../../global/globalInitClose.php");

initCSS();

if ($store)
	$fontSizeChange = $store->getFontSize();
else
	$fontSizeChange = 0;
?>
tr.order
{
	font-family: arial;
	font-size: <?=9 + $fontSizeChange?>pt;
}

td.orderLeft
{
	border-bottom: 1px #333333 solid;
	border-left: 1px #333333 solid;
}

td.orderRight
{
	border-bottom: 1px #333333 solid;
	border-left: 1px #333333 solid;
	border-right: 1px #333333 solid;
}

tr.cartonSummary
{
	font-family: arial;
	font-size: <?=9 + $fontSizeChange?>pt;
	color: #ffffff;
}

td.cartonSummaryLeft
{
	background-color: #696969;
	border-left: 1px #333333 solid;
}

td.cartonSummaryNone
{
	background-color: #696969;
}

td.cartonSummaryRight
{
	background-color: #696969;
	border-right: 1px #333333 solid;
}

tr.cartonDetailsHeader
{
	font-family: arial;
	font-size: <?=9 + $fontSizeChange?>pt;
	color: #333333;
}

td.cartonDetailsHeaderLeftEnd
{
	background-color: #DDDDDD;
	border-left: 1px #333333 solid;
}

td.cartonDetailsHeaderLeft
{
	background-color: #DDDDDD;
	border-left: 1px #ffffff solid;
}

td.cartonDetailsHeaderRight
{
	background-color: #DDDDDD;
	border-left: 1px #ffffff solid;
	border-right: 1px #333333 solid;
}

tr.cartonDetail
{
	font-family: arial;
	font-size: <?=9 + $fontSizeChange?>pt;
	color: #333333;
}

td.cartonDetailLeftEnd
{
	border-left: 1px #333333 solid;
}

td.cartonDetailLeft
{
	border-left: 1px #DDDDDD solid;
}

td.cartonDetailRight
{
	border-left: 1px #DDDDDD solid;
	border-right: 1px #333333 solid;
}

td.detailSpacerLeft
{
	border-top: 1px #DDDDDD solid;
	border-left: 1px #333333 solid;
}

td.detailSpacerRight
{
	border-top: 1px #DDDDDD solid;
	border-right: 1px #333333 solid;
}

td.track
{
	background-color: <?=PRIMARY_COLOR?>;
	border-top: 1px #333333 solid;
	border-left: 1px #333333 solid;
	border-right: 1px #333333 solid;
	border-bottom: 1px #333333 solid;
}

tr.orderDetailsHeader
{
	font-family: arial;
	font-size: <?=9 + $fontSizeChange?>pt;
	color: #333333;
}

td.orderDetailsHeaderLeftEnd
{
	background-color: #DDDDDD;
	border-left: 1px #333333 solid;
}

td.orderDetailsHeaderLeft
{
	background-color: #DDDDDD;
	border-left: 1px #ffffff solid;
}

td.orderDetailsHeaderRight
{
	background-color: #DDDDDD;
	border-left: 1px #ffffff solid;
	border-right: 1px #333333 solid;
}

tr.orderDetail
{
	font-family: arial;
	font-size: <?=9 + $fontSizeChange?>pt;
	color: #333333;
}

td.orderDetailLeftEnd
{
	border-left: 1px #333333 solid;
}

td.orderDetailLeft
{
	border-left: 1px #DDDDDD solid;
}

td.orderDetailRight
{
	border-left: 1px #DDDDDD solid;
	border-right: 1px #333333 solid;
}

td.orderDetailSpacerLeftEnd
{
	border-bottom: 1px #333333 solid;
}

td.orderDetailSpacerLeft
{
	border-top: 1px #DDDDDD solid;
	border-bottom: 1px #333333 solid;
	border-left: 1px #333333 solid;
}

td.orderDetailSpacerRight
{
	border-top: 1px #DDDDDD solid;
	border-bottom: 1px #333333 solid;
	border-right: 1px #333333 solid;
}

td.saveFormLeft
{
	background-color: <?=PRIMARY_COLOR?>;
	font-family: arial;
	font-weight: bold;
	font-size: <?=9 + $fontSizeChange?>pt;
	color: #ffffff;
	border-left: 1px #333333 solid;
	border-bottom: 1px #333333 solid;
}

td.saveForm
{
	background-color: <?=PRIMARY_COLOR?>;
	border-bottom: 1px #333333 solid;
}

td.saveFormRight
{
	background-color: <?=PRIMARY_COLOR?>;
	font-family: arial;
	font-weight: bold;
	font-size: <?=9 + $fontSizeChange?>pt;
	color: #ffffff;
	border-right: 1px #333333 solid;
	border-bottom: 1px #333333 solid;
}

a.saveFormLink
{
	font-family: arial;
	font-weight: bold;
	color: #ffffff;
	font-size: <?=9 + $fontSizeChange?>pt;
	text-decoration: none;
}

a.saveFormLink:hover
{
	font-family: arial;
	font-weight: bold;
	color: #ffffff;
	font-size: <?=9 + $fontSizeChange?>pt;
	text-decoration: underline;
}

a.saveFormSubmitLink
{
	font-family: arial;
	font-weight: bold;
	color: #ADC97B;
	font-size: <?=9 + $fontSizeChange?>pt;
	text-decoration: none;
}

a.saveFormSubmitLink:hover
{
	font-family: arial;
	font-weight: bold;
	color: #ADC97B;
	font-size: <?=9 + $fontSizeChange?>pt;
	text-decoration: underline;
}

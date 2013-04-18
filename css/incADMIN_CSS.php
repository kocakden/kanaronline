<?php
// $Id: incADMIN_CSS.php 2924 2009-11-25 01:51:44Z grant $

include_once("../../global/globalInitClose.php");

initCSS();

$baseText = 8;
$fontSizeChange = 0;
?>
body 
{
	font-family: arial, helvetica, verdana;
	font-size: 8pt;
	margin: 0px;
}

img 
{
	border: 0pt black solid;
}

a 
{
	text-decoration: underline;
	
	color: #66759C;
}

a.plain
{
	color: #000000;
	text-decoration: none;
}

td.std
{
	font-size: 8pt;
}

#errorMsg
{
	font-size: 10pt;
	font-weight: bold;
	color: #CC6666;
}

#successMsg
{
	font-size: 10pt;
	font-weight: bold;
	color: #66759C;
}

table.statusAlert
{
	background: #BFCBE9;
}

td.statusAlertText
{
	font-size: 9pt;
	font-weight: bold;
}

a.statusAlertLink
{
	color: #000000;
}

td.footer
{
	font-size: 8pt;
}

td.buttonBarTop
{
	border-bottom: 1px solid #000000;
}

td.buttonBarBot
{
	border-top: 1px solid #000000;
}

/* Header */

td.topLinks
{
	font-size: 9pt;
}

a.topLink
{
	color: #66759C;
	font-weight: bold;
	text-decoration: none;
}

a.topLink:hover
{
	color: #000000;
}

tr.adminTabs
{
	font-size: 11pt;
	font-weight: bold;
}

td.tabOn
{
	color: #FFFFFF;
	background: #66759C;
	border-top: 1px solid black;
	padding: 4px;
}

td.tabOff
{
	color: #696969;
	border-top: 1px solid #696969;
	border-bottom: 1px solid black;
	background: #DDDDDD;
	padding: 4px;
	cursor: pointer;
}

td.tabOff a
{
	color: #696969;
	cursor: pointer;
	cursor: pointer;
	text-decoration: none;
}

td.tabOff a:hover
{
	color: black;
	text-decoration: none;
}

td.tabHover
{
	color: #000000;
	border-top: 1px solid #696969;
	border-bottom: 1px solid black;
	background: #DDDDDD;
	padding: 4px;
	cursor: pointer;
}

td.tabHover a
{
	color: black;
	cursor: pointer;
	cursor: pointer;
	text-decoration: none;
}

td.tabLeft
{
	border-left: 1px solid black;
}

td.tabRight
{
	border-right: 1px solid black;
}

td.tabEnd
{
	border-bottom: 1px solid black;
}

td.menuRow
{
	background: #66759C;
	border-bottom: 1px solid black;
}

td.mrLeft
{
	border-left: 1px solid black;
}

td.mrRight
{
	border-right: 1px solid black;
}

td.menuCell
{
	padding-bottom: 0px;
	padding-top: 2px;
	padding-left: 4px;
	padding-right: 4px;
	background-color: #66759C;
}

td.menuCellActive
{
	padding-bottom:0px;
	padding-top:2px;
	padding-left:4px;
	padding-right:4px;
	background-color: #454545;
	cursor: pointer;
}

td.menuLinkCell
{
	padding-bottom: 0px;
	padding-top: 2px;
	padding-left: 2px;
	padding-right: 0px;
	
	font-size: 10pt;
	font-weight: bold;
	color: #ffffff;
	text-decoration: none;
	cursor: default;
}

td.menuLinkCellActive
{
	background-color: #66759C;
}

a.menu
{
	color: #ffffff;
	text-decoration: none;
	font-size: 10pt;
	font-weight: bold;
}

a.menu:hover
{
	color: #ffffff;
	text-decoration: none;
}

tr.headerBarRow
{
	color: #ffffff;
	background: #66759C;
	font-size: 10pt;
}

td.headerBarCell
{
	border-bottom: 1px solid black;
	padding: 4px;
}

.child
{
	position: absolute;
	background-color: #454545;
	border-left: 1px #454545 solid;
	border-right: 1px #454545 solid;
	border-bottom: 1px #454545 solid;
	border-top: 1px #454545 solid;

	visibility: hidden;
}

/* Page */

.pageHeader
{
	font-size: 20pt;
	color: #000000;
	padding: 2px;
}

tr.phTabs
{
	font-size: 9pt;
	font-weight: bold;
}

td.phTabOn
{
	background: #ffffff;
	border-top: 1px solid black;
	text-align: center;
	padding: 4px;
}

td.phTabOff
{
	color: #696969;
	background: #DDDDDD;
	border-top: 1px solid black;
	border-bottom: 1px solid black;
	text-align: center;
	padding: 4px;
	cursor: pointer;
	cursor: pointer;
}

td.phTabHover
{
	color: #000000;
	background: #DDDDDD;
	border-top: 1px solid black;
	border-bottom: 1px solid black;
	text-align: center;
	padding: 4px;
	cursor: pointer;
	cursor: pointer;
}

td.phTabLeft
{
	border-left: 1px solid black;
}

td.phTabRight
{
	border-right: 1px solid black;
}

td.headerInfo
{
	font-size: 9pt;
	font-weight: bold;
	color: #565656;
	padding-left: 10px;
}

.headerLabel
{
	font-weight: bolder;
	color: #66759C;
}

/* Dialog Boxes */

td.dialogHeader
{
	font-size: 11pt;
	font-weight: bold;
	color: #565656;
	background: #DDDDDD;
	border-bottom: 1px solid #696969;
	border-top: 1px solid #696969;
}

td.label
{
	font-size: 9pt;
	font-weight: bold;
	background: #DDDDDD;
	color: #000000;
}

td.value
{
	font-size: 9pt;
	/*font-weight: bold;*/
	color: #000000;
}

/* Active Element Display */

td.aeHeader
{
	font-size: 9pt;
	font-weight: bold;
	background: #DDDDDD;
	border-bottom: 1px solid #696969;
}

tr.aeNavOff
{
	font-size: 9pt;
	font-weight: bold;
	background: #DDDDDD;
	

}

tr.aeNavOn
{
	font-size: 9pt;
	font-weight: bold;
	color: #ffffff;
	background: #696969;
	cursor: pointer;
	cursor: pointer;
}

td.aeHBot

{
	border-bottom: 1px solid #696969;
}

td.aeHTop
{
	border-top: 1px solid #696969;
}

td.aeHLeft
{
	border-left: 1px solid #696969;
}

td.aeHRight
{
	border-right: 1px solid #696969;
}

td.aeMain
{
	font-size: 8pt;
	border-bottom: 1px solid #696969;
	color: #565656;
	border-left: 1px solid #696969;
	border-right: 1px solid #696969;
}

td.aeInside
{
	font-size: 8pt;
	color: #565656;
}

td.aeInsdSale
{
	font-size: 8pt;
	color: #565656;
	background: #E8EFC4;
}

td.aeInsdAttn
{
	font-size: 8pt;
	color: #565656;
	background: #F1DDDD;
}

td.aeInsdBot
{
	border-bottom: 1px solid #DDDDDD;
}

.aeLabel
{
	font-weight: bold;
}

a.aeLinkLrg
{
	color: #000000;
	text-decoration: none;
}

a.aeLinkLrg:hover
{
	color: #000000;
	text-decoration: underline;
}

a.aeLink
{
	color: #565656;
}

a.aeLink:hover
{
	color: #000000;
}

a.aeLinkPlain
{
	color: #565656;
	text-decoration: none;
}

a.aeLinkPlain:hover
{
	color: #66759C;
}

/* Order Overview */

tr.orderOverviewRow
{
	font-size: 8pt;
	color: #454545;
}

.orderOverviewLabel
{
	font-weight: bold;
}

a.orderOverviewLink
{
	color: #454545;
	text-decoration: underline;
}

a.orderOverviewLink:hover
{
	color: #000000;
}

/* Table */

tr.tableHeaderRow
{
	font-size: 9pt;
	font-weight: bold;
	vertical-align: middle;
	background-color: #cccccc;
}

td.tableHeaderCellNoSort
{
	padding-left: 6px;
	padding-right: 6px;
	padding-top: 3px;
	padding-bottom: 3px;
}

td.tableHeaderCellSort
{
	padding-left: 6px;
	padding-right: 0px;
	padding-top: 3px;
	padding-bottom: 3px;
}

td.tableHeaderArrowCell
{
	padding-left: 0px;
	padding-right: 6px;
	padding-top: 3px;
	padding-bottom: 3px;
}

td.thcOn
{
	color: #FFFFFF;
	background-color: #565656;
	border-top: 1px solid #565656;
	border-bottom: 1px solid #565656;
}

td.thcOff
{
	color: #565656;
	border-top: 1px solid #565656;
	border-bottom: 1px solid #565656;
}

td.tableHeaderLeft
{
	border-left: 1px solid #565656;
}

td.tableHeaderRight
{
	border-right: 1px solid #565656;
}

a.tableHeaderLink
{
	color: #565656;
}

a.tableHeaderLink:hover
{
	color: #66759C;
}

a.tableHeaderActiveLink
{
	color: #000000;
}

a.tableHeaderActiveLink:hover
{
	color: #66759C;
}

tr.tableRow
{
	font-size: 8pt;
	background: #ffffff;
	vertical-align: middle;
}

tr.shaded
{
	background: #f2f2f3;
}

tr.low
{
	background: #FFFFFF;
}

tr.med
{
	background: #F1DDDD;
}
	

tr.hi
{
	background: #E3ABAB;
}

tr.pa
{
	/*font-weight: bold;*/
	background: #DBE3F6;
}

tr.paHi
{
	/*font-weight: bold;*/
	background: #F1EFBB;
}

tr.tableAttnRow
{
	font-size: 8pt;
	background: #F1DDDD;
	vertical-align: middle;
}

tr.totalRow
{
	background: #565656;
	color: #FFFFFF;
	font-size: 10pt;
	vertical-align: middle;
	font-weight: bold;
}

td.tableCell
{
	border-bottom: 1px solid #565656;
	
	padding-left: 6px;
	padding-right: 6px;
	padding-top: 3px;
	padding-bottom: 3px;
}

td.tcLeft
{
	border-left: 1px solid #565656;
}

td.tcRight
{
	border-right: 1px solid #565656;
}

td.tableTotalCell
{
	background: #565656;
	color: #ffffff;
	
	padding-left: 6px;
	padding-right: 6px;
	padding-top: 3px;
	padding-bottom: 3px;
}

/* Legends */

table.legendBorder
{
	border-left: 1px solid #565656;
	border-right: 1px solid #565656;
	border-top: 1px solid #565656;
	border-bottom: 1px solid #565656;
}

td.legendTitle
{
	color: #696969;
	font-size: 9pt;
	font-weight: bold;
	border-bottom: 1px solid #565656;
	padding-left: 2px;
	padding-right: 2px;
	padding-top: 2px;
	padding-bottom: 2px;
}

td.legendTitleBorder
{
	color: #FFFFFF;
	font-size: 9pt;
	font-weight: bold;
	background: #565656;
	padding-left: 2px;
	padding-right: 2px;
	padding-top: 2px;
	padding-bottom: 2px;
}

td.legendKey
{
	color: #696969;
	font-size: 8pt;
	font-weight: bold;
}

td.legendColorKey
{
	border-left: 1px solid #000000;
	border-right: 1px solid #000000;
	border-top: 1px solid #000000;
	border-bottom: 1px solid #000000;
}

td.legendValue
{
	color: #696969;
	font-size: 8pt;
}

/* Paging and Results */

.resultsLabel
{
	font-size: <?=$baseText + $fontSizeChange?>pt;
	/*font-weight: bold;*/

}

.resultsTotal
{
	font-size: <?=$baseText + $fontSizeChange + 1?>pt;
}

a.tableLink
{
	color: #000000;
}

a.tableLink:hover
{
	text-decoration: none;
}

a.pagingBold
{
	font-size: <?=$baseText + $fontSizeChange?>pt;
	font-weight: bold;
	
	text-decoration: none;
	
	color: #66759C;
}

a.pagingBold:hover
{
	color: #000000;
}

a.pagingPageLink
{
	font-size: <?=$baseText + $fontSizeChange?>pt;
	font-weight: bold;
	
	text-decoration: underline;
	
	color: #66759C;
}

a.pagingPageLink:hover
{
	color: #000000;
	
}

.pagingPageNoLink
{
	font-size: <?=$baseText + $fontSizeChange?>pt;
	font-weight: bold;
	

}

.pagingInactive
{
	font-size: <?=$baseText + $fontSizeChange?>pt;
	color: #696969;
}

/* Order.php */

a.orderRecordLink
{
	color: black;
	text-decoration: none

}

a.orderRecordLink:hover
{
	text-decoration: underline;
}

tr.orderHeader
{
	font-family: arial, helvetica, verdana;
	font-size: 8pt;
	font-weight: bold;
	color: #ffffff;
	background-color: #000000;
}

tr.orderHeaderLight
{
	background-color: #DDDDDD;
	font-weight: bold;
	font-size: 8pt;
	color: #696969;
}

tr.orderRow 
{
	font-size: 8pt;
	background-color: #DDDDDD;
}

/*
table.tableborder
{
	border: 1px black solid;	

}

table.qtyRow
{
	

}

*/

tr.attn
{
	/*background-color: #F1DDDD;*/
	/*background-color: #BFCBE9;*/
	/*background-color: #CAD6F6;*/
	/*background-color: #CCD6EE;*/
	background-color: #DBE3F6;
}

tr.orderRowHighlighted
{
	font-size: 8pt;
	background-color: #F1DDDD;
}

td.orderStd 
{
	/*background-color: #DDDDDD;
	*/
	border-bottom: 1px black solid;
}

td.orderStdAlert
{
	font-weight: bold;
	color: #CC6666;
	border-bottom: 1px black solid;
}

td.orderWhite
{
	background-color: #FFFFFF;
	border-bottom: 1px black solid;
}

td.orderWhiteLight
{
	background-color: #FFFFFF;
	border-bottom: 1px #DDDDDD solid;
}

td.rightCorner
{
	border-right: 1px black solid;
	

}

td.rightCornerLight
{
	border-right: 1px #DDDDDD solid;
	

}

td.leftCorner
{
	border-left: 1px black solid;
	
	border-bottom: 1px black solid;
	

}

td.leftCornerLight
{
	border-left: 1px #DDDDDD solid;
	
	border-bottom: 1px #DDDDDD solid;
	

}

td.orderExtended 
{
	color: #565656;
	
	background-color: #ffffff;
	font-size: 9pt;
	font-weight: bold;
	
	border: 1px black solid;
	
	border-top: 0pt black solid;
}

td.orderSubTotalLabel 
{
	font-size: 9pt;
	
	font-weight: bold;
	
	color: #ffffff;
	
	background-color: #696969;
	
	border: 1px black solid;
	
	border-right: 0pt black solid;
	
	border-top: 0pt black solid;
}

td.orderSubTotal 
{
	font-size: 9pt;
	
	font-weight: bold;
	
	background-color: #ffffff;
	
	border: 1px black solid;
	
	border-top: 0pt black solid;
}

td.orderTotalLabel 
{
	font-size: 9pt;
	
	font-weight: bold;
	
	color: #ffffff;
	
	background-color: #000000;
	
	border: 1px black solid;
	
	border-right: 0pt black solid;
	
	border-top: 0pt black solid;
}

td.orderTotal 
{
	font-size: 9pt;
	
	font-weight: bold;
	color: #000000;
	
	background-color: #66759c;
	
	border: 1px black solid;
	
	border-top: 0pt black solid;
}

	
input.text.hiddenFormField
{
	background-color: #ffffff;
	
	font-family: arial;
	
	font-size: 8pt;
	
	color: #66759C;
	
	border-style: none;
}

input.text.detailHiddenCenter 
{
	text-align: center;
	
	font-family: arial;
	
	font-size: 8pt;
	
	border-style: none;
	
	border-width: 0px;
	background: #DDDDDD;
	

}

input.text.detailHiddenRight 
{
	text-align: right;
	
	font-family: arial;
	
	font-size: 8pt;
	
	border-style: none;
	
	border-width: 0px;
	background: #DDDDDD;
	

}

input.text.detailHiddenRightExt 
{
	text-align: right;
	
	font-family: arial;
	

	font-size: 8pt;
	
	border-style: none;
	
	border-width: 0px;
}

input.text.detailHiddenSubTotal 
{
	text-align: right;
	
	font-family: arial;
	
	font-size: 9pt;
	
	font-weight: bold;
	border-style: none;
	
	border-width: 0px;
}

input.text.detailHiddenTotal 
{
	text-align: right;
	
	font-family: arial;
	
	font-size: 9pt;
	
	color: #ffffff;
	font-weight: bold;
	border-style: none;
	
	border-width: 0px;
	background: #000000;
}

input.detailVisibleCenter 
{
	background-color: #ffffff;
	
	text-align: center;
	
	font-family: arial;
	
	font-size: 8pt;
	
	border-style: solid;
	
	border-width: 1px;
	

}

input.text.detailVisibleLeft 
{
	background-color: #ffffff;
	
	text-align: left;
	
	font-family: arial;
	
	font-size: 8pt;
	
	border-style: solid;
	
	border-width: 1px;
	

}

input.text.detailVisibleRight 
{
	background-color: #ffffff;
	
	text-align: right;
	
	font-family: arial;
	
	font-size: 8pt;
	
	border-style: solid;
	
	border-width: 1px;
	

}

input.text.detailOverridenPrice 
{
	background-color: #ffffff;
	
	text-align: right;
	
	font-family: arial;
	
	font-size: 8pt;
	
	color: #CC6666;
	
	border-style: none;
	

}

input.text.detailExtendedPrice 
{
	background-color: #ffffff;
	
	text-align: right;
	
	font-family: arial;
	
	font-size: 8pt;
	
	color: #66759C;
	
	border-style: none;
	

}

td.addendum
{
	background-color: #BFCBE9;
	font-size: 8pt;
	font-weight: bold;
}

.statusMessage 
{
	font-family: arial;
	
	font-size: 10pt;
	
	font-weight: bold;
	
	color: #696969;
	

}

td.statusMessageFrame
{
	
	border-top: 1px solid #DDDDDD;
	border-bottom: 1px solid #DDDDDD;
	border-left: 1px solid #DDDDDD;
	border-right: 1px solid #DDDDDD;
}

/* Form Elements */

td.formHeader 
{
	font-size: 10pt;
	
	color: #666666;
	
	border-bottom: 
	1pt #666666 solid;
	

}

.formInputSide
{
	font-size: 8pt;
	color: #696969;
}

.formLabel 
{
	font-size: 9pt;
	font-weight: bold;
	
	color: #444444;
}

select.formSelect
{
	font-size: 8pt;
	font-weight: bold;
}

select.formSelectSmall
{
	font-size: 6.5pt;
	font-weight: bold;
}

select.large
{
	font-size: 9pt;
}

input.formTextBox
{
	font-size: 9pt;
	font-weight: bold;
	border: 1px solid black;
}

input.formTextBoxDisabled
{
	font-size: 9pt;
	font-weight: bold;
	border: 1px solid gray;
	background-color: transparent;
	/*background-color: gray;*/
	/*opacity: .2;
	filter: alpha(opacity=20);*/
}

input.formTextBoxAlert
{
	font-size: 9pt;
	font-weight: bold;
	border: 1px solid black;
	background-color: #CC6666;
}

input.submit.formSubmit
{
	font-size: 9pt;
	font-weight: bold;
	color: #000000;
}

textarea.formTextArea
{
	font-family: arial;
	font-size: 10pt;
	border: 1px solid black;
}

textarea.formTextAreaDisabled
{
	font-size: 10pt;
	border: 1px solid gray;
	/*border: 1px solid transparent;*/
	background-color: transparent;
}

textarea.disabled
{
	border: 1px #DDDDDD solid;
}

input.disabled
{
	border: 1px #DDDDDD solid;
}

.disabledLabel
{
	color: #696969;
}

/* Order Carton / Shipping Pages */

td.cartonHeader
{
	font-size: 10pt;
	font-weight: bold;
	background: #DDDDDD;
	border-bottom: 1px solid #696969;
	border-top: 1px solid #696969;
	border-left: 1px solid #696969;
	border-right: 1px solid #696969;
}

td.activeCartonHeader
{
	font-size: 10pt;
	font-weight: bold;
	background: #E8EFC4;
	border-bottom: 1px solid #696969;
	border-top: 1px solid #696969;
	border-left: 1px solid #696969;
	border-right: 1px solid #696969;
}

.cartonHeaderLight
{
	color: #696969;
}

td.item
{
	font-size: 9pt;
	border-bottom: 1px solid #696969;
	border-left: 1px solid #696969;
	border-right: 1px solid #696969;
}

td.activeItem
{
	font-size: 9pt;
	background: #E8EFC4;
	border-left: 1px solid #696969;
	border-right: 1px solid #696969;
	border-bottom: 1px solid #696969;
	cursor: pointer;
	cursor: pointer;
}

table.activeCarton
{
	background: #E8EFC4;
	cursor: move;
}

.shipDetailLabel
{
	font-weight: bold;
}

td.shipDetail
{
	line-height: 15pt;
	font-size: 12pt;
}

/* Misc */

tr.statusAlertAttn
{
	background: #E3ABAB;
	font-size: 9pt;
	font-weight: bold;	

}

td.viewLabel
{
	font-size: 9pt;
	font-weight: bold;
}

td.viewData
{
	font-size: 9pt;
}

td.mimicLink
{
	cursor: pointer;
	cursor: pointer;
}

/*tr.tableHeaderOutline
{
	background-color: #DDDDDD;
	color: #333333;
	font-family: arial;
	font-size: 8pt;
	border-left: 1px #DDDDDD solid;
	border-top: 1px #DDDDDD solid;
	border-right: 1px #DDDDDD solid;
	border-bottom: 1px #DDDDDD solid;
}
 
td.tableHeaderOutlineLeftVert
{
	border-left: 1px #DDDDDD solid;
	
}
 */

tr.tableHeaderOutline
{
	background-color: #333333;
	color: #ffffff;
	font-family: arial;
	font-size: 8pt;
	border-left: 1px #333333 solid;
	border-top: 1px #333333 solid;
	border-right: 1px #333333 solid;
	border-bottom: 1px #333333 solid;
}
 
td.tableHeaderOutlineLeftVert
{
	border-left: 1px #333333 solid;
	
}
 

/*td.formHeader
{
	font-family: arial;
	font-size: 9pt;
	color: #666666;
	font-weight: bold;
	background-color: #DDDDDD;
	border-left: 1px #666666 solid;
	border-top: 1px #666666 solid;
	border-right: 1px #666666 solid;
	border-bottom: 1px #666666 solid;
	
}
*/

td.subHeader
{
	background-color: #66759C;
	color: #ffffff;
	font-family: arial;
	font-size: 9pt;
	font-weight: bold;
	border-left: 1px black solid;
	border-top: 1px black solid;
	border-right: 1px black solid;
	border-bottom: 1px black solid;
}

/* Inventory Pages */

a.location
{
	font-size: 12px;
	text-decoration: none;
	color: #000000;
}

a.location:hover
{
	color: #66759C;
}

a.catalogInvoiceLine
{
	font-size: 11px;
	font-weight: bold;
	text-decoration: underline;
	color: #66759C;
}

a.catalogInvoiceLine:hover
{
	text-decoration: underline;
	
}

tr.priceTableList
{
	font-family: arial, helvetica, verdana;
	font-size: 11px;
	color: #696969;
	background-color: #ffffff;
}

tr.priceTableBlue
{
	font-family: arial, helvetica, verdana;
	font-size: 11px;
	font-weight: bold;
	color: #66759C;
	background-color: #ffffff;
}

tr.priceTableRed
{
	font-family: arial, helvetica, verdana;
	font-size: 11px;
	font-weight: bold;
	color: #CC6666;
	background-color: #ffffff;
}

td.listDepartment
{
	font-size: 12px;
	font-weight: bold;
	color: #66759C;
}

td.listHeadline
{
	font-size: 10px;
	font-weight: bold;
	color: #000000;
}

td.listCatalog
{
	font-size: 10px;
	font-weight: bold;
	color: #696969;
}

td.locationNoLink
{
	font-size: 12px;
	color: #696969;
}

td.catalogDescription
{
	font-size: 10px;
}

td.catalogAttributeDescription
{
	font-size: 10px;
	color: #696969;
	font-weight: bold;
}

td.qty
{
	font-size: 10px;
	font-weight: bold;
	color: #66759C;
}

td.itemCount
{
	font-size: 11px;
	color: #66759C;
	font-weight: bold;
}

td.orderItemList
{
	font-size: 10px;
	color: #000000;
}

input.text.qtyField
{
	background-color: #ffffff;
	font-family: arial;
	font-size: 9pt;
	border-style: solid;
	border-width: 1px;
	border-color: #66759C;
}

table.authTable
{
	background-color: #ffffff;
	
}

td.authTableRow
{
	background-color: #ffffff;
	border-top: 1px solid #565656;
	
}

tr.authTableHeader
{
	background-color: #cccccc;
	font-weight: bold;
	color: #565656;
	
}

tr.authTableHeaderValue
{
	background-color: #ffffff;
	
}

td.authTableHeaderCellRight
{
	border-left: 1px solid #565656;
	border-bottom: 1px solid #565656;
	border-top: 1px solid #565656;
	border-right: 1px solid #565656;
	
}

td.authTableHeaderCell
{
	border-left: 1px solid #565656;
	border-bottom: 1px solid #565656;
	border-top: 1px solid #565656;
	
}

td.authTableHeaderValueCell
{
	border-left: 1px solid #565656;
	
}

td.authTableHeaderValueCellRight
{
	border-left: 1px solid #565656;
	border-right: 1px solid #565656;
	
}

tr.authDetailHeader
{
	background-color: #cccccc;
	font-weight: bold;
	color: #565656;
	
}

td.authDetailHeaderCell
{
	border-left: 1px solid #565656;
	border-bottom: 1px solid #565656;
	
}

td.authDetailHeaderCellRight
{
	border-left: 1px solid #565656;
	border-bottom: 1px solid #565656;
	border-right: 1px solid #565656;
	
}

td.authDetailValueCell
{
	border-bottom: 1px solid #565656;
	border-left: 1px solid #565656;
	
}

td.authDetailValueCellRight
{
	border-bottom: 1px solid #565656;
	border-left: 1px solid #565656;
	border-right: 1px solid #565656;
	
}

td.authDetailValueCellBlank
{
	border-bottom: 1px solid #565656;
	
}

/*Admin Headers*/

td.side
{
	width: 50%;
	border-bottom: 1px black solid;
}

td#left
{
	border-right: 1px black solid;
}

td.active
{
	border: 1px black solid;
	border-left: 0pt white solid;
	border-bottom: 1px white solid;
	font-weight: bold
}

td.inactive
{
	border: 1px black solid;
	border-left: 0pt white solid;
	
}

tr#storeHeaders
{
	background-color: black;
	text-align: center;
	color: white;
}

tr#storeHeaders a
{
	color: white;
}

tr.inactive
{
	color: red;
	font-weight: bold;
}

tr.inactive a
{
	text-decoration: underline;
	color: red;
	font-weight: bold;
	font-size: 8pt;
}

tr.active a
{
	color: black;
	text-decoration: underline;
}

/*form table*/
tr.adminFormHeader
{
	font-family: arial, helvetica, verdana;
	font-size: 8pt;
	font-weight: bold;
	color: white;
	background-color: #000000;
}

tr.adminFormRow 
{
	font-size: 8pt;
	background-color: #DDDDDD;
}

tr.adminRowHighlighted
{
	font-size: 8pt;
	background-color: #F1DDDD;
}

td.borderTop
{
	border-top: 1px black solid;
}

td.borderBottom
{
	border-bottom: 1px black solid;
	background-color: #DDDDDD;
}

td.borderLeft
{
	border-left: 1px black solid;
}

td.borderRight
{
	border-right: 1px black solid;
}

.attention
{
	background-color: red;
}

.left
{
	text-align: left;
}

.center
{
	text-align: center;
}

.right
{
	text-align: right;
}

/*Notes*/

tr.noteHeader td
{
	background-color: #dddddd;
	font-size: 8pt;
	color: black;
	border-top: 1px black solid;
}

td.adminNote
{
	border: 1px black solid;
	border-bottom: 0pt black solid;
	padding: 5px;
	padding-left: 10px;
}

/* Shipping */

tr.shipItemizedRow
{
	font-size: 9pt;
}

td.shipItemizedLabel
{
	font-size: 9pt;
	font-weight: bold;
}

td.shipItemizedValue
{
	font-size: 9pt;
}

td.shipItemizedBotBorder
{
	border-bottom: 1px solid #696969;
}

input.text.shipTotal
{
	background-color: #ffffff;
	font-weight: bold;
	
	text-align: right;
	
	font-family: arial;
	
	font-size: 9pt;
	
	border-style: solid;
	
	border-width: 1px;
	

}

/* Marketing Blast */
table.mbItem
{
	border: 1px solid #000000;
	font-size: 9pt;
}

table.mbItemHighlighted
{
	border: 1px solid #66759C;
	background-color: #DBE3F6;
	font-size: 9pt;
}

table.mbItemHover
{
	background: #EEEEEE;
	cursor: move;
}

.mbBrand
{
	font-size: 9pt;
	font-weight: bold;
	color: #000000;
}

.mbLineItem
{
	font-size: 7pt;
}

.mbTag
{
	font-size: 9pt;
	font-weight: bold;
	color: #B3C459;
	font-style: italic;
	text-align: right;
}

.mbPrice
{
	font-size: 18pt;
	/*font-weight: bold;*/

}

.mbStockCode
{
	color: #696969;
}

.mbList
{
	color: #333333;
	font-size: 8pt;
}

/* Print Catalog */

table.pcPage
{
	border: 1px solid #696969;
	background: #EEEEEE;
}

table.pcPageComplete
{
	border: 1px solid #696969;
	background: #FFFFFF;
}

table.pcPageHighlighted
{
	border: 1px solid #66759C;
	background: #DBE3F6;
	cursor: pointer;
}

table.pcPageHover
{
	border: 1px solid #000000;
	background: #DDDDDD;
	cursor: pointer;
}

td.pcPageTitle
{
	font-weight: bold;
	font-size: 9pt;
}

td.pcInfo
{
	font-size: 9pt;
	color: black;
	text-decoration: underline;
}

td.pcInfoImage
{
	/*
	background-color: white;
	border: 1px #696969 solid;
	*/
}

td.pcPageMissing
{
	font-weight: bold;
	font-size: 9pt;
	color: #CC6666;
}

tr.pcPageNums
{
	font-size: 22pt;
}

td.pcNumPositions
{
	color: #696969;
}

td.pcNumPositionsOpen
{
	font-weight: bolder;
	color: #66759C;
}

div.pageOptions {
	background-color: #DBE3F6;
	border: 1px #66759C solid;
	position: absolute;
	visibility: hidden;
	padding: 3px;
}

/*
div.pageOptions a {
	color: white;
	font-weight: bold;
	text-decoration: none;
}*/

table.pcPageLrg
{
	border: 1px solid #000000;
}

td.pcGuideBlank
{
	background-color: #EEEEEE;
}

td.pcGuideCol
{
	border-bottom: 1px solid #000000;
	width: 100px;
	text-align: center;
	background-color: #EEEEEE;
	font-size: 8pt;
	color: #696969;
}

td.pcGuideRow
{
	border-right: 1px solid #000000;
	height: 100px;
	text-align: center;
	vertical-align: middle;
	padding: 5px;
	background-color: #EEEEEE;
	font-size: 8pt;
	color: #696969;
}

table.pcItemOpen
{
	border: 1px solid #DDDDDD;
	height: 100%;
	width: 100%;
}

table.pcItem
{
	border: 1px solid #000000;
	width: 100%;
	height: 100%;
}

table.pcItemOn
{
	border: 1px solid #66759C;
	background: #DBE3F6;
	width: 100%;
	height: 100%;
}

table.pcItemHoverMove
{
	border: 1px solid #000000;
	background: #EEEEEE;
	width: 100%;
	height: 100%;
	cursor: move;
}

table.pcItemHover
{
	border: 1px solid #000000;
	background: #EEEEEE;
	width: 100%;
	height: 100%;
	cursor: pointer;
}

td.pcItemBrand
{
	font-size: 9pt;
	/*font-weight: bold;*/

}

td.pcItemLineDesc
{
	font-size: 9pt;
	font-weight: bold;
}

td.pcCheckBox
{
	padding: 2px;
	font-size: 9pt;
	font-weight: bold;
	background: white;
}

td.pcChecked
{
	border: 1px solid #696969;
}

td.pcUnChecked
{
	border: 1px solid #696969;
}

td.pcCheckBoxLabel
{
	font-size: 9pt;
	font-weight: bold;
}

td.pcCheckedLabel
{
	color: #696969;
}

td.pcUnCheckedLabel
{
	color: black;
}

.disabledLink
{
	color: #696969;
	text-decoration: underline;
}

/* CONTEXT HELP */
div.contextHelp
{
	visibility: visible;
	display: none;
	width: 300px;
}


div.contextHelpVisible
{
	border: 2px #F0E68C solid;
	font-weight: bold;
	padding: 3px;
	display: inline;
	margin: 0px;
	background-color: #FAFAD2;
	color: black;
	font-size: 9pt;
	position: absolute;
	visibility: visible;
	z-index: 1000;
}

.contextFieldActive {
	background-color: #FAFAD2;	
}

/* CONTEXT ERROR */
div.contextError
{
	visibility: visible;
	display: none;
}

div.contextErrorVisible
{
	border: 2px black solid;
	font-weight: bold;
	padding: 3px;
	display: inline;
	margin: 0px;
	background-color: #CC6666;;
	color: white;
	font-size: 9pt;
	position: absolute;
	visibility: visible;
}

div#helpBox
{
	position: absolute;
	z-index: 10;
	right: 10px;
	top: 27px;
	display: none;
	width: 150px;
	padding: 2px;
	border: 2px #F0E68C solid;
	background-color: #FAFAD2;
	font-size: 9pt;
}

div#helpBox a
{
	color: black;
}

/* TUTORIAL MODE */
table#tutorialPaths
{
	position: absolute;
	z-index: 9;
	padding: 2px;
	border: 2px #F0E68C solid;
	background-color: #FAFAD2;
	top: 3px;
	left: 2px;
	width: 50%;
}

table#tutorialPaths td#title
{
	font-size: 11pt;
	font-weight: bold;
}

table#tutorialPaths span.pathNumber
{
	font-size: 10pt;
	font-weight: bold;
	padding-right: 10px;
}

table#tutorialPaths a
{
	font-size: 10pt;
	color: black;
}

table#tutorialTable
{
	position: absolute;
	z-index: 9;
	display: none;
	width: 250px;
}

table#tutorialStep
{
	width: 250px;
	padding: 2px;
	border: 2px #F0E68C solid;
	background-color: #FAFAD2;
}

img#tutorial_tl, img#tutorial_tr, img#tutorial_bl, img#tutorial_br
{
	display: none;
}


table#tutorialStep td#stepLabel
{
	font-size: 14pt;
}

table#tutorialStep td#stepNumber
{
	width: 99%;
	font-size: 14pt;
	font-weight: bold;
}

table#tutorialStep td#stepDescription
{
	font-size: 9pt;
	padding: 5px;
	padding-bottom: 15px;
}

table#tutorialStep table#stepTable
{
	padding-top: 5px;
	border-top: 1px black solid;
}

table#tutorialStep a#prevStep, a#nextStep
{
	font-size: 10px;
	color: black;
}

/* AJAX related CSS */
.ajaxSearchResults {
	width: 100px;
	height: 250px;
	overflow: auto;
	background-color: white;
	border: 1px black solid;
	position: absolute;
	display: none;
}

div.ajaxSearchResults a {
	display: block;
	background-color: inherit;
	padding: 3px;
	font-size: 9pt;
	text-decoration: none;
}

div.ajaxSearchResults a:hover {
	background-color: #DBE3F6;
}

/* GENERIC CSS */
.bold
{
	font-weight: bold;
}

.highlight
{
	color: #CC0000;
}
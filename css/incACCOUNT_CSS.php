<?php
// $Id: incACCOUNT_CSS.php 2501 2009-01-07 19:06:44Z eric $

include_once("../../global/globalInitClose.php");

initCSS();

if ($store)
	$fontSizeChange = $store->getFontSize();
else
	$fontSizeChange = 0;
?>
tr.previousBalance
{
	 background-color:#ffffff;
	 color:#CC6666;
	 font-family:arial;
	 font-size:<?=9 + $fontSizeChange?>pt;
	 font-weight:bold;
}

td.newBalanceLabel
{
	 background-color:#ffffff;
	 color:<?=PRIMARY_COLOR?>;
	 font-family:arial;
	 font-size:<?=9 + $fontSizeChange?>pt;
	 font-weight:bold;
	 border-left: 1px <?=PRIMARY_COLOR?> solid;
	 border-top: 1px <?=PRIMARY_COLOR?> solid;
	 border-bottom: 1px <?=PRIMARY_COLOR?> solid;
}

td.newBalance
{
	 background-color:#ffffff;
	 color:<?=PRIMARY_COLOR?>;
	 font-family:arial;
	 font-size:<?=9 + $fontSizeChange?>pt;
	 font-weight:bold;
	 border-right: 1px <?=PRIMARY_COLOR?> solid;
	 border-top: 1px <?=PRIMARY_COLOR?> solid;
	 border-bottom: 1px <?=PRIMARY_COLOR?> solid;
}

tr.trans
{
	 font-family:arial;
	 font-size:<?=8 + $fontSizeChange?>pt;
}

td.transLeft
{
	 border-bottom: 1px #333333 solid;
	 border-left: 1px #333333 solid;
}

td.transNone
{
	 border-bottom: 1px #333333 solid;
}

td.transRight
{
	 border-bottom: 1px #333333 solid;
	 border-left: 1px #333333 solid;
	 border-right: 1px #333333 solid;
}

tr.relatedTrans
{
	 font-family:arial;
	 font-size:<?=8 + $fontSizeChange?>pt;
	 color:#666666;
}

td.relatedTransLeft
{
	 border-bottom: 1px #DDDDDD solid;
	 border-left: 1px #DDDDDD solid;
}

td.relatedTransNone
{
	 border-bottom: 1px #DDDDDD solid;
}

td.relatedTransRight
{
	 border-bottom: 1px #DDDDDD solid;
	 border-left: 1px #DDDDDD solid;
	 border-right: 1px #DDDDDD solid;
}

td.relatedTransBalance
{
	 font-family:arial;
	 font-size:<?=8 + $fontSizeChange?>pt;
	 color:<?=PRIMARY_COLOR?>;
	 border-bottom: 1px #333333 solid;
}

a.transLink
{
	 color:<?=PRIMARY_COLOR?>;
	 font-family:arial;
	 font-size:<?=8 + $fontSizeChange?>pt;
	 text-decoration:none;
}

a.transLink:hover
{
	 text-decoration:underline;
}

a.relatedTransLink
{
	 font-family:arial;
	 font-size:<?=8 + $fontSizeChange?>pt;
	 color:#666666;
	 text-decoration:none;
}

a.relatedTransLink:hover
{
	 background:yellow;
	 color:#666666;
	 text-decoration:none;
}

/*div
{
	border-style: dotted;
	 border-width: 1px;
	 color:silver
}
*/ 
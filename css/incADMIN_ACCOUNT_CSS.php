<?php
// $Id: incADMIN_ACCOUNT_CSS.php 3324 2011-05-12 19:52:27Z cvs2svn $

include_once("../../global/globalInitClose.php");

initCSS();
?>
tr.previousBalance
{
	background-color:#ffffff;
	color:#CC6666;
	font-family:arial;
	font-size:9pt;
	font-weight:bold;
}

td.newBalanceLabel
{
	background-color:#ffffff;
	color:#66759C;
	font-family:arial;
	font-size:9pt;
	font-weight:bold;
	border-left: 1px #66759C solid;
	border-top: 1px #66759C solid;
	border-bottom: 1px #66759C solid;
}

td.newBalance
{
	background-color:#ffffff;
	color:#66759C;
	font-family:arial;
	font-size:9pt;
	font-weight:bold;
	border-right: 1px #66759C solid;
	border-top: 1px #66759C solid;
	border-bottom: 1px #66759C solid;
}

/*tr.trans
{
	font-family:arial;
	font-size:8pt;
	border-bottom: 1px #DDDDDD solid;
	border-left: 1px #DDDDDD solid;
	border-right: 1px #DDDDDD solid;
}

td.transLeftVert
{
	border-left: 1px #DDDDDD solid;
}

tr.relatedTrans
{
	font-family:arial;
	font-size:8pt;
	border-bottom: 1px #66759C solid;
	border-left: 1px #66759C solid;
	border-right: 1px #66759C solid;
}

td.relatedTransLeftVert
{
	border-left: 1px #66759C solid;
}*/

tr.trans
{
	font-family:arial;
	font-size:8pt;
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
	font-size:8pt;
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
	font-size:8pt;
	color:#66759C;
	border-bottom: 1px #333333 solid;
}

a.transLink
{
	color:#000000;
	font-family:arial;
	font-size:8pt;
	text-decoration:none;
}

a.transLink:hover
{
	background:yellow;
	text-decoration:none;
}

a.relatedTransLink
{
	font-family:arial;
	font-size:8pt;
	color:#666666;
	text-decoration:none;
}

a.relatedTransLink:hover
{
	background:yellow;
	color:#666666;
	text-decoration:none;
}
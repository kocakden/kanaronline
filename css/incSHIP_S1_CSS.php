<?php
// $Id: incSHIP_S1_CSS.php 3324 2011-05-12 19:52:27Z cvs2svn $

include_once("../../global/globalInitClose.php");

initCSS();
?>
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
}

table.activeCarton
{
	background: #E8EFC4;
	cursor: move;
}
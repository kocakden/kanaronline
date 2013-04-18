<?php
// $Id: incWELCOME_CSS.php 2501 2009-01-07 19:06:44Z eric $

include_once("../../global/globalInitClose.php");

initCSS();
?>
body 
{
	font-family: arial, helvetica, verdana;
	margin: 10px;
}

a 
{  
	text-decoration:underline; 
	color:<?=PRIMARY_COLOR?>;
}

td
{
font-size:8pt;
}

a.checkBox
{
	color:#000000;
	font-size:8pt;
	text-decoration:none;
}

span.welcome
{
	color:<?=PRIMARY_COLOR?>;
	font-size:14pt;
	font-weight:bold;
}

table#loginTable
{
	background-color: #DA5858;
	color: white;
}

td#loginTop
{
	background-color: #C70202;
}

.loginTextBox
{
	font-size:8pt;
	color:<?=PRIMARY_COLOR?>;
	font-weight:bold;
	border: 1px <?=PRIMARY_COLOR?> solid;
}

.help
{
	font-size:9pt;
	color:#CC6666;
	font-weight:bold;
	text-decoration:none;
}

.msg
{
	font-size:9pt;
	color:#444444;
}

#errorMsg
{
	color:#DA5858; 
	font-size: 8pt;
	font-weight: bold;
}
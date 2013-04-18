<?php
// $Id: incTASK_CALENDAR_CSS.php 4056 2013-03-26 18:14:23Z eric $

include_once("../../global/globalInitClose.php");

initCSS();
?>
.calendar
{
	margin: 0;
	padding: 0;
}
.calendar caption
{
	margin: 0;
	padding: .3em 0;
	color: #fff;
	background: #66759C;
}
.calendar th
{
	border-bottom: 1px solid #ccc;
	font-weight: normal;
	background: #fff;
}
.calendar td
{
	border: 1px solid #fff;
	padding: .1em .3em ;
	width: 1em;
	text-align: center;
}
.calendar a
{
	color: #000;
	text-decoration: none;
}

.calendar td.today
{
	background: #ffc;
}
.calendar td.selected
{
	border: 1px dotted #000;
}
.calendar td.highlighted
{
	background: #9cf;
}
	
.calendar td:hover, .calendar td.today:hover, 
.calendar td.selected:hover, .calendar td.highlighted:hover
{
	background: #cff;
	border: 1px solid #09f;
}

table.calendar td.pad
{
	color: #999;
	background: #fff;
}
table.calendar td.pad:hover
{
	background: none;
	border: 0;
}
	
.sunday, .saturday
{
	background: #f0f0f0;
}
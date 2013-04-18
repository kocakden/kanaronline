#canvasCell {
	position: absolute;
	float: left;
	border: 1px <?=$catalogColors["borderColor"]?> solid;
}

#canvasCell div {
	position: absolute;
	overflow: hidden;
	padding: 0px;
	border: 1px transparent solid;
	line-height: 1;
}

#canvasCell div p {
	border: 0px transparent dashed;
}

#canvasCell div.cellItemHover {
	border: 1px gray dashed;
	padding: 0px;
	cursor: pointer;
}

#canvasCell div.cellItemHover p {
	/*border-color: green;*/
}

#canvasCell div.cellItemActive {
	border: 1px red solid;
	padding: 0px;
	cursor: pointer;
}

#canvasCell div.cellItemActive p {
	/*border-color: green;*/
}

div.itemProperties, div#cellProperties {
	width: 80%;
}

div.itemProperties, div#generalProperties {
	display: none;
	width: 80%;
}

div.itemProperties fieldset {
	padding: 3px;
}

div#borderProperties {
	display: none;
}

/*
 * Classes for layers div
 */
div#layersDiv {
	display: block;
	position: absolute;
	border: 0px black solid;
}
div#layersSelect {
	
}

/*
 * Classes used for adding items elements
 */
div#addItemDiv {
	display: none;
	position: absolute;
	z-index: 5000;
	background-color: white;
	border: 1px black solid;
	padding: 15px;
	width: 80%;
	height: 80%;
}

div.step {

}

select.itemTypeSelect {
	display: none;
}

tr.highlighted {
	background-color: #dadada;
	cursor: pointer;
}

table.pricingTable {
	/*border: 1px black solid;*/
	font-family: "Arial Narrow", sans-serif;
	font-size: 8pt;
	width: 100%;
}

table.pricingTable tr.header td {
	border-bottom: 1px black solid;
}

table.pricingTable td.endColumn {
	font-weight: bold;
}
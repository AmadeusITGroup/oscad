<?php

/*  This file is part of OSCAd, the Open Source Compliance Advisor
 *
 *  Copyright (C) 2013 Karsten Reincke, Deutsche Telekom AG
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as
 *  published by the Free Software Foundation, either version 3 of the
 *  License, or (at your option) any later version.

 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.

 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>
 */
include("oscad-be-config-inc.php");

?>

<html xml:lang="en" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--
	(t)OSCAd - (Telekom) Open Source Compliance Advisor
-->

<title>OSCAd/precheck: general faults</title>
<meta name="date" content="2013-04-22T15:17:42" />
<meta name="language" content="en" />


<link rel="stylesheet" type="text/css" href="../css/2lfc.css" media="all" />

<meta name="google-site-verification" content="" />
  <!--
    * @copyright       +CPR+
    * @license         AGPL 3.0 (http://www.gnu.org/licenses/agpl.html)
    * @link            http://www.telekom.com/
    * @release         +REL+
   -->

<meta http-equiv="content-language" content="en" scheme="DCTERMS.RFC3066" />
<meta name="DC.Language" content="en" />
<meta name="description"
	content="Results of the Open Source Compliance Advisor
	 automatically computed on the base of a filled form sheet" />
<meta name="copyright" content="Deutsche Telekom AG / P&amp;I, Darmstadt." />
<link rev="made" href="mailto:opensource@telekom.de" />
<meta http-equiv="reply-to" content="opensource@telekom.de" />
<meta name="author" content="Karsten Reincke" />
<meta name="DC.Description"
		content="Results of the Open Source Compliance Advisor
	 		automatically computed on the base of a filled form sheet" />
<meta name="DC.Rights" content="Deutsche Telekom AG / P&amp;I, Darmstadt." />
<meta name="DC.Creator" content="Karsten Reincke" />
<link rel="schema.dc" href="http://purl.org/metadata/dublin_core_elements" />


</head>

<body>

<div class="huge box">
<h2>
	<span style="color:<?php echo "$hlColor"?>">O</span>pen
	<span style="color:<?php echo "$hlColor"?>">S</span>ource
	<span style="color:<?php echo "$hlColor"?>">C</span>ompliance
  <span style="color:<?php echo "$hlColor"?>">Ad</span>visor
	/ PreCheck: Results
</h2>
<p style="text-align:left;">
Your OSCAd/preCheck System seems to be set up incorrectly.
$gFaultValue does not contain one of the values
<ul>
	<li>SuccessValue: <?php echo "< $gSuccessValue >"?></li>
	<li>FaultWrongRestMethod: <?php echo "< $gFaultWrongRestMethod >"?></li>	
	<li>FaultWrongCaseParameters: <?php echo "< $gFaultWrongCaseParameters >"?></li>	
	<li>AnyNoAnswer: <?php echo "< $gAnyNoAnswer >"?></li>
	<li>ThreeYesSuccessValue: <?php echo "< $gOnlyYesSuccessValue >"?></li>	
</ul>
But it contains the value <?php echo "< $gFaultValue >"?>.
</p>
</div>
</body>
</html>

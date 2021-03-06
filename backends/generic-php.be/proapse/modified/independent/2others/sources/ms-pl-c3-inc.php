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

$gFbLicenseName="MS-PL";
$gFbLicenseSpecification="Microsoft Public License";
$gFbLicenseAbbr="MS-PL";
$gFbLicenseRelease="";

$gOsLicProtectionChapter="2.11";
$gOsLicPatentChapter="3.1.9";
$gOsLicTodoListChapter="6.12";
$gOsLicLsucChapter="6.12.3";
$gOsLicTlExplanationChapter="6.12.9";

$gFbLiSpUcName="MS-PL-C3";

$gFbLiSpUcDesc=
	"that you received an MS-PL licensed program, application, or
  server (proapse), that you modified it, and that you are now going to
  distribute this modified version to third parties in the form of source code files or as
  a source code package.";

$gFbLiSpUcRequiresPrefix=
	"the following tasks in order to fulfill the license conditions:";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(

		"Ensure that all licensing elements (particularly all
      copyright, patent, trademark, and attribution notices that are part of the
      version you received) are completely retained in your package.",

		"Incorporate a complete copy of the MS-PL license
		into your package.",

		"If you do not want to publish your modifications
		under the MS-PL too, then cleanly separate your own sources and licensing
		documents from original elements of the adopted work."


);

$gFbLiSpUcRequiresVolArr=array(
  "Mark your modifications in the sourcecode.",

  "It's a good tradition to let the documentation of
  your distribution and/or your additional material also contain a link to the
  original software (project) and its homepage (as far as this does not clashes
  with the prohibitions stated below).",

  "You are allowed to expand an existing copyright
  notice of the program to mention your own contributions.",

  "It is a good practice of the open source
  community, to let the copyright notice which is shown by the running program
  also state that the program is licensed under the MS-PL license (as far as
  this does not clashes with the prohibitions stated below). Because you are
  already modifying the program, you can also add such a hint, if the
  original copyright notice lacks such a statement.",

);

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(
		"to use any contributors' name, logo, or trademarks (without an
				additional or general legally based approval)"
		);


?>

<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Klout Score',
	'description' => 'Retrieve Klout score for specific users',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '0.0.1',
	'dependencies' => 'extbase,fluid',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'alpha',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Tomita Militaru',
	'author_email' => 'tomita.militaru@gmail.com',
	'author_company' => 'Arxia',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.3.0-0.0.0',
			'extbase' => '1.0.0-0.0.0',
			'fluid' => '1.0.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:23:{s:12:"ext_icon.gif";s:4:"d43b";s:17:"ext_localconf.php";s:4:"54f7";s:14:"ext_tables.php";s:4:"32ee";s:40:"Classes/Controller/TwitterController.php";s:4:"13b2";s:23:"Classes/Utility/Div.php";s:4:"d2ba";s:36:"Configuration/Flexforms/flexform.xml";s:4:"85c2";s:43:"Configuration/TypoScript/Main/constants.txt";s:4:"1f67";s:39:"Configuration/TypoScript/Main/setup.txt";s:4:"5275";s:45:"Configuration/TypoScript/NewsTicker/setup.txt";s:4:"152a";s:44:"Resources/Private/BackEnd/TwitterWizicon.php";s:4:"6316";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"4f5e";s:47:"Resources/Private/Language/locallang_module.xml";s:4:"a4a0";s:45:"Resources/Private/Templates/Twitter/List.html";s:4:"1724";s:63:"Resources/Private/Templates/TwitterNewsTicker/Twitter/List.html";s:4:"572f";s:56:"Resources/Private/UserFuncs/user_wttwitter_userfuncs.php";s:4:"8cbe";s:33:"Resources/Public/Icons/ce_wiz.gif";s:4:"e010";s:37:"Resources/Public/Icons/icon_close.gif";s:4:"227a";s:38:"Resources/Public/Icons/icon_geotag.gif";s:4:"5558";s:39:"Resources/Public/Icons/icon_retweet.gif";s:4:"f6b4";s:39:"Resources/Public/Icons/icon_twitter.gif";s:4:"112e";s:52:"Resources/Public/Media/CSS/wt_twitter_newsticker.css";s:4:"03ef";s:50:"Resources/Public/Media/JS/wt_twitter_newsticker.js";s:4:"6b88";s:14:"doc/manual.sxw";s:4:"2569";}',
);

?>
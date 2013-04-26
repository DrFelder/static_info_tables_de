<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "static_info_tables_de".
 *
 * Auto generated 26-04-2013 11:05
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Static Info Tables (de)',
	'description' => '(de) language pack for the Static Info Tables providing localized names for countries, currencies and so on.',
	'category' => 'misc',
	'shy' => 0,
	'version' => '2.0.3',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => 'static_countries,static_languages,static_currencies,static_territories',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'RenÃ© Fritz',
	'author_email' => 'r.fritz@colorcube.de',
	'author_company' => 'Colorcube - digital media lab, www.colorcube.de',
	'CGLcompliance' => NULL,
	'CGLcompliance_note' => NULL,
	'constraints' => 
	array (
		'depends' => 
		array (
			'static_info_tables' => '2.0.1-',
			'php' => '4.1.0-0.0.0',
			'typo3' => '4.0-0.0.0',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
);

?>
<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Foundation framework',
	'description' => 'Integration of Zurb Foundation CSS framework for TYPO3 websites.',
	'category' => 'templates',
	'author' => 'Charles Brunet',
	'author_email' => 'charles@cbrunet.net',
	'author_company' => '',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.1.0',
	'constraints' => array(
		'depends' => array(
			'extbase' => '6.0',
			'fluid' => '6.0',
			'typo3' => '6.0.0-6.2.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);

?>

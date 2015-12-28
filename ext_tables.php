<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Foundation framework');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/DefaultCss', 'Foundation framework (default CSS)');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:cb_foundation/Configuration/TSConfig/PageTSConfig.ts">');

$_EXTCONF = unserialize($_EXTCONF);
if ($_EXTCONF['useRTE']) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:cb_foundation/Configuration/TSConfig/RTE.ts">');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($_EXTKEY, 'Orbit', 'Orbit Slider',
		 \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/orbit_ct.gif');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($_EXTKEY, 'Clearing', 'Clearing Lightbox',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/clearing_ct.gif');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($_EXTKEY, 'Flexvid', 'Flexible Video',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/flexvid_ct.gif');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(array('Breadcrumbs navigation', 'cbfoundation_breadcrumbs',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/breadcrumbs_ct.gif'), 'CType');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(array('Magellan expedition', 'cbfoundation_magellan',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/magellan_ct.gif'), 'CType');


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tt_content', 'EXT:cb_foundation/Resources/Private/Language/locallang_csh_ttcontent.xlf');


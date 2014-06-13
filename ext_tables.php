<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Foundation framework');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/DefaultCss', 'Foundation framework (default CSS)');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:cb_foundation/Configuration/TSConfig/PageTSConfig.ts">');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($_EXTKEY, 'Orbit', 'Orbit Slider',
		 \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/orbit_ct.gif');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($_EXTKEY, 'Clearing', 'Clearing Lightbox',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/clearing_ct.gif');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($_EXTKEY, 'Flexvid', 'Flexible Video',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/flexvid_ct.gif');


$TCA['tt_content']['types']['cbfoundation_orbit']['showitem'] = "--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
																 --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.header;header,
																 --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.images, image,
																 --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
																 --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
																 --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.image_settings;image_settings,
																 --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
																 --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
																 --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access";
$TCA['tt_content']['types']['cbfoundation_clearing']['showitem'] = "--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
																	--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.header;header,
																	--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.images, image,
																	--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
																	--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
																	--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.image_settings;image_settings,
																	--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
																	--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
																	--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access";
$TCA['tt_content']['types']['cbfoundation_flexvid']['showitem'] = "--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
																	--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.header;header,
																	--palette--;Source, bodytext;LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:palette.source,
																	--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
																	--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,pi_flexform,
																	--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
																	--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
																	--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access";
$TCA['tt_content']['columns']['pi_flexform']['config']['ds']['*,cbfoundation_flexvid'] = 'FILE:EXT:cb_foundation/Configuration/FlexForms/Flexvid.xml';
// définir flexform
// lire valeurs et reporter dans fluid
?>
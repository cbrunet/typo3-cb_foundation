<?php
if (!defined('TYPO3_MODE')) {
        die ('Access denied.');
}

$GLOBALS['TCA']['tt_content']['types']['cbfoundation_orbit']['showitem'] = "--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
                                                                 --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.header;header,
                                                                 --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.images, image,
                                                                 --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
                                                                 --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
                                                                 --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.image_settings;image_settings,
                                                                 --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
                                                                 --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
                                                                 --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access";
$GLOBALS['TCA']['tt_content']['types']['cbfoundation_clearing']['showitem'] = "--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
                                                                    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.header;header,
                                                                    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.images, image,
                                                                    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
                                                                    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
                                                                    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.image_settings;image_settings,
                                                                    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
                                                                    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
                                                                    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access";
$GLOBALS['TCA']['tt_content']['types']['cbfoundation_flexvid']['showitem'] = "--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
                                                                    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.header;header,
                                                                    --palette--;Source, bodytext;LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:palette.source,
                                                                    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
                                                                    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,pi_flexform,
                                                                    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
                                                                    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
                                                                    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access";
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds']['*,cbfoundation_flexvid'] = 'FILE:EXT:cb_foundation/Configuration/FlexForms/Flexvid.xml';
$GLOBALS['TCA']['tt_content']['types']['cbfoundation_breadcrumbs']['showitem'] = '--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,header;LLL:EXT:cms/locallang_ttc.xml:header.ALT.div_formlabel,
                                                                       --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
                                                                       --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
                                                                       --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
                                                                       --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
                                                                       --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
                                                                       --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended';
$GLOBALS['TCA']['tt_content']['types']['cbfoundation_magellan']['showitem'] = '--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,header;LLL:EXT:cms/locallang_ttc.xml:header.ALT.div_formlabel,
                                                                       --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
                                                                       --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
                                                                       --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
                                                                       --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
                                                                       --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
                                                                       --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended';

$temporaryColumns = array (
    'tx_cbfoundation_hide' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_hide',
        'config' => array (
            'type' => 'check',
            'default'  => 0,
            'cols' => 9,
            'items' => array (
                array('LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_small', ''),
                array('LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_medium', ''),
                array('LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_large', ''),
                array('LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_xlarge', ''),
                array('LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_xxlarge', ''),
                array('LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_portrait', ''),
                array('LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_landscape', ''),
                array('LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_htouch', ''),
                array('LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_stouch', ''),
            ),
        )
    ),
	'tx_cbfoundation_hidden' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_hidden',
        'config' => array (
            'type' => 'check',
            'default'  => 0,
            'cols' => 5,
            'items' => array (
                array('LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_small', ''),
                array('LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_medium', ''),
                array('LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_large', ''),
                array('LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_xlarge', ''),
                array('LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_xxlarge', ''),
            ),
        )
    ),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
	'tt_content',
	$temporaryColumns
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'tx_cbfoundation_visibility',
    'tx_cbfoundation_hide, --linebreak--, tx_cbfoundation_hidden',
    ''
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    '--palette--;LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_visibility;tx_cbfoundation_visibility',
    '',
	'after:linkToTop'
);

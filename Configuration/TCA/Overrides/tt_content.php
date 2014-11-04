<?php
if (!defined('TYPO3_MODE')) {
        die ('Access denied.');
}

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

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tt_content', 'EXT:cb_foundation/Resources/Private/Language/locallang_csh_ttcontent.xlf');

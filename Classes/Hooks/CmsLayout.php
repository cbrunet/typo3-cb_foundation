<?php
namespace Cbrunet\CbFoundation\Hooks;

/***************************************************************
 *  Copyright notice
*
*  (c) 2012-2013 Charles Brunet <charles@cbrunet.net>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/


/**
 * Hook to display verbose information about the plugin
 *
 */
class CmsLayout implements \TYPO3\CMS\Backend\View\PageLayoutViewDrawItemHookInterface {

	/**
	 * Preprocesses the preview rendering of a content element.
	 *
	 * @param \TYPO3\CMS\Backend\View\PageLayoutView $parentObject Calling parent object
	 * @param boolean $drawItem Whether to draw the item using the default functionalities
	 * @param string $headerContent Header content
	 * @param string $itemContent Item content
	 * @param array $row Record row of tt_content
	 * @return void
	 */
	public function preProcess(\TYPO3\CMS\Backend\View\PageLayoutView &$parentObject, &$drawItem, &$headerContent, &$itemContent, array &$row) {
		if ($row['CType'] === 'cbfoundation_orbit' || 
			$row['CType'] === 'cbfoundation_clearing') {
			$drawItem = FALSE;
			
			$preView = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Fluid\\View\\StandaloneView');
			$templatePathAndFilename = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('cb_foundation') . 'Resources/Private/Templates/CmsLayout/Image.html';
			$preView->setTemplatePathAndFilename($templatePathAndFilename);
			$preView->assign('data', $row);
			$itemContent .= $preView->render();
		}
	}

}

?>
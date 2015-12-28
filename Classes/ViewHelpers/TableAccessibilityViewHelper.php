<?php
namespace Cbrunet\CbFoundation\ViewHelpers;

class TableAccessibilityViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

	/**
	 * Add visibility classes to element.
	 *
	 * @return string The render template
	 */
	public function render() {
		$data = $this->templateVariableContainer->get("data");
 
		$ffs = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Service\FlexFormService::class);
		$flex = $ffs->convertFlexFormContentToArray($data['pi_flexform']);

		$data["table_caption"] = $flex["acctables_caption"];
		if (!$flex["acctables_nostyles"]) {
			$data["table_class"] = $flex["acctables_tableclass"];
		}
		$data["table_tfoot"] = $flex["acctables_tfoot"];
		if ($flex["acctables_headerpos"] == "top") {
			$data["table_header_position"] = 1;
		}
		if ($flex["acctables_headerpos"] == "left") {
			$data["table_header_position"] = 2;
		}
		$data["table_summary"] = $flex["acctables_summary"];

		$this->templateVariableContainer->remove("data");
		$this->templateVariableContainer->add("data", $data);
		$content = $this->renderChildren();

		return $content;

	}
}

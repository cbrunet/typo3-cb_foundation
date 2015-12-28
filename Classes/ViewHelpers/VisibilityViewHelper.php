<?php
namespace Cbrunet\CbFoundation\ViewHelpers;

class VisibilityViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

	/**
	 * Add visibility classes to element.
	 *
	 * @param array $data The content object to be rendered
	 *
	 * @return string The render template
	 */
	public function render($data) {

		$helper = new \Cbrunet\CbFoundation\Hooks\user_Foundation();
		$classes = array();
		$classes[] = $helper->parseHideField($data['tx_cbfoundation_hide'], null);
		$classes[] = $helper->parseHiddenField($data['tx_cbfoundation_hidden'], null);

		$content = $this->renderChildren();

		if ($content) {
			$content = '<div class="' + implode(' ', $classes) + '">' + $content + '</div>';
			return $content;
		}

		return implode(' ', $classes);

	}
}

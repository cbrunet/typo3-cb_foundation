<?php

class user_Foundation {

	const SMALL = 1;
	const MEDIUM = 2;
	const LARGE = 4;
	const XLARGE = 8;
	const XXLARGE = 16;
	const PORTRAIT = 32;
	const LANDSCAPE = 64;
	const HTOUCH = 128;
	const STOUCH = 128;


	public $cObj;

	public function parseHideField($content, $conf) {
		$val = (int)$content;
		$classes = array();

		if ($val & self::PORTRAIT) {
			$classes[] = 'hide-for-portrait';
		}
		if ($val & self::LANDSCAPE) {
			$classes[] = 'hide-for-landscape';
		}
		if ($val & self::HTOUCH) {
			$classes[] = 'hide-for-touch';
		}
		if ($val & self::STOUCH) {
			$classes[] = 'show-for-touch';
		}

		$val &= 31;
		$hideclasses = array(
			'',
			'hide-for-small-only', // 1 small
			'hide-for-medium-only', // 2 medium
			'show-for-large-up', // 3 small medium
			'hide-for-large-only', // 4 large
			'hide-for-small-only hide-for-large-only', // 5 small large
			'hide-for-medium-only hide-for-large-only', // 6 medium large
			'show-for-xlarge-up', // 7 small medium large
			'hide-for-xlarge-only', // 8 xlarge
			'hide-for-small-only hide-for-xlarge-only', // 9 small xlarge
			'hide-for-medium-only hide-for-xlarge-only', // 10 medium xlarge
			'show-for-large-only shwo-for-xxlarge-only', // 11 small medium xlarge
			'hide-for-large-only hide-for-xlarge-only', // 12 large xlarge
			'show-for-medium-only show-for-xxlarge-only', // 13 small large xlarge
			'show-for-small-only show-for-xxlarge-only', // 14 medium large xlarge
			'show-for-xxlarge-only', // 15 small medium large xlarge
			'hide-for-xxlarge-only', // 16 xxlarge
			'hide-for-small-only hide-for-xxlarge-only', // 17 small xxlarge
			'hide-for-medium-only hide-for-xxlarge-only', // 18 medium xxlarge
			'show-for-large-only show-for-xlarge-only', // 19 small medium xxlarge
			'hide-for-large-only hide-for-xxlarge-only', // 20 large xxlarge
			'show-for-medium-only show-for-xlarge-only', // 21 small large xxlarge
			'show-for-small-only show-for-xlarge-only', // 22 medium large xxlarge
			'show-for-xlarge-only', // 23 small medium large xxlarge
			'hide-for-xlarge-up', // 24 xlarge xxlarge
			'hide-for-small-only hide-for-xlarge-up', // 25 small xlarge xxlarge
			'hide-for-medium-only hide-for-xlarge-up', // 26 medium xlarge xxlarge
			'show-for-large-only', // 27 small medium xlarge xxlarge
			'hide-for-large-up', // 28 large xlarge xxlarge
			'hide-for-medium-only', // 29 small large xlarge xxlarge
			'hide-for-medium-up', // 30 medium large xlarge xxlarge
			'hide', // 31 all!!!
			);
		$classes[] = $hideclasses[$val];

		return ' ' . implode(' ', $classes);
	}

	public function parseHiddenField($content, $conf) {
		$val = (int)$content;

		$hiddenclasses = array(
			'',
			'hidden-for-small-only', // 1 small
			'hidden-for-medium-only', // 2 medium
			'visible-for-large-up', // 3 small medium
			'hidden-for-large-only', // 4 large
			'hidden-for-small-only hidden-for-large-only', // 5 small large
			'hidden-for-medium-only hidden-for-large-only', // 6 medium large
			'visible-for-xlarge-up', // 7 small medium large
			'hidden-for-xlarge-only', // 8 xlarge
			'hidden-for-small-only hidden-for-xlarge-only', // 9 small xlarge
			'hidden-for-medium-only hidden-for-xlarge-only', // 10 medium xlarge
			'visible-for-large-only shwo-for-xxlarge-only', // 11 small medium xlarge
			'hidden-for-large-only hidden-for-xlarge-only', // 12 large xlarge
			'visible-for-medium-only visible-for-xxlarge-only', // 13 small large xlarge
			'visible-for-small-only visible-for-xxlarge-only', // 14 medium large xlarge
			'visible-for-xxlarge-only', // 15 small medium large xlarge
			'hidden-for-xxlarge-only', // 16 xxlarge
			'hidden-for-small-only hidden-for-xxlarge-only', // 17 small xxlarge
			'hidden-for-medium-only hidden-for-xxlarge-only', // 18 medium xxlarge
			'visible-for-large-only visible-for-xlarge-only', // 19 small medium xxlarge
			'hidden-for-large-only hidden-for-xxlarge-only', // 20 large xxlarge
			'visible-for-medium-only visible-for-xlarge-only', // 21 small large xxlarge
			'visible-for-small-only visible-for-xlarge-only', // 22 medium large xxlarge
			'visible-for-xlarge-only', // 23 small medium large xxlarge
			'hidden-for-xlarge-up', // 24 xlarge xxlarge
			'hidden-for-small-only hidden-for-xlarge-up', // 25 small xlarge xxlarge
			'hidden-for-medium-only hidden-for-xlarge-up', // 26 medium xlarge xxlarge
			'visible-for-large-only', // 27 small medium xlarge xxlarge
			'hidden-for-large-up', // 28 large xlarge xxlarge
			'hidden-for-medium-only', // 29 small large xlarge xxlarge
			'hidden-for-medium-up', // 30 medium large xlarge xxlarge
			'hidden', // 31 all!!!
			);

		return ' ' . $hiddenclasses[$val];
	}

}
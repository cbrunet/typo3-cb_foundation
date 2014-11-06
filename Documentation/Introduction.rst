.. include:: _IncludedDirectives.rst

.. _introduction:

============
Introduction
============


What does it do?
=================

Foundation_ describes itself as *the most advanced responsive front-end framework in the world*.
It includes many features, such as:

* Normalization of website appearance across different browsers
* A grid to easily define columns of different widths for you content
* Fully responsive, to build websites that look good on all sizes of screens
* A bunch of JavaScript utilities to define image sliders, off-canvas menus, etc.
* And mush more!

This extension allows to easily install and setup Foundation to use it as a basis for your website template.
While you could simply download the Foundation framework directly from its official website,
the use of this TYPO3 extension has several advantages:

* It eases the upgrade to a new version of Foundation, especially if you are maintaining many websites
* It loads all the needed JavaScript and CSS files for you
* You can easily configure some parameters directly from the TYPO3 backend

Actually, the following features are supported:

* Includes all CSS and JS libraries of Foundation
* Includes all SCSS files needed for customizing the CSS
* Default CSS files for quick testing or prototyping
* Settings for :ref:`visibility`, to hide or show elements based on screen size
* RTE configuration for using styles defined in Foundation
* A few ready-to-use plugins:

  * :ref:`orbit-slider`
  * :ref:`clearing-lightbox`
  * :ref:`flexvid`
  * :ref:`breadcrumbs`
  * :ref:`magellan`

More feature will peoabably be added in future releases.

.. _foundation: http://http://foundation.zurb.com/

Disclaimer
==========

I am not affiliated with zurb_, nor directly involved in the development of
the Foundation framework. I wrote this TYPO3 extension for my personal use,
and I am glad to share it with the rest of the world. I am not responsible of
any trouble that could occur by the use of this extension.

.. _zurb: http://zurb.com/


Similar projects
================

I am aware some other TYPO3 extensions are integrating Foundation Framework to TYPO3.
I did not really tried them. However, from the manual of the respective extensions,
it seems those extensions are taking a different approach than me. This is why I think
my extension can be a useful contribution.

Here is a list of the similar extensions I found on TER. Please feel free to send me
any additions of corrections to this list.

Extensions providing Foundation framework
-----------------------------------------

df_foundation5_
    Actively maintained. Incomplete manual. Seems to provide exactly opposite functionalities
    than what is provided by my extension. Provides responsive settings for images.
    Other Foundation functionalities are integrated to the
    site template using TypoScript (no plugins provided). Does not support TYPO3 6.2 yet.

t3foundation_
    No manual provided, so I cannot tell what this extension does exactly.

Extensions using Foundation framework
-------------------------------------

orbit_foundation_, orbitextended_
    Plugin that uniquely provides Orbit Slider. Incomplete documentation.

tabs_foundation_
    Provides a content element for tabs. Does not include the Foundation framework, but need it.

.. _df_foundation5: http://typo3.org/extensions/repository/view/df_foundation5/
.. _orbit_foundation: http://typo3.org/extensions/repository/view/orbit_foundation/
.. _orbitextended: http://typo3.org/extensions/repository/view/orbitextended/
.. _t3foundation: http://typo3.org/extensions/repository/view/t3foundation/
.. _tabs_foundation: http://typo3.org/extensions/repository/view/tabs_foundation/
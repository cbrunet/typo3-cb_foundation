..  Editor configuration
	...................................................
	* utf-8 with BOM as encoding
	* tab indent with 4 characters for code snippet.
	* optional: soft carriage return preferred.

.. Includes roles, substitutions, ...
.. include:: _IncludedDirectives.rst

====================
Foundation framework
====================

:Extension name: |extension_name|
:Extension key: |extension_key|
:Version: |extension_version|
:Description: manuals covering TYPO3 extension "Foundation framework"
:Language: en
:Author: Charles Brunet
:Creation: 2014-06-12
:Generation: |time|
:Licence: Open Content License available from `www.opencontent.org/opl.shtml <http://www.opencontent.org/opl.shtml>`_

The content of this document is related to TYPO3, a GNU/GPL CMS/Framework available from `www.typo3.org
<http://www.typo3.org/>`_

**Table of Contents**

.. toctree::
	:maxdepth: 2

	ProjectInformation
	UserManual
	AdministratorManual
	TyposcriptReference


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
* A few ready-to-use plugins:
  
  * :ref:`orbit-slider`
  * Clearing lightbox
  * Flexible video container

More feature will peoabably be added in future releases.

.. _foundation: http://http://foundation.zurb.com/

Disclaimer
==========

I am not affiliated with zurb_, nor directly involved in the development of
the Foundation framework. I wrote this TYPO3 extension for my personal use,
and I am glad to share it with the rest of the world. I am not responsible of
any trouble that could occur by the use of this extension.

.. _zurb: http://zurb.com/
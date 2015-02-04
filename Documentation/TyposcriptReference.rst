.. include:: _IncludedDirectives.rst

=========================
Configuration Reference
=========================


Foundation JavaScript initialization
====================================

Functionalities of Foundation that rely on JavaScript are initialized by
calling the ``foundation`` JavaScript function. In order to call it using the
right parameters, we construct an inline JavaScript footer using
``page.jsFooterInline.65`` TypoScript setup. ``65`` is an arbitrary index. Please
report a bug if it conflicts with any other TYPO3 extension.

The parameters of the JavaScript function are built using TypoScript.
``page.jsFooterInline.65.20`` is a ``COA`` and each value of it is 
added as parameter of the ``foundation()`` function.

Orbit parameters are added to ``page.jsFooterInline.65.20.10``. Here is
what the TypoScript for Orbit looks like:

.. code-block:: ts

	page.jsFooterInline.65.20.10 = COA
	page.jsFooterInline.65.20.10 {
		stdWrap.wrap = orbit: {|},
		stdWrap.required = 1
		
		1 = TEXT
		1.value = {$plugin.tx_cbfoundation.settings.orbit.animation}
		1.stdWrap.wrap = animation: '|',
		1.stdWrap.required = 1

		...

	}

``page.jsFooterInline.65.20.20`` is for Clearing Lightbox options.
``page.jsFooterInline.65.20.30`` is for Magellan options.

If you need to add other parameters to the ``foundation`` function,
you simply need to add new elements to the ``page.jsFooterInline.65.20`` COA.

.. _cust-rte:

Customizing RTE
===============

If you need to adapt styles used in the RTE, copy can copy the ``EXT:cb_foundation/Resources/Private/Scss/rte.scss``
file into the scss directory of your project. You will then need to change the value of 
``RTE.default.contentCSS`` in the PageTSConfig. This is needed if you want to use custom values
from your ``_settings.scss`` file, for example.

The PageTSConfig loaded by |extension_key| will delete all previously defined classes in RTE. If you need
to add other classes, or if you load an extension that modify RTE config, you should load it after
|extension_key| is loaded.

The RTE PageTSConfig of |extension_key| is defined in ``EXT:cb_foundation/Configuration/TSConfig/RTE.ts``

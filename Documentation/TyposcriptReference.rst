=========================
Configuration Reference
=========================


Foundation JavaScript initialisation
====================================

Functionnalities of Foundation that rely on JavaScript are initialized by
calling the ``foundation`` JavaScript function. In order to call it using the
right parameters, we construct an inline JavaScript footer using
``page.jsFooterInline.65`` TypoScript setup. ``65`` is an arbitrary index. Please
report a bug if it conflicts with any other TYPO3 extension.

The parameters of the JavaScript function are built using Typoscript.
``page.jsFooterInline.65.20`` is a ``COA`` and each value of it is 
added as parameter of the ``fundation()`` function.

Orbit parameters are added to ``page.jsFooterInline.65.20.10``. Here is
what the TypoScript for Orbit looks like:

.. code-block:: typoscript

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
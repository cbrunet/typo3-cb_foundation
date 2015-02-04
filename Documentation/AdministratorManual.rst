.. include:: _IncludedDirectives.rst

.. _admin-manual:

============================
Administrator Manual
============================

.. _installation:

Installation
=============

This extension has no special dependencies. There are two static templates:

Foundation framework
  This static template should always be included.
  It will load necessary scripts, and give you access to some configuration constants.

Foundation framework (default CSS)
  This static template will load default Foundation CSS files. You can load them for testing
  purposes. However, on a real website, you should consider customizing Foundation CSS, and thus you would not
  need to load this static template.


Upgrading
---------

When you upgrade Foundation framework, do not forget to regenerate the CSS files of your project against
the new Foundation SCSS files. It may also be necessary to clear all CSS and JavaScript caches.

.. _configuration:

Configuration
=============

.. _ext-conf:

Extension Configuration
-----------------------

useRTE
    If the option is true (default), RTE default configuration will be adapted to use Foundation stylesheets.
    Il will remove default classes and stylesheet of rtehtmlarea, and replace them with classes and
    stylesheet from Foundation. See :ref:`rte` for more details.

addPanels
    If the option is true (default), four options are added to the *Indentation and Frames*
    menu of content objects: *Panel*, *Panel with radius*, *Callout*, and *Callout with radius*.
    If you do not use those frames, or if it interfer with your own defined frames, you can
    disable this options, and the *Indentation and Frames* menu will not be altered by
    cb_foundation extension.


All the TypoScript constants can be edited using the constant editor. 

General TypoScript constants
----------------------------

Under the **FOUNDATION** category.

plugin.tx_cbfoundation.settings.js.loadall
    If **true**, all needed Foundation JavaScript libraries are loaded. Otherwise,
    this is your responsibility to load all the Foundation JavaScript components
    you need. Those components are located into
    ``EXT:cb_foundation/Resources/Public/JavaScript/foundation/``.

plugin.tx_cbfoundation.settings.js.jquery
    If **typo3**, loads *jquery* included in TYPO3 installation.
    If **ext**, loads *jquery* from the extension. In that case, you should
    take care of not loading *jquery* twice, from another extension for example.
    If **no**, do not loads *jquery*. This is then your responsibility to ensure
    *jquery* is loaded from somewhere else.

plugin.tx_cbfoundation.settings.js.modernizr
    If **true**, includes *modernizr*, and add *no-js* class to the *html* tag.
    If **false**, it is your responsibility to include it.
    *modernizr* is a JavaScript script that test the browser for various HTML5 and CSS3 features.

plugin.tx_cbfoundation.settings.viewport
    If **true**, add the *viewport* meta tag needed for Foundation, in the header of the document.
    If **false**, it is your responsibility to add this meta information to the document.

.. _orbit-configuration:

Orbit Slider configuration
--------------------------

Under the **FOUNDATION.ORBIT** category.

plugin.tx_cbfoundation.settings.orbit.animation
    Animation style: Sets the type of animation used for transitioning between slides (default: slide).

plugin.tx_cbfoundation.settings.orbit.timer_speed
    Timer speed: Sets the amount of time in milliseconds before transitioning a slide (default: 10000).

plugin.tx_cbfoundation.settings.orbit.pause_on_hover
    Pause on hover: Pauses on the current slide while hovering (default: true).

plugin.tx_cbfoundation.settings.orbit.resume_on_mouseout
    Resume on mouseout: If pause on hover is set to true, this setting resumes playback after mousing out of slide (default: false).

plugin.tx_cbfoundation.settings.orbit.next_on_click
    Next on click: Advance to next slide on click (default: true).

plugin.tx_cbfoundation.settings.orbit.animation_speed
    Animation speed: Sets the amount of time in milliseconds the transition between slides will last (default: 500).

plugin.tx_cbfoundation.settings.orbit.stack_on_small
    Stack on small: (default: false).

plugin.tx_cbfoundation.settings.orbit.navigation_arrows
    Navigation arrows: (default: true).

plugin.tx_cbfoundation.settings.orbit.slide_number
    Slide number: (default: true).

plugin.tx_cbfoundation.settings.orbit.slide_number_text
    Slide number text: (default: 'of').

plugin.tx_cbfoundation.settings.orbit.container_class
    Container class: (default: 'orbit-container').

plugin.tx_cbfoundation.settings.orbit.stack_on_small_class
    Stack on small class: (default: 'orbit-stack-on-small').

plugin.tx_cbfoundation.settings.orbit.next_class
    Next class: Class name given to the next button (default: 'orbit-next').

plugin.tx_cbfoundation.settings.orbit.prev_class
    Prev class: Class name given to the previous button (default: 'orbit-prev').

plugin.tx_cbfoundation.settings.orbit.timer_container_class
    Timer container class: Class name given to the timer (default: 'orbit-timer').

plugin.tx_cbfoundation.settings.orbit.timer_paused_class
    Timer paused class: Class name given to the paused button (default: 'paused').

plugin.tx_cbfoundation.settings.orbit.timer_progress_class
    Timer progress class: Class name given to the progress bar (default: 'orbit-progress').

plugin.tx_cbfoundation.settings.orbit.slides_container_class
    Slides container class: (default: 'orbit-slides-container').

plugin.tx_cbfoundation.settings.orbit.bullets_container_class
    Bullets container class: (default: 'orbit-bullets').

plugin.tx_cbfoundation.settings.orbit.slide_selector
    Slide selector: (default: 'li').

plugin.tx_cbfoundation.settings.orbit.bullets_active_class
    Bullets active class: Class name given to the active bullet (default: 'active').

plugin.tx_cbfoundation.settings.orbit.slide_number_class
    Slide number class: Class name given to the slide number (default: 'orbit-slide-number').

plugin.tx_cbfoundation.settings.orbit.caption_class
    Caption class: Class name given to the caption (default: 'orbit-caption').

plugin.tx_cbfoundation.settings.orbit.active_slide_class
    Active slide class: Class name given to the active slide (default: 'active').

plugin.tx_cbfoundation.settings.orbit.orbit_transition_class
    Orbit transition class: (default: 'orbit-transitioning').

plugin.tx_cbfoundation.settings.orbit.bullets
    Bullets: Does the slider have bullets visible? (default: true).

plugin.tx_cbfoundation.settings.orbit.circular
    Circular: Does the slider should go to the first slide after showing the last? (default: true).

plugin.tx_cbfoundation.settings.orbit.timer
    Timer: Does the slider have a timer visible? (default: true).

plugin.tx_cbfoundation.settings.orbit.variable_height
    Variable height: Does the slider have variable height content? (default: false).

plugin.tx_cbfoundation.settings.orbit.swipe
    Swipe: (default: true).

plugin.tx_cbfoundation.settings.orbit.before_slide_change
    Before slide change: Execute a function before the slide changes (default: noop).

plugin.tx_cbfoundation.settings.orbit.after_slide_change
    After slide change: Execute a function after the slide changes (default: noop).




.. _clearing-configuration:

Clearing Lightbox configuration
-------------------------------

Under the **FOUNDATION.CLEARING** category.

plugin.tx_cbfoundation.settings.clearing.close_selectors
    Specify the classes or IDs will close clearing when clicked. (default: '.clearing-close').

plugin.tx_cbfoundation.settings.clearing.touch_label
    Label for touch environment. (default: '&larr;&nbsp;Swipe to Advance&nbsp;&rarr;').




.. _magellan-configuration:

Magellan configuration
----------------------

Under the **FOUNDATION.MAGELLAN** category.

plugin.tx_cbfoundation.settings.magellan.active_class
    Specify the class used for active sections (default: 'active')

plugin.tx_cbfoundation.settings.magellan.threshold
    How many pixels until the magellan bar sticks (default: 0 = auto).

plugin.tx_cbfoundation.settings.magellan.destination_threshold
    Pixels from the top of destination for it to be considered active (default: 20).

plugin.tx_cbfoundation.settings.magellan.throttle_delay
    Calculation throttling to increase framerate (default: 50)

.. _categories-filter:

Filter by categories
--------------------

It is possible to filter images displayed in *Orbit slider* or in *Clearing lightbox*
using categories assigned to the file objects. You first need some categories to be
defined. You can create them in the List module. The you need to assign categories to
images. You can do it when you edit file properties in the Filelist module. 
Finally, you assign the categories to display in `plugin.tx_cbfoundation.settings.orbit.categories`
or `plugin.tx_cbfoundation.settings.clearing.categories` TypoScript setup.

For instance, if you define

.. code-block:: ts

    plugin.tx_cbfoundation.settings.orbit.categories = 1,2

only images having category id 1 or category id 2 (or both),
and images having no category assigned, will be displayed.




Customizing CSS
===============

There are many ways you can customize Foundation style sheets to adapt them for your website.
The prefered way is :ref:`using-sass`, but in simpler projects, you could also simply use
:ref:`default-css`, or :ref:`custom-css`.


.. _default-css:

Default Foundation CSS
----------------------

Loading **Foundation framework (default CSS)** static template, as described above,
will give you all the CSS needed for using Foundation features. However,
it comes with predefined colors and styles that could not match the design of your website.
Furthermore, using default CSS causes all websites to look similar.

A first way to customize CSS would be to copy the foundation css file
somewhere else, and to modify the ``plugin.tx_cbfoundation.settings.css_path``
TypoScript constant (it can be done in the constant editor) to point the
modified file. However, maintaining this could be cumbersome.


.. _custom-css:

Custom Foundation CSS
---------------------

A other simple way to customize the CSS of your website is to generate the
custom CSS file using the tool_ on the Foundation website. After downloading
the generated zip archive, you simply need to copy the
``css/foundation.min.css`` file somewhere on your website installation, and to
modify the ``plugin.tx_cbfoundation.settings.css_path`` TypoScript constant to point to it,
as described before. Do not forget to load **Foundation framework (default
CSS)** static template first.


.. _using-sass:

Using SASS
----------

Sass_ describes itself as *the most mature, stable, and powerful professional
grade CSS extension language in the world*. It is a CSS pre-processor,
allowing to simplify the process of managing large and complex style sheets.
It includes variables, nesting, mixins, inheritance, etc.

Sass (or scss) files need to be compiled to normal CSS files, in order to use it.
To do so, you need the sass processor, which is a command line tool written in Ruby.
However, you do not want to think about regenerating CSS files each time you modify
the scss file. This is why other tools exist to simplify the process. One of them
is compass_. Compass also is written in Ruby. You simply need a configuration file,
then you launch the compass process, and it watches your scss files continuously.
Each time you modify them, CSS files are regenerated on the fly.

To install sass and compass, you first need to have a working Ruby environment. 
On a Debian or Ubuntu system, you can do this using the following command:

.. code-block:: sh

    sudo apt-get install ruby-full rubygems
    
Then, you need to install sass and compass:

.. code-block:: sh

    sudo gem update --system
    sudo gem install compass


Using sass is the preferred way to customize foundation style sheets. However,
this require a little more setup. Here are the required steps to use it along
with this TYPO3 |extension_name| extension:

#. Copy compass configuration file ``config.rb``, located into ``EXT:cb_foundation/Files/``,
   to a convenient location. It could be a the root of your TYPO3 installation,
   or at the root of a custom extension you use for your website template.
#. Copy scss files ``_settings.scss`` and ``app.scss``,
   also located into ``EXT:cb_foundation/Files/``, to a directory than will contain
   your scss files. If you are using a custom extension for your website template,
   it could be located in ``Resources/Private/Scss/`` of this custom extension.
   ``app.scss`` can be renamed as you wish.
#. Modify the ``config.rb`` file you previously copied. The ``add_import_path`` directive
   should point to ``EXT:cb_foundation/Resources/Private/Scss/foundation``.
   ``sass_dir`` should point to the directory where you copied ``_settings.scss``
   and ``app.scss`` files. ``css_dir`` and ``images_dir``
   should respectively point to the public directories where CSS and images for your website
   are stored. Finally, ``javascripts_dir`` should point to 
   ``EXT:cb_foundation/Resources/Public/JavaScript``.
   In all those examples, ``EXT:`` refers to the path of the extensions (``typo3conf/ext``)
   and should not be written literally. All paths can be relative to the ``config.rb`` file,
   or absolutes. The given ``config.rb`` should work without any modifications
   if put in the root directory of an extension installed on the same installation
   that |extension_key|.
#. Start compass by typing ``compass watch`` in a terminal,
   in the directory containing ``config.rb`` file.
#. Include ``app.css`` file in your website, either using TypoScript or manually adding it 
   to your html template.
   This file will be generated in the CSS directory you specified in ``config.rb`` file.

You can now start customizing the style sheets of you website, by modifying
``app.scss`` and ``_settings.scss`` files. Every scss file you will add to the
Scss directory you created will automatically generate a corresponding css
file int the Css directory.



.. _sass: http://sass-lang.com/
.. _compass: http://compass-style.org/
.. _tool: http://foundation.zurb.com/develop/download.html#customizeFoundation


.. _upgradesass:

Upgrading SASS
--------------

Foundation 5.5 now is compatible with Sass 3.4. Therefore, you can now upgrade
both Sass and Compass to the latest version.

.. code-block:: sh

    sudo gem install sass
    sudo gem install compass


Customizing templates
=====================

As usual for Extbase extensions, paths to Fluid templates are defined in 
``plugin.tx_cbfoundation.view.templateRootPath``, ``plugin.tx_cbfoundation.view.partialRootPath``,
and ``plugin.tx_cbfoundation.view.layoutRootPath`` TypoScript setup. 
Those values are controlled by TypoScript constants having similar names.
Currently, only templates are used (no layouts or partials). 

If you want to modify the Fluid templates, you only need to copy the current ``Templates``
folder elsewhere, and to adjust TypoScript setup accordingly. ``Templates/CmsLayout`` 
is used for the preview in backend. You should not need to modify it.

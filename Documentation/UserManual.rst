﻿============
Users manual
============


Using Foundation Framework
==========================

Once :ref:`installed <installation>` and :ref:`configured <configuration>`,
Foundation gives you a lot of CSS classes and
JavaScript functions you can integrate to your website. 
In fact, you can use anything that is in the `official documentation`_.

You simply need to integrade the needed markups and CSS classes to 
your HTML or Fluid templates.

However, to simplify the process, we already provide you some 
plugins you can directly integrate to the content of your website.
Those plugins are listed when you insert a new content element,
under the *Foundation* tab:

.. figure:: Images/plugins.png
    :alt: Insert content element

.. _official documentation: http://foundation.zurb.com/docs/




.. _orbit-slider:

Orbit Slider
============

Orbit is an easy, powerful, responsive image slider that allows users to swipe on touch-enabled devices.

.. figure:: Images/orbit.jpg
    :alt: Orbit responsive image slider screenshot

    Orbit responsive image slider (screenshot)

    This screenshot, borrowed from official Foundation website, shows an example orbit slider,
    with navigation arrows, bullets, slide number, caption, and progress bar.

Plugin settings are very similar to images content element. In fact, you can switch
between orbit slider and images content elements without changing anything in the configuration.
Optional captions can be added in the description field of each image. You can also
set a optional link on any image.

You will find more information about the `Orbit slider`_ on the official Foundation documentation.
To configure different options for the Orbit slider, see :ref:`orbit-configuration` in the :ref:`admin-manual`.

.. _Orbit slider: http://foundation.zurb.com/docs/components/orbit.html



.. _clearing-lightbox:

Clearing Lightbox
=================

Clearing makes it easy to create responsive lightboxes with any size image.
It can be a good alternative to Orbit, when you need to handle variable-height content.

.. figure:: Images/clearing.jpg
    :alt: Clearing lightbox screenshot

    Clearing lightbox (screenshot)

    This screenshot, borrowed from official Foundation website, shows an example clearing lightbox.

Plugin settings are identical to those of orbit slider, and very similar to images content element.
Again, you can change between Clearing Lightbox, Orbit Slider, and Images content elements
without changing any other settings.

You will find more information about the `Clearing Lightbox`_ on the official Foundation documentation.
To configure different options for the Clearing lightbox, see :ref:`clearing-configuration` in the :ref:`admin-manual`.

.. _Clearing Lightbox: http://foundation.zurb.com/docs/components/clearing.html


.. _flexvid:

Flexible Video
==============

Flex Video lets browsers automatically scale video objects in your webpages.
If you're embedding a video from YouTube, Vimeo, or another site that uses
iframe, embed or object elements, you can wrap your video using this plugin to
create an intrinsic ratio that will properly scale your video on any device.

The plugin configuration is very similar to raw HTML content element.
In the source field, you simply paste the embeding code you grap from YouTube,
Vimeo, or any other source.

.. figure:: Images/flexvid.png
    :alt: Flexible video plugin configuration

On the *Appearence* tab, there are two checkboxes. If **widescreen** is checked,
the aspect ratio of the video is set to 16:9, otherwise is it 4:3.
If **vimeo** is checked, the space reserved for play controls is removed,
since the controls are inside the video frame on Vimeo.

You will find more information about `Flex Video`_ on the official Foundation documentation.

.. _Flex Video: http://foundation.zurb.com/docs/components/flex_video.html
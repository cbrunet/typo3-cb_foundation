
mod.wizards.newContentElement.wizardItems.Foundation {
    header = Foundation
    elements {
        orbit {
            icon = ../typo3conf/ext/cb_foundation/Resources/Public/Icons/orbit.gif
            title = Orbit Slider
            description = Responsive image slider
            tt_content_defValues.CType = cbfoundation_orbit
        }
        clearing {
            icon = ../typo3conf/ext/cb_foundation/Resources/Public/Icons/clearing.gif
            title = Clearing Lightbox
            description = Responsive lightbox
            tt_content_defValues.CType = cbfoundation_clearing
        }
        flexvid {
            icon = ../typo3conf/ext/cb_foundation/Resources/Public/Icons/flexvid.gif
            title = Flexible Video
            description = Flexible Video Container
            tt_content_defValues.CType = cbfoundation_flexvid
        }
        breadcrumbs {
            icon = ../typo3conf/ext/cb_foundation/Resources/Public/Icons/breadcrumbs.gif
            title = Breadcrumbs
            description = Breadcrumbs navigation (rootline)
            tt_content_defValues.CType = cbfoundation_breadcrumbs
        }
        magellan {
            icon = ../typo3conf/ext/cb_foundation/Resources/Public/Icons/magellan.gif
            title = Magellan
            description = Magellan expedition (section index menu)
            tt_content_defValues.CType = cbfoundation_magellan
        }
    }
    show := addToList(orbit, clearing, flexvid, breadcrumbs, magellan)
}

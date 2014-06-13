
mod.wizards.newContentElement.wizardItems.tx_cbfoundation {
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
    }
    show = orbit, clearing, flexvid
}

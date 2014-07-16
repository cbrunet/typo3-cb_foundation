
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
        breadcrumbs {
            icon = ../typo3conf/ext/cb_foundation/Resources/Public/Icons/breadcrumbs.gif
            title = Breadcrumbs
            description = Breadcrumbs navigation (rootline)
            tt_content_defValues.CType = cbfoundation_breadcrumbs
        }
    }
    show = orbit, clearing, flexvid, breadcrumbs
}

TCEFORM {
    tt_content {
        section_frame {
            addItems {
                100 = LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:frame.panel
                101 = LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:frame.panelradius
                102 = LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:frame.callout
                103 = LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:frame.calloutradius
            }
        }
    }
}
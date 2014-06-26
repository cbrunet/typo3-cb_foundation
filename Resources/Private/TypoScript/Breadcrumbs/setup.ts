lib.cb_foundation.breadcrumbs = HMENU
lib.cb_foundation.breadcrumbs {
    special = rootline
    special.range = 0|-1
    includeNotInMenu = 1
    1 = TMENU
    1.target = _self
    1.wrap = <nav class="breadcrumbs"> | </nav>
    1.NO {
        stdWrap.field = title
        ATagTitle.field = nav_title // title
        
    }
    1.CUR < .NO
    1.CUR = 1
    1.CUR {
        ATagParams = class="current"

    }
}

tt_content.cbfoundation_breadcrumbs =< lib.cb_foundation.breadcrumbs

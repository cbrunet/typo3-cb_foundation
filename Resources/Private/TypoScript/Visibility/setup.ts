
includeLibs.foundation = EXT:cb_foundation/Classes/Hooks/user_Foundation.php


lib.cb_foundation.hide = TEXT
lib.cb_foundation.hide.field = tx_cbfoundation_hide
lib.cb_foundation.hide.stdWrap.postUserFunc = user_Foundation->parseHideField

lib.cb_foundation.hidden = TEXT
lib.cb_foundation.hidden.field = tx_cbfoundation_hidden
lib.cb_foundation.hidden.stdWrap.postUserFunc = user_Foundation->parseHiddenField

tt_content.stdWrap.innerWrap.cObject.default.20.65 <= lib.cb_foundation.hide
tt_content.stdWrap.innerWrap.cObject.default.20.66 <= lib.cb_foundation.hidden


includeLibs.foundation = EXT:cb_foundation/Classes/Hooks/user_Foundation.php

tt_content.stdWrap.innerWrap.cObject.default.20.65 = TEXT
tt_content.stdWrap.innerWrap.cObject.default.20.65 {
	field = tx_cbfoundation_hide
	stdWrap.postUserFunc = user_Foundation->parseHideField
}
tt_content.stdWrap.innerWrap.cObject.default.20.66 = TEXT
tt_content.stdWrap.innerWrap.cObject.default.20.66 {
	field = tx_cbfoundation_hidden
	stdWrap.postUserFunc = user_Foundation->parseHiddenField
}
lib.cb_foundation.magellan = HMENU
lib.cb_foundation.magellan {
	1 = TMENU
	1 {
		sectionIndex = 1
		sectionIndex.type = header
		sectionIndex.useColPos = 0
		wrap = <div data-magellan-expedition="fixed"><dl class="sub-nav"> | </dl></div>
		NO {
			allWrap = <dd data-magellan-arrival="c{field:uid}"> | </dd>
			allWrap.insertData = 1
		}
	}
	special = list
	special.value.data = page:uid
}

tt_content.cbfoundation_magellan =< lib.cb_foundation.magellan

tt_content.stdWrap.innerWrap.cObject.default.11 = TEXT
tt_content.stdWrap.innerWrap.cObject.default.11 {
	data = field:uid
	noTrimWrap = | data-magellan-destination="c|" |
}
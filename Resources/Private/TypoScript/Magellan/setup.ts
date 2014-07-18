lib.cb_foundation.magellan = HMENU
lib.cb_foundation.magellan {
	1 = TMENU
	1 {
		sectionIndex = 1
		sectionIndex.type = header
		sectionIndex.useColPos = -1
		wrap = <div data-magellan-expedition="fixed"><dl class="sub-nav"> | </dl></div>
		NO {
			allWrap = <dd data-magellan-arrival="c{field:sectionIndex_uid}">|</dd>
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

# Magellan parameters
page.jsFooterInline.65.20.30 = COA
page.jsFooterInline.65.20.30 {
	stdWrap.wrap = magellan: {|},
	stdWrap.required = 1
	
	1 = TEXT
	1.value = {$plugin.tx_cbfoundation.settings.magellan.active_class}
	1.stdWrap.wrap = active_class: '|',
	1.stdWrap.required = 1

	2 = TEXT
	2.value = {$plugin.tx_cbfoundation.settings.magellan.threshold}
	2.stdWrap.wrap = threshold: |,
	2.stdWrap.required = 1

	3 = TEXT
	3.value = {$plugin.tx_cbfoundation.settings.magellan.destination_threshold}
	3.stdWrap.wrap = destination_threshold: |,
	3.stdWrap.required = 1

	4 = TEXT
	4.value = {$plugin.tx_cbfoundation.settings.magellan.throttle_delay}
	4.stdWrap.wrap = throttle_delay: |,
	4.stdWrap.required = 1
}


plugin.tx_cbfoundation.settings.clearing {
	categories =
}

# Clearing parameters
page.jsFooterInline.65.20.20 = COA
page.jsFooterInline.65.20.20 {
	stdWrap.wrap = clearing: {|},
	stdWrap.required = 1
	
	1 = TEXT
	1.value = {$plugin.tx_cbfoundation.settings.clearing.close_selectors}
	1.stdWrap.wrap = close_selectors: '|',
	1.stdWrap.required = 1
	
	2 = TEXT
	2.value = {$plugin.tx_cbfoundation.settings.clearing.touch_label}
	2.stdWrap.wrap = touch_label: '|',
	2.stdWrap.required = 1
}


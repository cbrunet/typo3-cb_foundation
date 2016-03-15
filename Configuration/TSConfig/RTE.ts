RTE {
	default {
		contentCSS = EXT:cb_foundation/Resources/Public/Css/rte.css
		proc {
			allowedClasses = button,label,left,right,radius,round,large,small,tiny,expand,alert,success,warning,secondary,disabled,text-left,text-right,text-center,text-justify,panel,callout,subheader,square,circle,disc,no-bullet,scroll,stack,hover,
		}
		showButtons := addToList(keyboard,citation,small,definitionlist, definitionitem)
		buttons {
			blockstyle {
				tags {
					div.allowedClasses = text-left,text-right,text-center,text-justify,callout,primary,secondary,success,warning,alert,small,large
					td.allowedClasses = text-left,text-right,text-center,text-justify
					th.allowedClasses = text-left,text-right,text-center,text-justify
					h1.allowedClasses = text-left,text-right,text-center,text-justify
					h2.allowedClasses = text-left,text-right,text-center,text-justify
					h3.allowedClasses = text-left,text-right,text-center,text-justify
					h4.allowedClasses = text-left,text-right,text-center,text-justify
					h5.allowedClasses = text-left,text-right,text-center,text-justify
					h6.allowedClasses = text-left,text-right,text-center,text-justify
					address.allowedClasses = text-left,text-right,text-center,text-justify
					ul.allowedClasses = square,circle,disc,no-bullet
					table.allowedClasses = hover,stack,scroll
				}
			}
			textstyle {
				tags {
					span {
						allowedClasses = label,radius,round,success,alert,secondary,warning
					}
				}
			}
			link {
				properties.class.allowedClasses = button,left,right,large,small,tiny,expand,primary,secondary,success,alert,disabled,warning,hollow
			}
			left.useClass = text-left
			right.useClass = text-right
			center.useClass = text-center
			justifyfull.useClass = text-justify
		}
	}
	classes >
	classes {
		button {
			name = Button
			value = background-color: #008CBA; color: #FFFFFF;
		}
		label {
			name = Label
			value = background-color: #008CBA; color: #FFFFFF;
		}
		left {
			name = Float left
		}
		right {
			name = Float right
		}
		large {
			name = Large
		}
		small {
			name = Small
		}
		tiny {
			name = Tiny
		}
		expand {
			name = Expand
		}
		alert {
			name = Alert
			value = color: #f04124;
		}
		warning {
			name = Warning
			value = color: #f08a24;
		}
		success {
			name = Success
			value = color: #43AC6A;
		}
		secondary {
			name = Secondary
			value = color: #e7e7e7;
		}
		disabled {
			name = Disabled
		}
		text-left {
			name = Align left
			value = text-align: left;
		}
		text-right {
			name = Align right
			value = text-align: right;
		}
		text-center {
			name = Align center
			value = text-align: center;
		}
		text-justify {
			name = Justify
			value = text-align: justify;
		}
		callout {
			name = Callout
			value = border: 1px solid black;
		}
	}
	mutuallyExclusiveClasses {
		align = text-left,text-right,text-center,text-justify
		size = tiny,small,large
		color = alert,warning,success,primary,secondary
		shape = round,radius
		liststyle = square,circle,disc,no-bullet
	}
}

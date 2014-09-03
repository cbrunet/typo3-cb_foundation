RTE {
	default {
		proc {
			allowedClasses := addToList(label)
		}

		buttons {
			textstyle {
				tags {
					span {
						allowedClasses := addToList(label)
					}
				}
			}
			link {
				properties.class.allowedClasses := addToList(button)
			}
		}
	}
	classes {
		label {
			name = Label
			value = background-color: #008CBA; color: #FFFFFF;
		}
	}
	classesAnchor {
		externButton {
			class = button
			type = url
		}
		internButton {
			class = button
			type = page
		}
		fileButton {
			class = button
			type = file
		}
		mailButton {
			class = button
			type = mail
		}
	}
}
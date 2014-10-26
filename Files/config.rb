# Require any additional compass plugins here.
add_import_path "../cb_foundation/Resources/Private/Scss/foundation"

# Set this to the root of your project when deployed:
http_path = "/"
css_dir = "Resources/Public/Css"
sass_dir = "Resources/Private/scss"
images_dir = "Resources/Public/Img"
javascripts_dir = "Resources/Public/JS"

# You can select your preferred output style here (can be overridden via the command line):
output_style = :compressed
# output_style = :expanded or :nested or :compact or :compressed

# To enable relative paths to assets via compass helper functions. Uncomment:
# relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
line_comments = false


# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
# preferred_syntax = :sass
# and then run:
# sass-convert -R --from scss --to sass sass scss && rm -rf sass && mv scss sass

# sass 3.3 and Foundation 5.4.6 result in a lot of warnings, so disable them
disable_warnings = true
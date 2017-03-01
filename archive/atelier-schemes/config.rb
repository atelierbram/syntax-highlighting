# Require any additional compass plugins here.

# https://github.com/postcss/autoprefixer
require 'autoprefixer-rails'
# require 'csso'

on_stylesheet_saved do |file|
  css = File.read(file)
  map = file + '.map'

  if File.exists? map
    result = AutoprefixerRails.process(css,
      from: file,
      to:   file,
      map:  { prev: File.read(map), inline: false })
    File.open(file, 'w') { |io| io << result.css }
    File.open(map,  'w') { |io| io << result.map }
  else
    File.open(file, 'w') { |io| io << AutoprefixerRails.process(css) }
  end
end

# on_stylesheet_saved do |file|
#   css = File.read(file)
#   File.open(file, 'w') do |io|
#     io << AutoprefixerRails.process(css)
#   end
# end

http_path = '/'
css_dir = 'dist/prism-css'
sass_dir = 'dist/prism-sass'
images_dir = 'assets/img'
javascripts_dir = 'assets/js'

# You can select your preferred output style here (can be overridden via the command line):
# output_style = :expanded or :nested or :compact or :compressed
# output_style = :expanded
output_style = :compressed

# To enable relative paths to assets via compass helper functions. Uncomment:
relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
# line_comments = false
line_comments = false


# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
# preferred_syntax = :sass
preferred_syntax = :scss
# and then run:
# sass-convert -R --from scss --to sass sass scss && rm -rf sass && mv scss sass

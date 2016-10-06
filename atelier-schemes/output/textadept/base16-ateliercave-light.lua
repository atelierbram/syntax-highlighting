-- Atelier Cave theme for Textadept (http://foicica.com/textadept/)
-- Theme author: Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/cave)
-- Base16 (https://github.com/chriskempson/base16)
-- Build with Base16 Builder (https://github.com/chriskempson/base16-builder)
-- Repository: https://github.com/rgieseke/ta-themes

local buffer = buffer
local property, property_int = buffer.property, buffer.property_int

property['color.base00'] = 0x1c1719
property['color.base01'] = 0x2a2326
property['color.base02'] = 0x605258
property['color.base03'] = 0x6d5f65
property['color.base04'] = 0x87787e
property['color.base05'] = 0x92878b
property['color.base06'] = 0xe7dfe2
property['color.base07'] = 0xf4ecef
property['color.base08'] = 0x7846be
property['color.base09'] = 0x3c57aa
property['color.base0A'] = 0x3b6ea0
property['color.base0B'] = 0x92922a
property['color.base0C'] = 0xc68b39
property['color.base0D'] = 0xdb6d57
property['color.base0E'] = 0xe75a95
property['color.base0F'] = 0xbf40bf

-- Default font.
property['font'], property['fontsize'] = 'Bitstream Vera Sans Mono', 10
if WIN32 then
  property['font'] = 'Courier New'
elseif OSX then
  property['font'], property['fontsize'] = 'Monaco', 12
end

-- Token styles.
property['style.nothing'] = ''
property['style.class'] = 'fore:%(color.base0A)'
property['style.comment'] = 'fore:%(color.base04)'
property['style.constant'] = 'fore:%(color.base09)'
property['style.error'] = 'fore:%(color.base08),italics'
property['style.function'] = 'fore:%(color.base0E)'
property['style.keyword'] = 'fore:%(color.base0E)'
property['style.label'] = 'fore:%(color.base0A)'
property['style.number'] = 'fore:%(color.base09)'
property['style.operator'] = 'fore:%(color.base02)'
property['style.regex'] = 'fore:%(color.base0C)'
property['style.string'] = 'fore:%(color.base0B)'
property['style.preprocessor'] = 'fore:%(color.base0A)'
property['style.type'] = 'fore:%(color.base09)'
property['style.variable'] = 'fore:%(color.base08)'
property['style.whitespace'] = ''
property['style.embedded'] = 'fore:%(color.base0F),back:%(color.base06)'
property['style.identifier'] = '%(style.nothing)'

-- Predefined styles.
property['style.default'] = 'font:%(font),size:%(fontsize),'..
                            'fore:%(color.base02),back:%(color.base07)'
property['style.linenumber'] = 'fore:%(color.base05),back:%(color.base07)'
property['style.bracelight'] = 'fore:%(color.base0C),underlined'
property['style.bracebad'] = 'fore:%(color.base08)'
property['style.controlchar'] = '%(style.nothing)'
property['style.indentguide'] = 'fore:%(color.base03)'
property['style.calltip'] = 'fore:%(color.base05),back:%(color.base00)'

-- Multiple Selection and Virtual Space.
--buffer.additional_sel_alpha =
--buffer.additional_sel_fore =
--buffer.additional_sel_back =
--buffer.additional_caret_fore =

-- Caret and Selection Styles.
buffer:set_sel_fore(true, property_int['color.base07'])
buffer:set_sel_back(true, property_int['color.base02'])
--buffer.sel_alpha =
buffer.caret_fore = property_int['color.base00']
buffer.caret_line_back = property_int['color.base06']
--buffer.caret_line_back_alpha =

-- Fold Margin.
buffer:set_fold_margin_colour(true, property_int['color.base07'])
buffer:set_fold_margin_hi_colour(true, property_int['color.base07'])

-- Markers.
local MARK_BOOKMARK, t_run = textadept.bookmarks.MARK_BOOKMARK, textadept.run
--buffer.marker_fore[MARK_BOOKMARK] = property_int['color.base05']
buffer.marker_back[MARK_BOOKMARK] = property_int['color.base0D']
--buffer.marker_fore[t_run.MARK_WARNING] = property_int['color.base05']
buffer.marker_back[t_run.MARK_WARNING] = property_int['color.base0A']
--buffer.marker_fore[t_run.MARK_ERROR] = property_int['color.base05']
buffer.marker_back[t_run.MARK_ERROR] = property_int['color.base08']
for i = 25, 31 do -- fold margin markers
  buffer.marker_fore[i] = property_int['color.base07']
  buffer.marker_back[i] = property_int['color.base04']
  buffer.marker_back_selected[i] = property_int['color.base05']
end

-- Long Lines.
buffer.edge_colour = property_int['color.base06']

-- Add red and green for diff lexer.
property['color.red'] = property['color.base08']
property['color.green'] = property['color.base0B']

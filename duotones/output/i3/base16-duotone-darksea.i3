# ~/.i3/config
# i3 config template
# Base16 Duotone-DarkSea by adapted from: Simurai (https://github.com/simurai/duotone-dark-sea-syntax/)
# template by Matt Parnell, @parnmatt

set $base00 #1d262f
set $base01 #303f4f
set $base02 #556e8b
set $base03 #6e88a6
set $base04 #75a0d1
set $base05 #91c1f8
set $base06 #b8d9fe
set $base07 #ebf4ff
set $base08 #52a3ff
set $base09 #30c090
set $base0A #3bce9d
set $base0B #708f85
set $base0C #68d9b4
set $base0D #54d4a9
set $base0E #85beff
set $base0F #6bb0ff

client.focused $base0D $base0D $base00 $base01
client.focused_inactive $base02 $base02 $base03 $base01
client.unfocused $base01 $base01 $base03 $base01
client.urgent $base02 $base08 $base07 $base08

## remember to add the rest of your configuration

bar {
    ## remember to add your favourite status bar, i.e.,
    # status_command i3status
    
        colors {
        separator $base03
        background $base01
        statusline $base05
        focused_workspace $base0C $base0D $base00
        active_workspace $base02 $base02 $base07
        inactive_workspace $base01 $base01 $base03
        urgent_workspace $base08 $base08 $base07
    }
}



# ~/.i3/config
# i3 config template
# Base16 Duotone-DarkEarth by adapted from: Simurai (https://github.com/simurai/duotone-dark-earth-syntax/)
# template by Matt Parnell, @parnmatt

set $base00 #322d29
set $base01 #4c4642
set $base02 #695f59
set $base03 #85786f
set $base04 #ac9b91
set $base05 #fcb07d
set $base06 #fed4b8
set $base07 #fff3eb
set $base08 #c08e6d
set $base09 #bfa05a
set $base0A #ccad66
set $base0B #a89771
set $base0C #e0c585
set $base0D #d7b975
set $base0E #c8ab98
set $base0F #c39d83

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



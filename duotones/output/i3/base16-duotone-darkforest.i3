# ~/.i3/config
# i3 config template
# Base16 Duotone-DarkForest by adapted from: Simurai (https://github.com/simurai/duotone-dark-forest-syntax/)
# template by Matt Parnell, @parnmatt

set $base00 #2a2d2a
set $base01 #3f4a3f
set $base02 #556855
set $base03 #698669
set $base04 #80a380
set $base05 #78dd78
set $base06 #8bfe8b
set $base07 #f0fff0
set $base08 #54b654
set $base09 #a1b34d
set $base0A #afc059
set $base0B #919966
set $base0C #cce06c
set $base0D #bed161
set $base0E #77c577
set $base0F #65bd65

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



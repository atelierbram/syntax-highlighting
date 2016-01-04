# ~/.i3/config
# i3 config template
# Base16 Duotone-Dark by adapted from: Simurai (https://github.com/simurai/duotone-dark-syntax/)
# template by Matt Parnell, @parnmatt

set $base00 #2a2734
set $base01 #423f50
set $base02 #5a566c
set $base03 #726e87
set $base04 #837bad
set $base05 #9b87fd
set $base06 #c4b8fe
set $base07 #eeebff
set $base08 #7765d2
set $base09 #c07830
set $base0A #d48535
set $base0B #968f88
set $base0C #e8a35e
set $base0D #de9145
set $base0E #a49bcf
set $base0F #8e81cf

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



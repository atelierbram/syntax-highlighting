# ~/.i3/config
# i3 config template
# Base16 Duotone-DarkPool by adapted from: Simurai (https://github.com/simurai/duotone-dark-syntax/)
# template by Matt Parnell, @parnmatt

set $base00 #1e1d20
set $base01 #37343c
set $base02 #4f4b58
set $base03 #686175
set $base04 #807792
set $base05 #a57ef1
set $base06 #d4c2fa
set $base07 #f5f0fe
set $base08 #7f5bc8
set $base09 #b46e3c
set $base0A #c87941
set $base0B #b28c70
set $base0C #dd945f
set $base0D #d38650
set $base0E #a089cd
set $base0F #9072ca

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



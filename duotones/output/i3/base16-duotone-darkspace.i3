# ~/.i3/config
# i3 config template
# Base16 Duotone-DarkSpace by adapted from: Simurai (https://github.com/simurai/duotone-dark-space-syntax/)
# template by Matt Parnell, @parnmatt

set $base00 #24242e
set $base01 #3a3a4a
set $base02 #58586f
set $base03 #767693
set $base04 #9d9dc8
set $base05 #8888fb
set $base06 #afaffd
set $base07 #ebebff
set $base08 #6c6ccb
set $base09 #dd672c
set $base0A #e67841
set $base0B #94796b
set $base0C #f49666
set $base0D #ee8753
set $base0E #9999d1
set $base0F #8383ce

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



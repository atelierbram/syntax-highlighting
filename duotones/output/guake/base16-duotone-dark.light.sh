#!/usr/bin/env bash
# Base16 Duotone-Dark - Guake Terminal color scheme install script
# adapted from: Simurai (https://github.com/simurai/duotone-dark-syntax/)


gconftool-2 -s -t string /apps/guake/style/background/color "#eeeeebebffff"
gconftool-2 -s -t string /apps/guake/style/font/color "#5c5c58587474"
gconftool-2 -s -t string /apps/guake/style/font/palette "#eeeeebebffff:#77776969bfbf:#7c7c75756e6e:#cece85853b3b:#d4d494945454:#98988d8dcece:#dadaa3a36c6c:#a3a39191fdfd:#74746e6e9191:#77776969bfbf:#7c7c75756e6e:#cece85853b3b:#d4d494945454:#98988d8dcece:#dadaa3a36c6c:#2a2a27273434"

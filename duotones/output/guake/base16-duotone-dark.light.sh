#!/usr/bin/env bash
# Base16 Duotone-Dark - Guake Terminal color scheme install script
# adapted from: Simurai (https://github.com/simurai/duotone-dark-syntax/)


gconftool-2 -s -t string /apps/guake/style/background/color "#eeeeebebffff"
gconftool-2 -s -t string /apps/guake/style/font/color "#5a5a56566c6c"
gconftool-2 -s -t string /apps/guake/style/font/palette "#eeeeebebffff:#77776565d2d2:#7c7c75756e6e:#d4d485853535:#dede91914545:#a4a49b9bcfcf:#e8e8a3a35e5e:#9b9b8787fdfd:#72726e6e8787:#77776565d2d2:#7c7c75756e6e:#d4d485853535:#dede91914545:#a4a49b9bcfcf:#e8e8a3a35e5e:#2a2a27273434"

#!/usr/bin/env bash
# Base16 Duotone-Dark - Guake Terminal color scheme install script
# adapted from: Simurai (https://github.com/simurai/duotone-dark-syntax/)


gconftool-2 -s -t string /apps/guake/style/background/color "#2a2a27273434"
gconftool-2 -s -t string /apps/guake/style/font/color "#a3a39191fdfd"
gconftool-2 -s -t string /apps/guake/style/font/palette "#2a2a27273434:#70705e5ec9c9:#96968f8f8888:#d4d485853535:#dede91914545:#98988d8dcece:#e8e8a3a35e5e:#a3a39191fdfd:#777773738c8c:#70705e5ec9c9:#96968f8f8888:#d4d485853535:#dede91914545:#98988d8dcece:#e8e8a3a35e5e:#eeeeebebffff"

#!/usr/bin/env bash
# Base16 Duotone-Dark - Guake Terminal color scheme install script
# adapted from: Simurai (https://github.com/simurai/duotone-dark-syntax/)


gconftool-2 -s -t string /apps/guake/style/background/color "#eeeeebebffff"
gconftool-2 -s -t string /apps/guake/style/font/color "#5f5f5b5b7171"
gconftool-2 -s -t string /apps/guake/style/font/palette "#eeeeebebffff:#70705e5ec9c9:#96968f8f8888:#d4d485853535:#dede91914545:#98988d8dcece:#e8e8a3a35e5e:#a3a39191fdfd:#777773738c8c:#70705e5ec9c9:#96968f8f8888:#d4d485853535:#dede91914545:#98988d8dcece:#e8e8a3a35e5e:#2a2a27273434"

#!/usr/bin/env bash
# Base16 Atelier Plateau - Guake Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/plateau)


gconftool-2 -s -t string /apps/guake/style/background/color "#1b1b18181818"
gconftool-2 -s -t string /apps/guake/style/font/color "#8a8a85858585"
gconftool-2 -s -t string /apps/guake/style/font/palette "#1b1b18181818:#caca49494949:#4b4b8b8b8b8b:#a0a06e6e3b3b:#72727272caca:#84846464c4c4:#54548585b6b6:#8a8a85858585:#65655d5d5d5d:#caca49494949:#4b4b8b8b8b8b:#a0a06e6e3b3b:#72727272caca:#84846464c4c4:#54548585b6b6:#f4f4ecececec"

#!/usr/bin/env bash
# Base16 Atelier Dune - Guake Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/dune)


gconftool-2 -s -t string /apps/guake/style/background/color "#202020201d1d"
gconftool-2 -s -t string /apps/guake/style/font/color "#a6a6a2a28c8c"
gconftool-2 -s -t string /apps/guake/style/font/palette "#202020201d1d:#d7d737373737:#6060acac3939:#aeae95951313:#66668484e1e1:#b8b85454d4d4:#1f1fadad8383:#a6a6a2a28c8c:#7d7d7a7a6868:#d7d737373737:#6060acac3939:#aeae95951313:#66668484e1e1:#b8b85454d4d4:#1f1fadad8383:#fefefbfbecec"

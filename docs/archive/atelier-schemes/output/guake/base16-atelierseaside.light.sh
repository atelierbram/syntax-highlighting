#!/usr/bin/env bash
# Base16 Atelier Seaside - Guake Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/seaside/)


gconftool-2 -s -t string /apps/guake/style/background/color "#f4f4fbfbf4f4"
gconftool-2 -s -t string /apps/guake/style/font/color "#5e5e6e6e5e5e"
gconftool-2 -s -t string /apps/guake/style/font/palette "#f4f4fbfbf4f4:#e6e619193c3c:#2929a3a32929:#989898981b1b:#3d3d6262f5f5:#adad2b2beeee:#19199999b3b3:#8c8ca6a68c8c:#68687d7d6868:#e6e619193c3c:#2929a3a32929:#989898981b1b:#3d3d6262f5f5:#adad2b2beeee:#19199999b3b3:#131315151313"

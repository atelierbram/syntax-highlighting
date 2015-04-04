#!/usr/bin/env bash
# Base16 Atelier Estuary - Guake Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/estuary)


gconftool-2 -s -t string /apps/guake/style/background/color "#f4f4f3f3ecec"
gconftool-2 -s -t string /apps/guake/style/font/color "#5f5f5e5e4e4e"
gconftool-2 -s -t string /apps/guake/style/font/palette "#f4f4f3f3ecec:#baba62623636:#7d7d97972626:#a5a598980d0d:#3636a1a16666:#5f5f91918282:#5b5b9d9d4848:#929291918181:#6c6c6b6b5a5a:#baba62623636:#7d7d97972626:#a5a598980d0d:#3636a1a16666:#5f5f91918282:#5b5b9d9d4848:#222222221b1b"

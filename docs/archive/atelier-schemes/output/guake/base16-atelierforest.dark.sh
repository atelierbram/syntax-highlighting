#!/usr/bin/env bash
# Base16 Atelier Forest - Guake Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/forest)


gconftool-2 -s -t string /apps/guake/style/background/color "#1b1b19191818"
gconftool-2 -s -t string /apps/guake/style/font/color "#a8a8a1a19f9f"
gconftool-2 -s -t string /apps/guake/style/font/palette "#1b1b19191818:#f2f22c2c4040:#7b7b97972626:#c3c384841818:#40407e7ee7e7:#66666666eaea:#3d3d9797b8b8:#a8a8a1a19f9f:#76766e6e6b6b:#f2f22c2c4040:#7b7b97972626:#c3c384841818:#40407e7ee7e7:#66666666eaea:#3d3d9797b8b8:#f1f1efefeeee"

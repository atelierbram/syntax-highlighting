#!/usr/bin/env bash
# Base16 Atelier Lakeside - Guake Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/lakeside/)


gconftool-2 -s -t string /apps/guake/style/background/color "#ebebf8f8ffff"
gconftool-2 -s -t string /apps/guake/style/font/color "#51516d6d7b7b"
gconftool-2 -s -t string /apps/guake/style/font/palette "#ebebf8f8ffff:#d2d22d2d7272:#56568c8c3b3b:#8a8a8a8a0f0f:#25257f7fadad:#6b6b6b6bb8b8:#2d2d8f8f6f6f:#7e7ea2a2b4b4:#5a5a7b7b8c8c:#d2d22d2d7272:#56568c8c3b3b:#8a8a8a8a0f0f:#25257f7fadad:#6b6b6b6bb8b8:#2d2d8f8f6f6f:#16161b1b1d1d"

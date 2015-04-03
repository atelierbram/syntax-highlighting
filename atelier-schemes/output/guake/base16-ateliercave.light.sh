#!/usr/bin/env bash
# Base16 Atelier Cave - Guake Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/cave)


gconftool-2 -s -t string /apps/guake/style/background/color "#f4f4f0f0fafa"
gconftool-2 -s -t string /apps/guake/style/font/color "#5c5c52526b6b"
gconftool-2 -s -t string /apps/guake/style/font/palette "#f4f4f0f0fafa:#cfcf59598a8a:#747487875a5a:#a0a08f8f3b3b:#65657777d2d2:#95955a5ae7e7:#32328f8faeae:#8f8f85859d9d:#69695e5e7878:#cfcf59598a8a:#747487875a5a:#a0a08f8f3b3b:#65657777d2d2:#95955a5ae7e7:#32328f8faeae:#1e1e1a1a2323"

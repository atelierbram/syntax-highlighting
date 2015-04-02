#!/usr/bin/env bash
# Base16 Atelier Cave - Guake Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/cave)


gconftool-2 -s -t string /apps/guake/style/background/color "#f4f4f0f0fafa"
gconftool-2 -s -t string /apps/guake/style/font/color "#62624e4e7e7e"
gconftool-2 -s -t string /apps/guake/style/font/palette "#f4f4f0f0fafa:#cfcf59598a8a:#747487875a5a:#a0a08f8f3b3b:#65657777d2d2:#95955a5ae7e7:#32328f8faeae:#9b9b8e8eafaf:#6e6e58588d8d:#cfcf59598a8a:#747487875a5a:#a0a08f8f3b3b:#65657777d2d2:#95955a5ae7e7:#32328f8faeae:#303020204646"

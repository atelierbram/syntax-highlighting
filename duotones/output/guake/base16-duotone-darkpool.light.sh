#!/usr/bin/env bash
# Base16 Duotone-DarkPool - Guake Terminal color scheme install script
# adapted from: Simurai (https://github.com/simurai/duotone-dark-syntax/)


gconftool-2 -s -t string /apps/guake/style/background/color "#f5f5f0f0fefe"
gconftool-2 -s -t string /apps/guake/style/font/color "#4f4f4b4b5858"
gconftool-2 -s -t string /apps/guake/style/font/palette "#f5f5f0f0fefe:#7f7f5b5bc8c8:#b2b28c8c7070:#c8c879794141:#d3d386865050:#a0a08989cdcd:#dddd94945f5f:#a5a57e7ef1f1:#686861617575:#7f7f5b5bc8c8:#b2b28c8c7070:#c8c879794141:#d3d386865050:#a0a08989cdcd:#dddd94945f5f:#1e1e1d1d2020"

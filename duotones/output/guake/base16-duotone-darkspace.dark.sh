#!/usr/bin/env bash
# Base16 Duotone-DarkSpace - Guake Terminal color scheme install script
# adapted from: Simurai (https://github.com/simurai/duotone-dark-space-syntax/)


gconftool-2 -s -t string /apps/guake/style/background/color "#242424242e2e"
gconftool-2 -s -t string /apps/guake/style/font/color "#88888888fbfb"
gconftool-2 -s -t string /apps/guake/style/font/palette "#242424242e2e:#6c6c6c6ccbcb:#949479796b6b:#e6e678784141:#eeee87875353:#99999999d1d1:#f4f496966666:#88888888fbfb:#767676769393:#6c6c6c6ccbcb:#949479796b6b:#e6e678784141:#eeee87875353:#99999999d1d1:#f4f496966666:#ebebebebffff"

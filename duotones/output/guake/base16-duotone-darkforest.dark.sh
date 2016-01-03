#!/usr/bin/env bash
# Base16 Duotone-DarkForest - Guake Terminal color scheme install script
# adapted from: Simurai (https://github.com/simurai/duotone-dark-forest-syntax/)


gconftool-2 -s -t string /apps/guake/style/background/color "#2a2a2d2d2a2a"
gconftool-2 -s -t string /apps/guake/style/font/color "#7878dddd7878"
gconftool-2 -s -t string /apps/guake/style/font/palette "#2a2a2d2d2a2a:#5454b6b65454:#919199996666:#afafc0c05959:#bebed1d16161:#7777c5c57777:#cccce0e06c6c:#7878dddd7878:#696986866969:#5454b6b65454:#919199996666:#afafc0c05959:#bebed1d16161:#7777c5c57777:#cccce0e06c6c:#f0f0fffff0f0"

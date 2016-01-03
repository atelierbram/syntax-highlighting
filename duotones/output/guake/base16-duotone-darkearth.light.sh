#!/usr/bin/env bash
# Base16 Duotone-DarkEarth - Guake Terminal color scheme install script
# adapted from: Simurai (https://github.com/simurai/duotone-dark-earth-syntax/)


gconftool-2 -s -t string /apps/guake/style/background/color "#fffff3f3ebeb"
gconftool-2 -s -t string /apps/guake/style/font/color "#69695f5f5959"
gconftool-2 -s -t string /apps/guake/style/font/palette "#fffff3f3ebeb:#c0c08e8e6d6d:#a8a897977171:#ccccadad6666:#d7d7b9b97575:#c8c8abab9898:#e0e0c5c58585:#fcfcb0b07d7d:#858578786f6f:#c0c08e8e6d6d:#a8a897977171:#ccccadad6666:#d7d7b9b97575:#c8c8abab9898:#e0e0c5c58585:#32322d2d2929"

#!/usr/bin/env bash
# Base16 Duotone-DarkSea - Guake Terminal color scheme install script
# adapted from: Simurai (https://github.com/simurai/duotone-dark-sea-syntax/)


gconftool-2 -s -t string /apps/guake/style/background/color "#ebebf4f4ffff"
gconftool-2 -s -t string /apps/guake/style/font/color "#55556e6e8b8b"
gconftool-2 -s -t string /apps/guake/style/font/palette "#ebebf4f4ffff:#5252a3a3ffff:#70708f8f8585:#3b3bcece9d9d:#5454d4d4a9a9:#8585bebeffff:#6868d9d9b4b4:#9191c1c1f8f8:#6e6e8888a6a6:#5252a3a3ffff:#70708f8f8585:#3b3bcece9d9d:#5454d4d4a9a9:#8585bebeffff:#6868d9d9b4b4:#1d1d26262f2f"

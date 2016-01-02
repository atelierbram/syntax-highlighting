#!/usr/bin/env bash
# Base16 Duotone-DarkSea - Guake Terminal color scheme install script
# adapted from: Simurai (https://github.com/simurai/duotone-dark-sea-syntax/)


gconftool-2 -s -t string /apps/guake/style/background/color "#1d1d26262f2f"
gconftool-2 -s -t string /apps/guake/style/font/color "#9191c1c1f8f8"
gconftool-2 -s -t string /apps/guake/style/font/palette "#1d1d26262f2f:#5252a3a3ffff:#70708f8f8585:#3b3bcece9d9d:#5454d4d4a9a9:#8585bebeffff:#6868d9d9b4b4:#9191c1c1f8f8:#6e6e8888a6a6:#5252a3a3ffff:#70708f8f8585:#3b3bcece9d9d:#5454d4d4a9a9:#8585bebeffff:#6868d9d9b4b4:#ebebf4f4ffff"

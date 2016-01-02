#!/usr/bin/env bash
# Base16 Duotone-DarkSea - Pantheon Terminal color scheme install script
# adapted from: Simurai (https://github.com/simurai/duotone-dark-sea-syntax/)
# Charles B Johnson (https://github.com/charlesbjohnson)

SCHEMA="org.pantheon.terminal.settings"

gsettings set "$SCHEMA" background "#ebf4ff"
gsettings set "$SCHEMA" foreground "#556e8b"
gsettings set "$SCHEMA" palette "#ebf4ff:#52a3ff:#708f85:#3bce9d:#54d4a9:#85beff:#68d9b4:#91c1f8:#6e88a6:#52a3ff:#708f85:#3bce9d:#54d4a9:#85beff:#68d9b4:#1d262f"
gsettings set "$SCHEMA" cursor-color "#1d262f"

unset SCHEMA

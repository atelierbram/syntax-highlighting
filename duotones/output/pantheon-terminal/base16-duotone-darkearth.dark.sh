#!/usr/bin/env bash
# Base16 Duotone-DarkEarth - Pantheon Terminal color scheme install script
# adapted from: Simurai (https://github.com/simurai/duotone-dark-earth-syntax/)
# Charles B Johnson (https://github.com/charlesbjohnson)

SCHEMA="org.pantheon.terminal.settings"

gsettings set "$SCHEMA" background "#322d29"
gsettings set "$SCHEMA" foreground "#fcb07d"
gsettings set "$SCHEMA" palette "#322d29:#c08e6d:#a89771:#ccad66:#d7b975:#c8ab98:#e0c585:#fcb07d:#85786f:#c08e6d:#a89771:#ccad66:#d7b975:#c8ab98:#e0c585:#fff3eb"
gsettings set "$SCHEMA" cursor-color "#4c4642"

unset SCHEMA

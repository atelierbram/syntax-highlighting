#!/usr/bin/env bash
# Base16 Duotone-Dark - Pantheon Terminal color scheme install script
# adapted from: Simurai (https://github.com/simurai/duotone-dark-syntax/)
# Charles B Johnson (https://github.com/charlesbjohnson)

SCHEMA="org.pantheon.terminal.settings"

gsettings set "$SCHEMA" background "#eeebff"
gsettings set "$SCHEMA" foreground "#5a566c"
gsettings set "$SCHEMA" palette "#eeebff:#7765d2:#968f88:#d48535:#de9145:#a49bcf:#e8a35e:#9b87fd:#726e87:#7765d2:#968f88:#d48535:#de9145:#a49bcf:#e8a35e:#2a2734"
gsettings set "$SCHEMA" cursor-color "#2a2734"

unset SCHEMA

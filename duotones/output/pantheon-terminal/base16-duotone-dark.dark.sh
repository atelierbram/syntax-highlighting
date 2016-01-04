#!/usr/bin/env bash
# Base16 Duotone-Dark - Pantheon Terminal color scheme install script
# adapted from: Simurai (https://github.com/simurai/duotone-dark-syntax/)
# Charles B Johnson (https://github.com/charlesbjohnson)

SCHEMA="org.pantheon.terminal.settings"

gsettings set "$SCHEMA" background "#2a2734"
gsettings set "$SCHEMA" foreground "#9b87fd"
gsettings set "$SCHEMA" palette "#2a2734:#7765d2:#7c756e:#d48535:#de9145:#a49bcf:#e8a35e:#9b87fd:#726e87:#7765d2:#7c756e:#d48535:#de9145:#a49bcf:#e8a35e:#eeebff"
gsettings set "$SCHEMA" cursor-color "#423f50"

unset SCHEMA

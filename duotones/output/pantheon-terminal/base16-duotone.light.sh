#!/usr/bin/env bash
# Base16 Duotone - Pantheon Terminal color scheme install script
# adapted from: Simurai (https://github.com/simurai/duotone-dark-syntax/)
# Charles B Johnson (https://github.com/charlesbjohnson)

SCHEMA="org.pantheon.terminal.settings"

gsettings set "$SCHEMA" background "#eeebff"
gsettings set "$SCHEMA" foreground "#5c5874"
gsettings set "$SCHEMA" palette "#eeebff:#7769bf:#7c756e:#ce853b:#d49454:#988dce:#daa36c:#a391fd:#746e91:#7769bf:#7c756e:#ce853b:#d49454:#988dce:#daa36c:#2a2734"
gsettings set "$SCHEMA" cursor-color "#2a2734"

unset SCHEMA

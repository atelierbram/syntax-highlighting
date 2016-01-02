#!/usr/bin/env bash
# Base16 Duotone-Dark - Pantheon Terminal color scheme install script
# adapted from: Simurai (https://github.com/simurai/duotone-dark-syntax/)
# Charles B Johnson (https://github.com/charlesbjohnson)

SCHEMA="org.pantheon.terminal.settings"

gsettings set "$SCHEMA" background "#2a2734"
gsettings set "$SCHEMA" foreground "#a391fd"
gsettings set "$SCHEMA" palette "#2a2734:#7769bf:#7c756e:#ce853b:#d49454:#988dce:#daa36c:#a391fd:#746e91:#7769bf:#7c756e:#ce853b:#d49454:#988dce:#daa36c:#eeebff"
gsettings set "$SCHEMA" cursor-color "#413d51"

unset SCHEMA

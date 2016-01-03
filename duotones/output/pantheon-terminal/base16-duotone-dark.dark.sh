#!/usr/bin/env bash
# Base16 Duotone-Dark - Pantheon Terminal color scheme install script
# adapted from: Simurai (https://github.com/simurai/duotone-dark-syntax/)
# Charles B Johnson (https://github.com/charlesbjohnson)

SCHEMA="org.pantheon.terminal.settings"

gsettings set "$SCHEMA" background "#2a2734"
gsettings set "$SCHEMA" foreground "#a391fd"
gsettings set "$SCHEMA" palette "#2a2734:#705ec9:#968f88:#d48535:#de9145:#988dce:#e8a35e:#a391fd:#77738c:#705ec9:#968f88:#d48535:#de9145:#988dce:#e8a35e:#eeebff"
gsettings set "$SCHEMA" cursor-color "#423f50"

unset SCHEMA

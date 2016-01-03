#!/usr/bin/env bash
# Base16 Duotone-Dark - Pantheon Terminal color scheme install script
# adapted from: Simurai (https://github.com/simurai/duotone-dark-syntax/)
# Charles B Johnson (https://github.com/charlesbjohnson)

SCHEMA="org.pantheon.terminal.settings"

gsettings set "$SCHEMA" background "#eeebff"
gsettings set "$SCHEMA" foreground "#5f5b71"
gsettings set "$SCHEMA" palette "#eeebff:#705ec9:#968f88:#d48535:#de9145:#988dce:#e8a35e:#a391fd:#77738c:#705ec9:#968f88:#d48535:#de9145:#988dce:#e8a35e:#2a2734"
gsettings set "$SCHEMA" cursor-color "#2a2734"

unset SCHEMA

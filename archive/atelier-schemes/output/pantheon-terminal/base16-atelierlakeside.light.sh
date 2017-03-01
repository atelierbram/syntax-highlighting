#!/usr/bin/env bash
# Base16 Atelier Lakeside - Pantheon Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/lakeside/)
# Charles B Johnson (https://github.com/charlesbjohnson)

SCHEMA="org.pantheon.terminal.settings"

gsettings set "$SCHEMA" background "#ebf8ff"
gsettings set "$SCHEMA" foreground "#516d7b"
gsettings set "$SCHEMA" palette "#ebf8ff:#d22d72:#568c3b:#8a8a0f:#257fad:#6b6bb8:#2d8f6f:#7ea2b4:#5a7b8c:#d22d72:#568c3b:#8a8a0f:#257fad:#6b6bb8:#2d8f6f:#161b1d"
gsettings set "$SCHEMA" cursor-color "#161b1d"

unset SCHEMA

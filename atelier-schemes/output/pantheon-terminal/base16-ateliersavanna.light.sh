#!/usr/bin/env bash
# Base16 Atelier Savanna - Pantheon Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/savanna)
# Charles B Johnson (https://github.com/charlesbjohnson)

SCHEMA="org.pantheon.terminal.settings"

gsettings set "$SCHEMA" background "#e8f7ed"
gsettings set "$SCHEMA" foreground "#4e6555"
gsettings set "$SCHEMA" palette "#e8f7ed:#b16139:#489963:#a07e3b:#478c90:#55859b:#1c9aa0:#809988:#5a7262:#b16139:#489963:#a07e3b:#478c90:#55859b:#1c9aa0:#1a231d"
gsettings set "$SCHEMA" cursor-color "#1a231d"

unset SCHEMA

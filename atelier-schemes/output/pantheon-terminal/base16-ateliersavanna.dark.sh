#!/usr/bin/env bash
# Base16 Atelier Savanna - Pantheon Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/savanna)
# Charles B Johnson (https://github.com/charlesbjohnson)

SCHEMA="org.pantheon.terminal.settings"

gsettings set "$SCHEMA" background "#1a231d"
gsettings set "$SCHEMA" foreground "#809988"
gsettings set "$SCHEMA" palette "#1a231d:#b16139:#489963:#a07e3b:#478c90:#55859b:#1c9aa0:#809988:#5a7262:#b16139:#489963:#a07e3b:#478c90:#55859b:#1c9aa0:#e8f7ed"
gsettings set "$SCHEMA" cursor-color "#242e27"

unset SCHEMA

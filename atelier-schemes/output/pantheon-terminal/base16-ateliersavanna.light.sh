#!/usr/bin/env bash
# Base16 Atelier Savanna - Pantheon Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/savanna)
# Charles B Johnson (https://github.com/charlesbjohnson)

SCHEMA="org.pantheon.terminal.settings"

gsettings set "$SCHEMA" background "#ddeee3"
gsettings set "$SCHEMA" foreground "#41624c"
gsettings set "$SCHEMA" palette "#ddeee3:#b16139:#489963:#a07e3b:#478c90:#55859b:#1c9aa0:#739c80:#4f725b:#b16139:#489963:#a07e3b:#478c90:#55859b:#1c9aa0:#15281c"
gsettings set "$SCHEMA" cursor-color "#15281c"

unset SCHEMA

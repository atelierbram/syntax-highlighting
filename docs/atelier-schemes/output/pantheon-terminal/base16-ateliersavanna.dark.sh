#!/usr/bin/env bash
# Base16 Atelier Savanna - Pantheon Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/savanna)
# Charles B Johnson (https://github.com/charlesbjohnson)

SCHEMA="org.pantheon.terminal.settings"

gsettings set "$SCHEMA" background "#171c19"
gsettings set "$SCHEMA" foreground "#87928a"
gsettings set "$SCHEMA" palette "#171c19:#b16139:#489963:#a07e3b:#478c90:#55859b:#1c9aa0:#87928a:#5f6d64:#b16139:#489963:#a07e3b:#478c90:#55859b:#1c9aa0:#ecf4ee"
gsettings set "$SCHEMA" cursor-color "#232a25"

unset SCHEMA

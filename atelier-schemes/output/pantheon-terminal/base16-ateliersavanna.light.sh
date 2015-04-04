#!/usr/bin/env bash
# Base16 Atelier Savanna - Pantheon Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/savanna)
# Charles B Johnson (https://github.com/charlesbjohnson)

SCHEMA="org.pantheon.terminal.settings"

gsettings set "$SCHEMA" background "#ecf4ee"
gsettings set "$SCHEMA" foreground "#526057"
gsettings set "$SCHEMA" palette "#ecf4ee:#b16139:#489963:#a07e3b:#478c90:#55859b:#1c9aa0:#87928a:#5f6d64:#b16139:#489963:#a07e3b:#478c90:#55859b:#1c9aa0:#171c19"
gsettings set "$SCHEMA" cursor-color "#171c19"

unset SCHEMA

#!/usr/bin/env bash
# Base16 Atelier Dune - Pantheon Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/dune)
# Charles B Johnson (https://github.com/charlesbjohnson)

SCHEMA="org.pantheon.terminal.settings"

gsettings set "$SCHEMA" background "#fefbec"
gsettings set "$SCHEMA" foreground "#6e6b5e"
gsettings set "$SCHEMA" palette "#fefbec:#d73737:#60ac39:#ae9513:#6684e1:#b854d4:#1fad83:#a6a28c:#7d7a68:#d73737:#60ac39:#ae9513:#6684e1:#b854d4:#1fad83:#20201d"
gsettings set "$SCHEMA" cursor-color "#20201d"

unset SCHEMA

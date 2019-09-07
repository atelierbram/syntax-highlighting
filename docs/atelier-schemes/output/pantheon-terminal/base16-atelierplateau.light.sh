#!/usr/bin/env bash
# Base16 Atelier Plateau - Pantheon Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/plateau)
# Charles B Johnson (https://github.com/charlesbjohnson)

SCHEMA="org.pantheon.terminal.settings"

gsettings set "$SCHEMA" background "#f4ecec"
gsettings set "$SCHEMA" foreground "#585050"
gsettings set "$SCHEMA" palette "#f4ecec:#ca4949:#4b8b8b:#a06e3b:#7272ca:#8464c4:#5485b6:#8a8585:#655d5d:#ca4949:#4b8b8b:#a06e3b:#7272ca:#8464c4:#5485b6:#1b1818"
gsettings set "$SCHEMA" cursor-color "#1b1818"

unset SCHEMA

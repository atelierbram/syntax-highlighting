#!/usr/bin/env bash
# Base16 Atelier Cave - Pantheon Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/cave)
# Charles B Johnson (https://github.com/charlesbjohnson)

SCHEMA="org.pantheon.terminal.settings"

gsettings set "$SCHEMA" background "#f4f0fa"
gsettings set "$SCHEMA" foreground "#624e7e"
gsettings set "$SCHEMA" palette "#f4f0fa:#cf598a:#74875a:#a08f3b:#6577d2:#955ae7:#328fae:#9b8eaf:#6e588d:#cf598a:#74875a:#a08f3b:#6577d2:#955ae7:#328fae:#302046"
gsettings set "$SCHEMA" cursor-color "#302046"

unset SCHEMA

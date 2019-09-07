#!/usr/bin/env bash
# Base16 Atelier Forest - Pantheon Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/forest)
# Charles B Johnson (https://github.com/charlesbjohnson)

SCHEMA="org.pantheon.terminal.settings"

gsettings set "$SCHEMA" background "#f1efee"
gsettings set "$SCHEMA" foreground "#68615e"
gsettings set "$SCHEMA" palette "#f1efee:#f22c40:#7b9726:#c38418:#407ee7:#6666ea:#3d97b8:#a8a19f:#766e6b:#f22c40:#7b9726:#c38418:#407ee7:#6666ea:#3d97b8:#1b1918"
gsettings set "$SCHEMA" cursor-color "#1b1918"

unset SCHEMA

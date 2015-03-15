#!/usr/bin/env bash
# Base16 Atelier Forest - Pantheon Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/forest)
# Charles B Johnson (https://github.com/charlesbjohnson)

SCHEMA="org.pantheon.terminal.settings"

gsettings set "$SCHEMA" background "#1b1918"
gsettings set "$SCHEMA" foreground "#a8a19f"
gsettings set "$SCHEMA" palette "#1b1918:#f22c40:#7b9726:#c38418:#407ee7:#6666ea:#3d97b8:#a8a19f:#766e6b:#f22c40:#7b9726:#c38418:#407ee7:#6666ea:#3d97b8:#f1efee"
gsettings set "$SCHEMA" cursor-color "#2c2421"

unset SCHEMA

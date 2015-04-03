#!/usr/bin/env bash
# Base16 Atelier Cave - Pantheon Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/cave)
# Charles B Johnson (https://github.com/charlesbjohnson)

SCHEMA="org.pantheon.terminal.settings"

gsettings set "$SCHEMA" background "#f4f0fa"
gsettings set "$SCHEMA" foreground "#5c526b"
gsettings set "$SCHEMA" palette "#f4f0fa:#cf598a:#74875a:#a08f3b:#6577d2:#955ae7:#328fae:#8f859d:#695e78:#cf598a:#74875a:#a08f3b:#6577d2:#955ae7:#328fae:#1e1a23"
gsettings set "$SCHEMA" cursor-color "#1e1a23"

unset SCHEMA

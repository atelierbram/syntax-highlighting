#!/usr/bin/env bash
# Base16 Duotone-DarkForest - Pantheon Terminal color scheme install script
# adapted from: Simurai (https://github.com/simurai/duotone-dark-forest-syntax/)
# Charles B Johnson (https://github.com/charlesbjohnson)

SCHEMA="org.pantheon.terminal.settings"

gsettings set "$SCHEMA" background "#2a2d2a"
gsettings set "$SCHEMA" foreground "#78dd78"
gsettings set "$SCHEMA" palette "#2a2d2a:#54b654:#919966:#afc059:#bed161:#77c577:#cce06c:#78dd78:#698669:#54b654:#919966:#afc059:#bed161:#77c577:#cce06c:#f0fff0"
gsettings set "$SCHEMA" cursor-color "#3f4a3f"

unset SCHEMA

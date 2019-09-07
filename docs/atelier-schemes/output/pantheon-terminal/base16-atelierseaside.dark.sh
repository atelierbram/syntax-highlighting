#!/usr/bin/env bash
# Base16 Atelier Seaside - Pantheon Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/seaside/)
# Charles B Johnson (https://github.com/charlesbjohnson)

SCHEMA="org.pantheon.terminal.settings"

gsettings set "$SCHEMA" background "#131513"
gsettings set "$SCHEMA" foreground "#8ca68c"
gsettings set "$SCHEMA" palette "#131513:#e6193c:#29a329:#98981b:#3d62f5:#ad2bee:#1999b3:#8ca68c:#687d68:#e6193c:#29a329:#98981b:#3d62f5:#ad2bee:#1999b3:#f4fbf4"
gsettings set "$SCHEMA" cursor-color "#242924"

unset SCHEMA

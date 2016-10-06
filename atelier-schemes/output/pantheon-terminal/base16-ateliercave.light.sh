#!/usr/bin/env bash
# Base16 Atelier Cave - Pantheon Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/cave)
# Charles B Johnson (https://github.com/charlesbjohnson)

SCHEMA="org.pantheon.terminal.settings"

gsettings set "$SCHEMA" background "#efecf4"
gsettings set "$SCHEMA" foreground "#585260"
gsettings set "$SCHEMA" palette "#efecf4:#be4678:#2a9292:#a06e3b:#576ddb:#955ae7:#398bc6:#8b8792:#655f6d:#be4678:#2a9292:#a06e3b:#576ddb:#955ae7:#398bc6:#19171c"
gsettings set "$SCHEMA" cursor-color "#19171c"

unset SCHEMA

#!/usr/bin/env bash
# Base16 Atelier Estuary - Pantheon Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/estuary)
# Charles B Johnson (https://github.com/charlesbjohnson)

SCHEMA="org.pantheon.terminal.settings"

gsettings set "$SCHEMA" background "#f9f7e7"
gsettings set "$SCHEMA" foreground "#666447"
gsettings set "$SCHEMA" palette "#f9f7e7:#ba6236:#7d9726:#a5980d:#36a166:#5f9182:#5b9d48:#9d9b7b:#747253:#ba6236:#7d9726:#a5980d:#36a166:#5f9182:#5b9d48:#282615"
gsettings set "$SCHEMA" cursor-color "#282615"

unset SCHEMA

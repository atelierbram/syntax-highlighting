#!/usr/bin/env bash
# Base16 Atelier Estuary - Pantheon Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/estuary)
# Charles B Johnson (https://github.com/charlesbjohnson)

SCHEMA="org.pantheon.terminal.settings"

gsettings set "$SCHEMA" background "#22221b"
gsettings set "$SCHEMA" foreground "#929181"
gsettings set "$SCHEMA" palette "#22221b:#ba6236:#7d9726:#a5980d:#36a166:#5f9182:#5b9d48:#929181:#6c6b5a:#ba6236:#7d9726:#a5980d:#36a166:#5f9182:#5b9d48:#f4f3ec"
gsettings set "$SCHEMA" cursor-color "#302f27"

unset SCHEMA

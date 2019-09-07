#!/usr/bin/env bash
# Base16 Atelier Heath - Pantheon Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/heath)
# Charles B Johnson (https://github.com/charlesbjohnson)

SCHEMA="org.pantheon.terminal.settings"

gsettings set "$SCHEMA" background "#f7f3f7"
gsettings set "$SCHEMA" foreground "#695d69"
gsettings set "$SCHEMA" palette "#f7f3f7:#ca402b:#918b3b:#bb8a35:#516aec:#7b59c0:#159393:#ab9bab:#776977:#ca402b:#918b3b:#bb8a35:#516aec:#7b59c0:#159393:#1b181b"
gsettings set "$SCHEMA" cursor-color "#1b181b"

unset SCHEMA

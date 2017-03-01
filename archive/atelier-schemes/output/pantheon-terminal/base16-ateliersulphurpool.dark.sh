#!/usr/bin/env bash
# Base16 Atelier Sulphurpool - Pantheon Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/sulphurpool)
# Charles B Johnson (https://github.com/charlesbjohnson)

SCHEMA="org.pantheon.terminal.settings"

gsettings set "$SCHEMA" background "#202746"
gsettings set "$SCHEMA" foreground "#979db4"
gsettings set "$SCHEMA" palette "#202746:#c94922:#ac9739:#c08b30:#3d8fd1:#6679cc:#22a2c9:#979db4:#6b7394:#c94922:#ac9739:#c08b30:#3d8fd1:#6679cc:#22a2c9:#f5f7ff"
gsettings set "$SCHEMA" cursor-color "#293256"

unset SCHEMA

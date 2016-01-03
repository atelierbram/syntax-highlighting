#!/usr/bin/env bash
# Base16 Duotone-DarkPool - Pantheon Terminal color scheme install script
# adapted from: Simurai (https://github.com/simurai/duotone-dark-syntax/)
# Charles B Johnson (https://github.com/charlesbjohnson)

SCHEMA="org.pantheon.terminal.settings"

gsettings set "$SCHEMA" background "#f5f0fe"
gsettings set "$SCHEMA" foreground "#4f4b58"
gsettings set "$SCHEMA" palette "#f5f0fe:#7f5bc8:#b28c70:#c87941:#d38650:#a089cd:#dd945f:#a57ef1:#686175:#7f5bc8:#b28c70:#c87941:#d38650:#a089cd:#dd945f:#1e1d20"
gsettings set "$SCHEMA" cursor-color "#1e1d20"

unset SCHEMA

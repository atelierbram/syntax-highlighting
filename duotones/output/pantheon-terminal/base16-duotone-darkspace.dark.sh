#!/usr/bin/env bash
# Base16 Duotone-DarkSpace - Pantheon Terminal color scheme install script
# adapted from: Simurai (https://github.com/simurai/duotone-dark-space-syntax/)
# Charles B Johnson (https://github.com/charlesbjohnson)

SCHEMA="org.pantheon.terminal.settings"

gsettings set "$SCHEMA" background "#24242e"
gsettings set "$SCHEMA" foreground "#8888fb"
gsettings set "$SCHEMA" palette "#24242e:#6c6ccb:#94796b:#e67841:#ee8753:#9999d1:#f49666:#8888fb:#767693:#6c6ccb:#94796b:#e67841:#ee8753:#9999d1:#f49666:#ebebff"
gsettings set "$SCHEMA" cursor-color "#3a3a4a"

unset SCHEMA

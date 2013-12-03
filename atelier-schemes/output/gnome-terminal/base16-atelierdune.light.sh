#!/usr/bin/env bash
# Base16 Atelier Dune - Gnome Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/dune)

[[ -z "$PROFILE_NAME" ]] && PROFILE_NAME="Base 16 Atelier Dune Light"
[[ -z "$PROFILE_SLUG" ]] && PROFILE_SLUG="base-16-atelierdune-light"
[[ -z "$GCONFTOOL" ]] && GCONFTOOL=gconftool
[[ -z "$BASE_KEY" ]] && BASE_KEY=/apps/gnome-terminal/profiles

PROFILE_KEY="$BASE_KEY/$PROFILE_SLUG"

gset() {
  local type="$1"; shift
  local key="$1"; shift
  local val="$1"; shift

  "$GCONFTOOL" --set --type "$type" "$PROFILE_KEY/$key" -- "$val"
}

# Because gconftool doesn't have "append"
glist_append() {
  local type="$1"; shift
  local key="$1"; shift
  local val="$1"; shift

  local entries="$(
    {
      "$GCONFTOOL" --get "$key" | tr -d '[]' | tr , "\n" | fgrep -v "$val"
      echo "$val"
    } | head -c-1 | tr "\n" ,
  )"

  "$GCONFTOOL" --set --type list --list-type $type "$key" "[$entries]"
}

# Append the Base16 profile to the profile list
glist_append string /apps/gnome-terminal/global/profile_list "$PROFILE_SLUG"

gset string visible_name "$PROFILE_NAME"
gset string palette "#fefbec:#d73737:#60ac39:#cfb017:#6684e1:#b854d4:#1fad83:#a6a28c:#7d7a68:#d73737:#60ac39:#cfb017:#6684e1:#b854d4:#1fad83:#20201d"
gset string background_color "#fefbec"
gset string foreground_color "#6e6b5e"
gset string bold_color "#6e6b5e"
gset bool   bold_color_same_as_fg "true"
gset bool   use_theme_colors "false"
gset bool   use_theme_background "false"

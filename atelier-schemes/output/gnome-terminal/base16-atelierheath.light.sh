#!/usr/bin/env bash
# Base16 Atelier Heath - Gnome Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/heath)

[[ -z "$PROFILE_NAME" ]] && PROFILE_NAME="Base 16 Atelier Heath Light"
[[ -z "$PROFILE_SLUG" ]] && PROFILE_SLUG="base-16-atelierheath-light"
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
gset string palette "#f7f3f7:#ca402b:#379a37:#bb8a35:#516aec:#7b59c0:#159393:#ab9bab:#776977:#ca402b:#379a37:#bb8a35:#516aec:#7b59c0:#159393:#1b181b"
gset string background_color "#f7f3f7"
gset string foreground_color "#695d69"
gset string bold_color "#695d69"
gset bool   bold_color_same_as_fg "true"
gset bool   use_theme_colors "false"
gset bool   use_theme_background "false"

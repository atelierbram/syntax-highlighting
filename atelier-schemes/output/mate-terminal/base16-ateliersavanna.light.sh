#!/usr/bin/env bash
# Base16 Atelier Savanna - Mate Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/savanna)

[[ -z "$PROFILE_NAME" ]] && PROFILE_NAME="Base 16 Atelier Savanna Light"
[[ -z "$PROFILE_SLUG" ]] && PROFILE_SLUG="base-16-ateliersavanna-light"
[[ -z "$DCONFTOOL" ]] && DCONFTOOL=dconf
[[ -z "$BASE_KEY" ]] && BASE_KEY=/org/mate/terminal/profiles

PROFILE_KEY="$BASE_KEY/$PROFILE_SLUG"

dset() {
  local key="$1"; shift
  local val="$1"; shift

  "$DCONFTOOL" write "$PROFILE_KEY/$key" "$val"
}

# Because gconftool doesn't have "append"
glist_append() {
  local key="$1"; shift
  local val="$1"; shift

  local entries="$(
    {
      "$DCONFTOOL" read "$key" | tr -d '[]' | tr , "\n" | fgrep -v "$val"
      echo "'$val'"
    } | head -c-1 | tr "\n" ,
  )"

  "$DCONFTOOL" write "$key" "[$entries]"
}

# Append the Base16 profile to the profile list
glist_append /org/mate/terminal/global/profile-list "$PROFILE_SLUG"

dset visible-name "'$PROFILE_NAME'"
dset palette "'#ecf4ee:#b16139:#489963:#a07e3b:#478c90:#55859b:#1c9aa0:#87928a:#5f6d64:#b16139:#489963:#a07e3b:#478c90:#55859b:#1c9aa0:#171c19'"
dset background-color "'#ecf4ee'"
dset foreground-color "'#526057'"
dset bold-color "'#526057'"
dset bold-color-same-as-fg "true"
dset use-theme-colors "false"
dset use-theme-background "false"

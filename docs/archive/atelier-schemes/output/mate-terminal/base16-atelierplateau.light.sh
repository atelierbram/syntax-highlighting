#!/usr/bin/env bash
# Base16 Atelier Plateau - Mate Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/plateau)

[[ -z "$PROFILE_NAME" ]] && PROFILE_NAME="Base 16 Atelier Plateau Light"
[[ -z "$PROFILE_SLUG" ]] && PROFILE_SLUG="base-16-atelierplateau-light"
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
dset palette "'#f4ecec:#ca4949:#4b8b8b:#a06e3b:#7272ca:#8464c4:#5485b6:#8a8585:#655d5d:#ca4949:#4b8b8b:#a06e3b:#7272ca:#8464c4:#5485b6:#1b1818'"
dset background-color "'#f4ecec'"
dset foreground-color "'#585050'"
dset bold-color "'#585050'"
dset bold-color-same-as-fg "true"
dset use-theme-colors "false"
dset use-theme-background "false"

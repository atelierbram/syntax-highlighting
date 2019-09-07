#!/usr/bin/env bash
# Base16 Atelier Lakeside - Mate Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/lakeside/)

[[ -z "$PROFILE_NAME" ]] && PROFILE_NAME="Base 16 Atelier Lakeside Dark"
[[ -z "$PROFILE_SLUG" ]] && PROFILE_SLUG="base-16-atelierlakeside-dark"
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
dset palette "'#161b1d:#d22d72:#568c3b:#8a8a0f:#257fad:#6b6bb8:#2d8f6f:#7ea2b4:#5a7b8c:#d22d72:#568c3b:#8a8a0f:#257fad:#6b6bb8:#2d8f6f:#ebf8ff'"
dset background-color "'#161b1d'"
dset foreground-color "'#7ea2b4'"
dset bold-color "'#7ea2b4'"
dset bold-color-same-as-fg "true"
dset use-theme-colors "false"
dset use-theme-background "false"

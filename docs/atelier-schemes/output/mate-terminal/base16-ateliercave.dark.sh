#!/usr/bin/env bash
# Base16 Atelier Cave - Mate Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/cave)

[[ -z "$PROFILE_NAME" ]] && PROFILE_NAME="Base 16 Atelier Cave Dark"
[[ -z "$PROFILE_SLUG" ]] && PROFILE_SLUG="base-16-ateliercave-dark"
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
dset palette "'#19171c:#be4678:#2a9292:#a06e3b:#576ddb:#955ae7:#398bc6:#8b8792:#655f6d:#be4678:#2a9292:#a06e3b:#576ddb:#955ae7:#398bc6:#efecf4'"
dset background-color "'#19171c'"
dset foreground-color "'#8b8792'"
dset bold-color "'#8b8792'"
dset bold-color-same-as-fg "true"
dset use-theme-colors "false"
dset use-theme-background "false"

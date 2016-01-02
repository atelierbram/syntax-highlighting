#!/usr/bin/env bash
# Base16 Duotone-DarkSea - Mate Terminal color scheme install script
# adapted from: Simurai (https://github.com/simurai/duotone-dark-sea-syntax/)

[[ -z "$PROFILE_NAME" ]] && PROFILE_NAME="Base 16 Duotone-DarkSea Light"
[[ -z "$PROFILE_SLUG" ]] && PROFILE_SLUG="base-16-duotone-darksea-light"
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
dset palette "'#ebf4ff:#52a3ff:#708f85:#3bce9d:#54d4a9:#85beff:#68d9b4:#91c1f8:#6e88a6:#52a3ff:#708f85:#3bce9d:#54d4a9:#85beff:#68d9b4:#1d262f'"
dset background-color "'#ebf4ff'"
dset foreground-color "'#556e8b'"
dset bold-color "'#556e8b'"
dset bold-color-same-as-fg "true"
dset use-theme-colors "false"
dset use-theme-background "false"

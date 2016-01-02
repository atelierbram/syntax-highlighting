#!/usr/bin/env bash
# Base16 Duotone - Mate Terminal color scheme install script
# adapted from: Simurai (https://github.com/simurai/duotone-dark-syntax/)

[[ -z "$PROFILE_NAME" ]] && PROFILE_NAME="Base 16 Duotone Light"
[[ -z "$PROFILE_SLUG" ]] && PROFILE_SLUG="base-16-duotone-light"
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
dset palette "'#eeebff:#7769bf:#7c756e:#ce853b:#d49454:#988dce:#daa36c:#a391fd:#746e91:#7769bf:#7c756e:#ce853b:#d49454:#988dce:#daa36c:#2a2734'"
dset background-color "'#eeebff'"
dset foreground-color "'#5c5874'"
dset bold-color "'#5c5874'"
dset bold-color-same-as-fg "true"
dset use-theme-colors "false"
dset use-theme-background "false"

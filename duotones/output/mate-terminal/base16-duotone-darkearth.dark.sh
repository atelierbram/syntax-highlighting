#!/usr/bin/env bash
# Base16 Duotone-DarkEarth - Mate Terminal color scheme install script
# adapted from: Simurai (https://github.com/simurai/duotone-dark-earth-syntax/)

[[ -z "$PROFILE_NAME" ]] && PROFILE_NAME="Base 16 Duotone-DarkEarth Dark"
[[ -z "$PROFILE_SLUG" ]] && PROFILE_SLUG="base-16-duotone-darkearth-dark"
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
dset palette "'#322d29:#c08e6d:#a89771:#ccad66:#d7b975:#c8ab98:#e0c585:#fcb07d:#85786f:#c08e6d:#a89771:#ccad66:#d7b975:#c8ab98:#e0c585:#fff3eb'"
dset background-color "'#322d29'"
dset foreground-color "'#fcb07d'"
dset bold-color "'#fcb07d'"
dset bold-color-same-as-fg "true"
dset use-theme-colors "false"
dset use-theme-background "false"

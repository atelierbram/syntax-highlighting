#!/usr/bin/env bash
# Base16 Duotone-DarkPool - Mate Terminal color scheme install script
# adapted from: Simurai (https://github.com/simurai/duotone-dark-syntax/)

[[ -z "$PROFILE_NAME" ]] && PROFILE_NAME="Base 16 Duotone-DarkPool Dark"
[[ -z "$PROFILE_SLUG" ]] && PROFILE_SLUG="base-16-duotone-darkpool-dark"
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
dset palette "'#1e1d20:#7f5bc8:#b28c70:#c87941:#d38650:#a089cd:#dd945f:#a57ef1:#686175:#7f5bc8:#b28c70:#c87941:#d38650:#a089cd:#dd945f:#f5f0fe'"
dset background-color "'#1e1d20'"
dset foreground-color "'#a57ef1'"
dset bold-color "'#a57ef1'"
dset bold-color-same-as-fg "true"
dset use-theme-colors "false"
dset use-theme-background "false"

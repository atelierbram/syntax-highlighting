#!/usr/bin/env bash
# Base16 Duotone-DarkSpace - Mate Terminal color scheme install script
# adapted from: Simurai (https://github.com/simurai/duotone-dark-space-syntax/)

[[ -z "$PROFILE_NAME" ]] && PROFILE_NAME="Base 16 Duotone-DarkSpace Dark"
[[ -z "$PROFILE_SLUG" ]] && PROFILE_SLUG="base-16-duotone-darkspace-dark"
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
dset palette "'#24242e:#6c6ccb:#94796b:#e67841:#ee8753:#9999d1:#f49666:#8888fb:#767693:#6c6ccb:#94796b:#e67841:#ee8753:#9999d1:#f49666:#ebebff'"
dset background-color "'#24242e'"
dset foreground-color "'#8888fb'"
dset bold-color "'#8888fb'"
dset bold-color-same-as-fg "true"
dset use-theme-colors "false"
dset use-theme-background "false"

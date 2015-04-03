#!/usr/bin/env bash
# Base16 Atelier Cave - Mate Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/cave)

[[ -z "$PROFILE_NAME" ]] && PROFILE_NAME="Base 16 Atelier Cave Light"
[[ -z "$PROFILE_SLUG" ]] && PROFILE_SLUG="base-16-ateliercave-light"
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
dset palette "'#f4f0fa:#cf598a:#74875a:#a08f3b:#6577d2:#955ae7:#328fae:#8f859d:#695e78:#cf598a:#74875a:#a08f3b:#6577d2:#955ae7:#328fae:#1e1a23'"
dset background-color "'#f4f0fa'"
dset foreground-color "'#5c526b'"
dset bold-color "'#5c526b'"
dset bold-color-same-as-fg "true"
dset use-theme-colors "false"
dset use-theme-background "false"

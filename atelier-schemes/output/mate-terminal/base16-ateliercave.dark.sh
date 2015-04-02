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
dset palette "'#302046:#cf598a:#74875a:#a08f3b:#6577d2:#955ae7:#328fae:#9b8eaf:#6e588d:#cf598a:#74875a:#a08f3b:#6577d2:#955ae7:#328fae:#f4f0fa'"
dset background-color "'#302046'"
dset foreground-color "'#9b8eaf'"
dset bold-color "'#9b8eaf'"
dset bold-color-same-as-fg "true"
dset use-theme-colors "false"
dset use-theme-background "false"

#!/usr/bin/env bash
# Base16 Atelier Heath - Mate Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/heath)

[[ -z "$PROFILE_NAME" ]] && PROFILE_NAME="Base 16 Atelier Heath Light"
[[ -z "$PROFILE_SLUG" ]] && PROFILE_SLUG="base-16-atelierheath-light"
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
dset palette "'#f7f3f7:#ca402b:#918b3b:#bb8a35:#516aec:#7b59c0:#159393:#ab9bab:#776977:#ca402b:#918b3b:#bb8a35:#516aec:#7b59c0:#159393:#1b181b'"
dset background-color "'#f7f3f7'"
dset foreground-color "'#695d69'"
dset bold-color "'#695d69'"
dset bold-color-same-as-fg "true"
dset use-theme-colors "false"
dset use-theme-background "false"

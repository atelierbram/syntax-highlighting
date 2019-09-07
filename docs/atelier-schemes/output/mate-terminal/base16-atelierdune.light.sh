#!/usr/bin/env bash
# Base16 Atelier Dune - Mate Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/dune)

[[ -z "$PROFILE_NAME" ]] && PROFILE_NAME="Base 16 Atelier Dune Light"
[[ -z "$PROFILE_SLUG" ]] && PROFILE_SLUG="base-16-atelierdune-light"
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
dset palette "'#fefbec:#d73737:#60ac39:#ae9513:#6684e1:#b854d4:#1fad83:#a6a28c:#7d7a68:#d73737:#60ac39:#ae9513:#6684e1:#b854d4:#1fad83:#20201d'"
dset background-color "'#fefbec'"
dset foreground-color "'#6e6b5e'"
dset bold-color "'#6e6b5e'"
dset bold-color-same-as-fg "true"
dset use-theme-colors "false"
dset use-theme-background "false"

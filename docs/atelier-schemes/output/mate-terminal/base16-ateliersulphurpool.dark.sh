#!/usr/bin/env bash
# Base16 Atelier Sulphurpool - Mate Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/sulphurpool)

[[ -z "$PROFILE_NAME" ]] && PROFILE_NAME="Base 16 Atelier Sulphurpool Dark"
[[ -z "$PROFILE_SLUG" ]] && PROFILE_SLUG="base-16-ateliersulphurpool-dark"
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
dset palette "'#202746:#c94922:#ac9739:#c08b30:#3d8fd1:#6679cc:#22a2c9:#979db4:#6b7394:#c94922:#ac9739:#c08b30:#3d8fd1:#6679cc:#22a2c9:#f5f7ff'"
dset background-color "'#202746'"
dset foreground-color "'#979db4'"
dset bold-color "'#979db4'"
dset bold-color-same-as-fg "true"
dset use-theme-colors "false"
dset use-theme-background "false"

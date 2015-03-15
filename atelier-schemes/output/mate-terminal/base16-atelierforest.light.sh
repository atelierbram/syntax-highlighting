#!/usr/bin/env bash
# Base16 Atelier Forest - Mate Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/forest)

[[ -z "$PROFILE_NAME" ]] && PROFILE_NAME="Base 16 Atelier Forest Light"
[[ -z "$PROFILE_SLUG" ]] && PROFILE_SLUG="base-16-atelierforest-light"
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
dset palette "'#f1efee:#f22c40:#7b9726:#c38418:#407ee7:#6666ea:#3d97b8:#a8a19f:#766e6b:#f22c40:#7b9726:#c38418:#407ee7:#6666ea:#3d97b8:#1b1918'"
dset background-color "'#f1efee'"
dset foreground-color "'#68615e'"
dset bold-color "'#68615e'"
dset bold-color-same-as-fg "true"
dset use-theme-colors "false"
dset use-theme-background "false"

#!/usr/bin/env bash
# Base16 Atelier Seaside - Mate Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/seaside/)

[[ -z "$PROFILE_NAME" ]] && PROFILE_NAME="Base 16 Atelier Seaside Dark"
[[ -z "$PROFILE_SLUG" ]] && PROFILE_SLUG="base-16-atelierseaside-dark"
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
dset palette "'#131513:#e6193c:#29a329:#98981b:#3d62f5:#ad2bee:#1999b3:#8ca68c:#687d68:#e6193c:#29a329:#98981b:#3d62f5:#ad2bee:#1999b3:#f4fbf4'"
dset background-color "'#131513'"
dset foreground-color "'#8ca68c'"
dset bold-color "'#8ca68c'"
dset bold-color-same-as-fg "true"
dset use-theme-colors "false"
dset use-theme-background "false"

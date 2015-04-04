#!/usr/bin/env bash
# Base16 Atelier Estuary - Mate Terminal color scheme install script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/estuary)

[[ -z "$PROFILE_NAME" ]] && PROFILE_NAME="Base 16 Atelier Estuary Dark"
[[ -z "$PROFILE_SLUG" ]] && PROFILE_SLUG="base-16-atelierestuary-dark"
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
dset palette "'#22221b:#ba6236:#7d9726:#a5980d:#36a166:#5f9182:#5b9d48:#929181:#6c6b5a:#ba6236:#7d9726:#a5980d:#36a166:#5f9182:#5b9d48:#f4f3ec'"
dset background-color "'#22221b'"
dset foreground-color "'#929181'"
dset bold-color "'#929181'"
dset bold-color-same-as-fg "true"
dset use-theme-colors "false"
dset use-theme-background "false"

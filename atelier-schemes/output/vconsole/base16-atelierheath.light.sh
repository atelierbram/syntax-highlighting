#!/bin/sh
# Base16 Atelier Heath - Virtual console color setup script
# Bram de Haan (http://atelierbram.github.io/syntax-highlighting/atelier-schemes/heath)

color00="f7f3f7" # Base 07 - White
color01="ca402b" # Base 08 - Red
color02="918b3b" # Base 0B - Green
color03="bb8a35" # Base 0A - Yellow
color04="516aec" # Base 0D - Blue
color05="7b59c0" # Base 0E - Magenta
color06="159393" # Base 0C - Cyan
color07="695d69" # Base 02 - Black
color08="ab9bab" # Base 05 - Bright White
color09=$color01 # Base 08 - Bright Red
color10=$color02 # Base 0B - Bright Green
color11=$color03 # Base 0A - Bright Yellow
color12=$color04 # Base 0D - Bright Blue
color13=$color05 # Base 0E - Bright Magenta
color14=$color06 # Base 0C - Bright Cyan
color15="1b181b" # Base 00 - Bright Black

# 16 color space
echo -e "\e]P0$color00"
echo -e "\e]P1$color01"
echo -e "\e]P2$color02"
echo -e "\e]P3$color03"
echo -e "\e]P4$color04"
echo -e "\e]P5$color05"
echo -e "\e]P6$color06"
echo -e "\e]P7$color07"
echo -e "\e]P8$color08"
echo -e "\e]P9$color09"
echo -e "\e]PA$color10"
echo -e "\e]PB$color11"
echo -e "\e]PC$color12"
echo -e "\e]PD$color13"
echo -e "\e]PE$color14"
echo -e "\e]PF$color15"
echo -e "\e[H"
echo -e "\e[2J"

# clean up
unset color00
unset color01
unset color02
unset color03
unset color04
unset color05
unset color06
unset color07
unset color08
unset color09
unset color10
unset color11
unset color12
unset color13
unset color14
unset color15

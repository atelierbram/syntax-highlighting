

// Base16 Duotone-DarkEarth light - simple terminal color setup
// adapted from: Simurai (https://github.com/simurai/duotone-dark-earth-syntax/)
static const char *colorname[] = {
	/* Normal colors */
	"#322d29", /*  0: Base 00 - Black   */
	"#c08e6d", /*  1: Base 08 - Red     */
	"#a89771", /*  2: Base 0B - Green   */
	"#ccad66", /*  3: Base 0A - Yellow  */
	"#d7b975", /*  4: Base 0D - Blue    */
	"#c8ab98", /*  5: Base 0E - Magenta */
	"#e0c585", /*  6: Base 0C - Cyan    */
	"#fcb07d", /*  7: Base 05 - White   */

	/* Bright colors */
	"#85786f", /*  8: Base 03 - Bright Black */
	"#c08e6d", /*  9: Base 08 - Red          */
	"#a89771", /* 10: Base 0B - Green        */
	"#ccad66", /* 11: Base 0A - Yellow       */
	"#d7b975", /* 12: Base 0D - Blue         */
	"#c8ab98", /* 13: Base 0E - Magenta      */
	"#e0c585", /* 14: Base 0C - Cyan         */
	"#fff3eb", /* 15: Base 05 - Bright White */

	/* A few more colors */

	"#bfa05a", /* 16: Base 09 */
	"#c39d83", /* 17: Base 0F */
	"#4c4642", /* 18: Base 01 */
	"#695f59", /* 19: Base 02 */
	"#ac9b91", /* 20: Base 04 */
	"#fed4b8", /* 21: Base 06 */

	[255] = 0,

	[256] = "#695f59", /* default fg: Base 02 */
	[257] = "#fff3eb", /* default bg: Base 07 */	
};

// Foreground, background and cursor
static unsigned int defaultfg = 256;
static unsigned int defaultbg = 257;
static unsigned int defaultcs = 256;



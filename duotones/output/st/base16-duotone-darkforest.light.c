

// Base16 Duotone-DarkForest light - simple terminal color setup
// adapted from: Simurai (https://github.com/simurai/duotone-dark-forest-syntax/)
static const char *colorname[] = {
	/* Normal colors */
	"#2a2d2a", /*  0: Base 00 - Black   */
	"#54b654", /*  1: Base 08 - Red     */
	"#919966", /*  2: Base 0B - Green   */
	"#afc059", /*  3: Base 0A - Yellow  */
	"#bed161", /*  4: Base 0D - Blue    */
	"#77c577", /*  5: Base 0E - Magenta */
	"#cce06c", /*  6: Base 0C - Cyan    */
	"#78dd78", /*  7: Base 05 - White   */

	/* Bright colors */
	"#698669", /*  8: Base 03 - Bright Black */
	"#54b654", /*  9: Base 08 - Red          */
	"#919966", /* 10: Base 0B - Green        */
	"#afc059", /* 11: Base 0A - Yellow       */
	"#bed161", /* 12: Base 0D - Blue         */
	"#77c577", /* 13: Base 0E - Magenta      */
	"#cce06c", /* 14: Base 0C - Cyan         */
	"#f0fff0", /* 15: Base 05 - Bright White */

	/* A few more colors */

	"#a1b34d", /* 16: Base 09 */
	"#65bd65", /* 17: Base 0F */
	"#3f4a3f", /* 18: Base 01 */
	"#556855", /* 19: Base 02 */
	"#80a380", /* 20: Base 04 */
	"#8bfe8b", /* 21: Base 06 */

	[255] = 0,

	[256] = "#556855", /* default fg: Base 02 */
	[257] = "#f0fff0", /* default bg: Base 07 */	
};

// Foreground, background and cursor
static unsigned int defaultfg = 256;
static unsigned int defaultbg = 257;
static unsigned int defaultcs = 256;





// Base16 Duotone-DarkSea dark - simple terminal color setup
// adapted from: Simurai (https://github.com/simurai/duotone-dark-sea-syntax/)
static const char *colorname[] = {
	/* Normal colors */
	"#1d262f", /*  0: Base 00 - Black   */
	"#52a3ff", /*  1: Base 08 - Red     */
	"#708f85", /*  2: Base 0B - Green   */
	"#3bce9d", /*  3: Base 0A - Yellow  */
	"#54d4a9", /*  4: Base 0D - Blue    */
	"#85beff", /*  5: Base 0E - Magenta */
	"#68d9b4", /*  6: Base 0C - Cyan    */
	"#91c1f8", /*  7: Base 05 - White   */

	/* Bright colors */
	"#6e88a6", /*  8: Base 03 - Bright Black */
	"#52a3ff", /*  9: Base 08 - Red          */
	"#708f85", /* 10: Base 0B - Green        */
	"#3bce9d", /* 11: Base 0A - Yellow       */
	"#54d4a9", /* 12: Base 0D - Blue         */
	"#85beff", /* 13: Base 0E - Magenta      */
	"#68d9b4", /* 14: Base 0C - Cyan         */
	"#ebf4ff", /* 15: Base 05 - Bright White */

	/* A few more colors */

	"#30c090", /* 16: Base 09 */
	"#6bb0ff", /* 17: Base 0F */
	"#303f4f", /* 18: Base 01 */
	"#556e8b", /* 19: Base 02 */
	"#75a0d1", /* 20: Base 04 */
	"#b8d9fe", /* 21: Base 06 */

	[255] = 0,

	[256] = "#91c1f8", /* default fg: Base 05 */
	[257] = "#1d262f", /* default bg: Base 00 */	
};

// Foreground, background and cursor
static unsigned int defaultfg = 256;
static unsigned int defaultbg = 257;
static unsigned int defaultcs = 256;


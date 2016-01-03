

// Base16 Duotone-Dark light - simple terminal color setup
// adapted from: Simurai (https://github.com/simurai/duotone-dark-syntax/)
static const char *colorname[] = {
	/* Normal colors */
	"#2a2734", /*  0: Base 00 - Black   */
	"#705ec9", /*  1: Base 08 - Red     */
	"#968f88", /*  2: Base 0B - Green   */
	"#d48535", /*  3: Base 0A - Yellow  */
	"#de9145", /*  4: Base 0D - Blue    */
	"#988dce", /*  5: Base 0E - Magenta */
	"#e8a35e", /*  6: Base 0C - Cyan    */
	"#a391fd", /*  7: Base 05 - White   */

	/* Bright colors */
	"#77738c", /*  8: Base 03 - Bright Black */
	"#705ec9", /*  9: Base 08 - Red          */
	"#968f88", /* 10: Base 0B - Green        */
	"#d48535", /* 11: Base 0A - Yellow       */
	"#de9145", /* 12: Base 0D - Blue         */
	"#988dce", /* 13: Base 0E - Magenta      */
	"#e8a35e", /* 14: Base 0C - Cyan         */
	"#eeebff", /* 15: Base 05 - Bright White */

	/* A few more colors */

	"#c07830", /* 16: Base 09 */
	"#8476cb", /* 17: Base 0F */
	"#423f50", /* 18: Base 01 */
	"#5f5b71", /* 19: Base 02 */
	"#8982b0", /* 20: Base 04 */
	"#c4b8fe", /* 21: Base 06 */

	[255] = 0,

	[256] = "#5f5b71", /* default fg: Base 02 */
	[257] = "#eeebff", /* default bg: Base 07 */	
};

// Foreground, background and cursor
static unsigned int defaultfg = 256;
static unsigned int defaultbg = 257;
static unsigned int defaultcs = 256;



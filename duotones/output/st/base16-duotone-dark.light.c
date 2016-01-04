

// Base16 Duotone-Dark light - simple terminal color setup
// adapted from: Simurai (https://github.com/simurai/duotone-dark-syntax/)
static const char *colorname[] = {
	/* Normal colors */
	"#2a2734", /*  0: Base 00 - Black   */
	"#7765d2", /*  1: Base 08 - Red     */
	"#968f88", /*  2: Base 0B - Green   */
	"#d48535", /*  3: Base 0A - Yellow  */
	"#de9145", /*  4: Base 0D - Blue    */
	"#a49bcf", /*  5: Base 0E - Magenta */
	"#e8a35e", /*  6: Base 0C - Cyan    */
	"#9b87fd", /*  7: Base 05 - White   */

	/* Bright colors */
	"#726e87", /*  8: Base 03 - Bright Black */
	"#7765d2", /*  9: Base 08 - Red          */
	"#968f88", /* 10: Base 0B - Green        */
	"#d48535", /* 11: Base 0A - Yellow       */
	"#de9145", /* 12: Base 0D - Blue         */
	"#a49bcf", /* 13: Base 0E - Magenta      */
	"#e8a35e", /* 14: Base 0C - Cyan         */
	"#eeebff", /* 15: Base 05 - Bright White */

	/* A few more colors */

	"#c07830", /* 16: Base 09 */
	"#8e81cf", /* 17: Base 0F */
	"#423f50", /* 18: Base 01 */
	"#5a566c", /* 19: Base 02 */
	"#837bad", /* 20: Base 04 */
	"#c4b8fe", /* 21: Base 06 */

	[255] = 0,

	[256] = "#5a566c", /* default fg: Base 02 */
	[257] = "#eeebff", /* default bg: Base 07 */	
};

// Foreground, background and cursor
static unsigned int defaultfg = 256;
static unsigned int defaultbg = 257;
static unsigned int defaultcs = 256;



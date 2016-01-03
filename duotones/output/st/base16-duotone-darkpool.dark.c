

// Base16 Duotone-DarkPool dark - simple terminal color setup
// adapted from: Simurai (https://github.com/simurai/duotone-dark-syntax/)
static const char *colorname[] = {
	/* Normal colors */
	"#1e1d20", /*  0: Base 00 - Black   */
	"#7f5bc8", /*  1: Base 08 - Red     */
	"#b28c70", /*  2: Base 0B - Green   */
	"#c87941", /*  3: Base 0A - Yellow  */
	"#d38650", /*  4: Base 0D - Blue    */
	"#a089cd", /*  5: Base 0E - Magenta */
	"#dd945f", /*  6: Base 0C - Cyan    */
	"#a57ef1", /*  7: Base 05 - White   */

	/* Bright colors */
	"#686175", /*  8: Base 03 - Bright Black */
	"#7f5bc8", /*  9: Base 08 - Red          */
	"#b28c70", /* 10: Base 0B - Green        */
	"#c87941", /* 11: Base 0A - Yellow       */
	"#d38650", /* 12: Base 0D - Blue         */
	"#a089cd", /* 13: Base 0E - Magenta      */
	"#dd945f", /* 14: Base 0C - Cyan         */
	"#f5f0fe", /* 15: Base 05 - Bright White */

	/* A few more colors */

	"#b46e3c", /* 16: Base 09 */
	"#9072ca", /* 17: Base 0F */
	"#37343c", /* 18: Base 01 */
	"#4f4b58", /* 19: Base 02 */
	"#807792", /* 20: Base 04 */
	"#d4c2fa", /* 21: Base 06 */

	[255] = 0,

	[256] = "#a57ef1", /* default fg: Base 05 */
	[257] = "#1e1d20", /* default bg: Base 00 */	
};

// Foreground, background and cursor
static unsigned int defaultfg = 256;
static unsigned int defaultbg = 257;
static unsigned int defaultcs = 256;


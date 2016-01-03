

// Base16 Duotone-DarkSpace light - simple terminal color setup
// adapted from: Simurai (https://github.com/simurai/duotone-dark-space-syntax/)
static const char *colorname[] = {
	/* Normal colors */
	"#24242e", /*  0: Base 00 - Black   */
	"#6c6ccb", /*  1: Base 08 - Red     */
	"#94796b", /*  2: Base 0B - Green   */
	"#e67841", /*  3: Base 0A - Yellow  */
	"#ee8753", /*  4: Base 0D - Blue    */
	"#9999d1", /*  5: Base 0E - Magenta */
	"#f49666", /*  6: Base 0C - Cyan    */
	"#8888fb", /*  7: Base 05 - White   */

	/* Bright colors */
	"#767693", /*  8: Base 03 - Bright Black */
	"#6c6ccb", /*  9: Base 08 - Red          */
	"#94796b", /* 10: Base 0B - Green        */
	"#e67841", /* 11: Base 0A - Yellow       */
	"#ee8753", /* 12: Base 0D - Blue         */
	"#9999d1", /* 13: Base 0E - Magenta      */
	"#f49666", /* 14: Base 0C - Cyan         */
	"#ebebff", /* 15: Base 05 - Bright White */

	/* A few more colors */

	"#dd672c", /* 16: Base 09 */
	"#8383ce", /* 17: Base 0F */
	"#3a3a4a", /* 18: Base 01 */
	"#58586f", /* 19: Base 02 */
	"#9d9dc8", /* 20: Base 04 */
	"#afaffd", /* 21: Base 06 */

	[255] = 0,

	[256] = "#58586f", /* default fg: Base 02 */
	[257] = "#ebebff", /* default bg: Base 07 */	
};

// Foreground, background and cursor
static unsigned int defaultfg = 256;
static unsigned int defaultbg = 257;
static unsigned int defaultcs = 256;



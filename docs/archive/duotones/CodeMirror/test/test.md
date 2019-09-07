# Getting the Gist of Markdown's Formatting Syntax

Getting the Gist of Markdown's Formatting Syntax
------------------------------------------------

[s]: /projects/markdown/syntax  "Markdown Syntax"
[d]: /projects/markdown/dingus  "Markdown Dingus"
[src]: /projects/markdown/basics.text

## Paragraphs, Headers, Blockquotes ##

A paragraph is simply one or more consecutive lines of text, separated
by one or more blank lines. (A blank line is any line that looks like
a blank line -- a line containing nothing but spaces or tabs is
considered blank.) Normal paragraphs should not be indented with
spaces or tabs.

Markdown offers two styles of headers: *Setext* and *atx*.
Setext-style headers for `&lt;h1&gt;` and `&lt;h2&gt;` are created by
"underlining" with equal signs (`=`) and hyphens (`-`), respectively.
To create an atx-style header, you put 1-6 hash marks (`#`) at the
beginning of the line -- the number of hashes equals the resulting
HTML header level.

Blockquotes are indicated using email-style '`&gt;`' angle brackets.

Horizontal Rules

You can produce a horizontal rule tag (<hr />) by placing three or more hyphens, asterisks, or underscores on a line by themselves. If you wish, you may use spaces between the hyphens or asterisks. Each of the following lines will produce a horizontal rule:

* * *

***

- - -

Markdown:

A First Level Header
====================

A Second Level Header
---------------------

Now is the time for all good men to come to
the aid of their country. This is just a
regular paragraph.

The quick brown fox jumped over the lazy
dog's back.

### Header 3

&gt; This is a blockquote.
&gt;
&gt; This is the second paragraph in the blockquote.
&gt;
&gt; ## This is an H2 in a blockquote


### Phrase Emphasis ###

Markdown uses asterisks and underscores to indicate spans of emphasis.

Markdown:

Some of these words *are emphasized*.
Some of these words _are emphasized also_.

Use two asterisks for **strong emphasis**.
Or, if you prefer, __use two underscores instead__.

## Lists ##

Unordered (bulleted) lists use asterisks, pluses, and hyphens (`*`,
`+`, and `-`) as list markers. These three markers are
interchangable; this:

* Candy.
* Gum.
* Booze.

this:

+ Candy.
+ Gum.
+ Booze.

and this:

- Candy.
- Gum.
- Booze.

all produce the same output:

&lt;ul&gt;
&lt;li&gt;Candy.&lt;/li&gt;
&lt;li&gt;Gum.&lt;/li&gt;
&lt;li&gt;Booze.&lt;/li&gt;
&lt;/ul&gt;

Ordered (numbered) lists use regular numbers, followed by periods, as
list markers:

1. Red
2. Green
3. Blue

If you put blank lines between items, you'll get `&lt;p&gt;` tags for the
list item text. You can create multi-paragraph list items by indenting
the paragraphs by 4 spaces or 1 tab:

* A list item.

  With multiple paragraphs.

* Another item in the list.

### Links ###

Markdown supports two styles for creating links: *inline* and
*reference*. With both styles, you use square brackets to delimit the
text you want to turn into a link.

Inline-style links use parentheses immediately after the link text.
For example:

This is an [example link](http://example.com/).

Optionally, you may include a title attribute in the parentheses:

This is an [example link](http://example.com/ "With a Title").

Reference-style links allow you to refer to your links by names, which
you define elsewhere in your document:

I get 10 times more traffic from [Google][1] than from
[Yahoo][2] or [MSN][3].

[1]: http://google.com/        "Google"
[2]: http://search.yahoo.com/  "Yahoo Search"
[3]: http://search.msn.com/    "MSN Search"

The title attribute is optional. Link names may contain letters,
numbers and spaces, but are *not* case sensitive:

I start my morning with a cup of coffee and
[The New York Times][NY Times].

[ny times]: http://www.nytimes.com/

### Images ###

Image syntax is very much like link syntax.

Inline (titles are optional):

![alt text](/path/to/img.jpg "Title")

Reference-style:

![alt text][id]

[id]: /path/to/img.jpg "Title"

Both of the above examples produce the same output:

&lt;img src="/path/to/img.jpg" alt="alt text" title="Title" /&gt;

### Code ###

In a regular paragraph, you can create code span by wrapping text in
backtick quotes. Any ampersands (`&amp;`) and angle brackets (`&lt;` or
`&gt;`) will automatically be translated into HTML entities. This makes
it easy to use Markdown to write about HTML example code:

I strongly recommend against using any `&lt;blink&gt;` tags.

I wish SmartyPants used named entities like `&amp;mdash;`
instead of decimal-encoded entites like `&amp;#8212;`.

To specify an entire block of pre-formatted code, indent every line of
the block by 4 spaces or 1 tab. Just like with code spans, `&amp;`, `&lt;`,
and `&gt;` characters will be escaped automatically.


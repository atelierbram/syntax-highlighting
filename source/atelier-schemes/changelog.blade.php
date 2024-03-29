---
extends: _layouts.main
page_title: Changelog for Atelier colorschemes
page_type: landingpage
page_id: changelog
slug: 'atelier-schemes/changelog'
---

@section('body')
<h2>Changelog</h2>
<h3>Changelog for Atelier Schemes</h3>
<p class="intro">Besides documenting my learning curve, another reason for these explanations is to give insight in the changes to third parties, who are already using these colorschemes.</p>
<h3>Changes <time class="smll" datetime="2015-03-14">&#8212; March, 2015</time></h3>
<p>Nothing is ever perfect, and the act of creation is an iterative process. But there is also a fine line between improving something, and “falsification of ones growth process”. Trying to avoid the latter, this is one of the reasons for documenting the changes I made in syntax-highlighting colorschemes, I started to make now almost two years ago &hellip;. </p>

<h3 class="bn" id="forest"><a href="{{ $page->baseUrl }}atelier-schemes/forest/">Forest</a></h3>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 300" class="svg-colortiles">
<style type="text/css">
<![CDATA[
.base00-forest-bg  {fill:#1b1918}
.base01-forest-bg  {fill:#2c2421}
.base02-forest-bg  {fill:#68615e}
.base03-forest-bg  {fill:#766e6b}
.base04-forest-bg  {fill:#9c9491}
.base05-forest-bg  {fill:#a8a19f}
.base06-forest-bg  {fill:#e6e2e0}
.base07-forest-bg  {fill:#f1efee}
.base08-forest-bg,
.red-forest-bg     {fill:#f22c40}
.base09-forest-bg, .orange-forest-bg  {fill:#df5320}
.base0A-forest-bg, .yellow-forest-bg  {fill:#c38418}
.base0B-forest-bg, .green-forest-bg   {fill:#7b9726}
.base0C-forest-bg, .cyan-forest-bg    {fill:#3d97b8}
.base0D-forest-bg, .blue-forest-bg    {fill:#407ee7}
.base0E-forest-bg, .violet-forest-bg  {fill:#6666ea}
.base0F-forest-bg, .magenta-forest-bg {fill:#c33ff3}
text{font-size:1.875em}]]></style>
<g>
  <rect x="0" y="0" width="150" height="150" class="base00-forest-bg" />
  <rect x="150" y="0" width="150" height="150" class="base01-forest-bg" />
  <rect x="300" y="0" width="150" height="150" class="base02-forest-bg" />
  <rect x="450" y="0" width="150" height="150" class="base03-forest-bg" />
  <rect x="600" y="0" width="150" height="150" class="base04-forest-bg" />
  <rect x="750" y="0" width="150" height="150" class="base05-forest-bg" />
  <rect x="900" y="0" width="150" height="150" class="base06-forest-bg" />
  <rect x="1050" y="0" width="150" height="150" class="base07-forest-bg" />
  <rect x="0" y="150" width="150" height="150" class="yellow-forest-bg" />
  <rect x="150" y="150" width="150" height="150" class="orange-forest-bg" />
  <rect x="300" y="150" width="150" height="150" class="red-forest-bg" />
  <rect x="450" y="150" width="150" height="150" class="magenta-forest-bg" />
  <rect x="600" y="150" width="150" height="150" class="violet-forest-bg" />
  <rect x="750" y="150" width="150" height="150" class="blue-forest-bg" />
  <rect x="900" y="150" width="150" height="150" class="cyan-forest-bg" />
  <rect x="1050" y="150" width="150" height="150" class="green-forest-bg" />
</g>
</svg>

<h4 class="mtl">Changes <time class="smll" datetime="2015-03-14">&#8212; March, 2015</time></h4>
<p>Three changes for Forest, since March 14, 2015, <i>(see also <a href="https://github.com/atelierbram/syntax-highlighting/blob/master/CHANGELOG.md">the Change Log</a>)</i>: it’s all about readability, avoiding color-clashes, and balance.</p>
<ol>
  <li>Changed value for green: base0B changed from <span class="bg-colors-inline" style="background-color:#5ab738">#5ab738</span> to  <span class="bg-colors-inline" style="background-color:#7b9726">#7b9726</span> (much warmer green, now it doesn’t clash with the red anymore).</li>
  <li>Changed value for cyan (more towards blue): base0B changed from <span class="bg-colors-inline" style="background-color:#00ad9c">#00ad9c</span> to <span class="bg-colors-inline" style="background-color:#3d97b8">#3d97b8</span></li>
  <li>Changed value for yellow (slightly darker): base0A changed from <span class="bg-colors-inline" style="background-color:#d5911a">#d5911a</span> to <span class="bg-colors-inline" style="background-color:#c38418">#c38418</span></li>
</ol>

<h4 class="mtm" id="why-changing-1">Why changing?</h4>
<p>Because ones the defect is seen, it can’t be unseen &hellip;</p>

<p class="mtm mbm-minus clear"><strong>Before</strong></p>
<pre class="base16" style="background-color:#1b1918;color:#a8a19f"><span style="color:#6666ea">

require</span> <span style="color:#5ab738">"gem"</span>
<span style="color:#f22c40">string</span> = <span style="color:#5ab738">"base16"</span>

</pre>

<p>In my eyes, after some time I started to get distracted by the clash between the red and the green. Thinking the green was drawing unnessesary attention to itself. It really comes to the front, because of the warm brownish background in this scheme as well, but not in a way that is in harmony with the rest of the colors of the colorscheme. In the end it’s all about balance.</p>

<p class="mtm mbm-minus clear"><strong>After</strong></p>
<pre class="base16" style="background-color:#1b1918;color:#a8a19f"><span style="color:#6666ea">

require</span> <span style="color:#7b9726">"gem"</span>
<span style="color:#f22c40">string</span> = <span style="color:#7b9726">"base16"</span>

</pre>
<p>So by changing the hue value of green more towards the yellow, making it “warmer”, in a sense, this clash is gone, the text becomes more readable, for it doesn't draw the wrong attention to itself.</p>

<p class="mtm mbm-minus clear"><strong>Before</strong></p>
<pre class="base16" style="background-color:#f1efee;color:#68615e"><span style="color:#f22c40">
person1</span> = <span style="color:#d5911a">Person</span>.<span style="color:#407ee7">new</span>(<span style="color:#5ab738">:name</span> => <span style="color:#5ab738">"Chris"</span>)
<span style="color:#407ee7">print</span> <span style="color:#d5911a">Person</span>::<span style="color:#407ee7">greet</span>, <span style="color:#5ab738">" "</span>, <span style="color:#f22c40">person1</span>.<span style="color:#407ee7">name</span>, <span style="color:#5ab738">"<span style="color:#df5320">\n</span>"</span></pre>
<p>The yellow looked just a bit too faded on a light background</p>

<p class="mtm mbm-minus clear"><strong>After</strong></p>
<pre class="base16" style="background-color:#f1efee;color:#68615e"><span style="color:#f22c40">

person1</span> = <span style="color:#c38418">Person</span>.<span style="color:#407ee7">new</span>(<span style="color:#7b9726">:name</span> => <span style="color:#7b9726">"Chris"</span>)
<span style="color:#407ee7">print</span> <span style="color:#c38418">Person</span>::<span style="color:#407ee7">greet</span>, <span style="color:#7b9726">" "</span>, <span style="color:#f22c40">person1</span>.<span style="color:#407ee7">name</span>, <span style="color:#7b9726">"<span style="color:#df5320">\n</span>"</span></pre>
<p>Making yellow a tiny bit darker gave it more presence among the other colors on a light background, while still holding it’s own on a dark background &hellip;</p>

<p class="clear mtl ptm">Now because green was given a warmer value, cyan had to be changed as well, to keep logical intervals between the colors. More <a href="../forest/">information</a> on code, color-values and more &hellip;.</p>

<h3 id="heath" class="mtm bn"><a href="../heath">Heath</a></h3>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 300" class="svg-colortiles">
<style type="text/css">
<![CDATA[
.base00-heath-bg  {fill:#1b181b}
.base01-heath-bg  {fill:#292329}
.base02-heath-bg  {fill:#695d69}
.base03-heath-bg  {fill:#776977}
.base04-heath-bg  {fill:#9e8f9e}
.base05-heath-bg  {fill:#ab9bab}
.base06-heath-bg  {fill:#d8cad8}
.base07-heath-bg  {fill:#f7f3f7}
.base08-heath-bg, .red-heath-bg     {fill:#ca402b}
.base09-heath-bg, .orange-heath-bg  {fill:#a65926}
.base0A-heath-bg, .yellow-heath-bg  {fill:#bb8a35}
.base0B-heath-bg, .green-heath-bg   {fill:#918b3b}
.base0C-heath-bg, .cyan-heath-bg    {fill:#159393}
.base0D-heath-bg, .blue-heath-bg    {fill:#516aec}
.base0E-heath-bg, .violet-heath-bg  {fill:#7b59c0}
.base0F-heath-bg, .magenta-heath-bg {fill:#cc33cc}
text{font-size:1.875em}]]></style>
<g>
  <rect x="0" y="0" width="150" height="150" class="base00-heath-bg" />
  <rect x="150" y="0" width="150" height="150" class="base01-heath-bg" />
  <rect x="300" y="0" width="150" height="150" class="base02-heath-bg" />
  <rect x="450" y="0" width="150" height="150" class="base03-heath-bg" />
  <rect x="600" y="0" width="150" height="150" class="base04-heath-bg" />
  <rect x="750" y="0" width="150" height="150" class="base05-heath-bg" />
  <rect x="900" y="0" width="150" height="150" class="base06-heath-bg" />
  <rect x="1050" y="0" width="150" height="150" class="base07-heath-bg" />
  <rect x="0" y="150" width="150" height="150" class="yellow-heath-bg" />
  <rect x="150" y="150" width="150" height="150" class="orange-heath-bg" />
  <rect x="300" y="150" width="150" height="150" class="red-heath-bg" />
  <rect x="450" y="150" width="150" height="150" class="magenta-heath-bg" />
  <rect x="600" y="150" width="150" height="150" class="violet-heath-bg" />
  <rect x="750" y="150" width="150" height="150" class="blue-heath-bg" />
  <rect x="900" y="150" width="150" height="150" class="cyan-heath-bg" />
  <rect x="1050" y="150" width="150" height="150" class="green-heath-bg" />
  </g>
</svg>

<h4 class="mtl">Changes <time class="smll" datetime="2015-03-14">&#8212; March, 2015</time></h4>

<p>One changed value for green: base0B changed from <span class="bg-colors-inline" style="background-color:#379a37">#379a37</span> to  <span class="bg-colors-inline" style="background-color:#918b3b">#918b3b</span> (a radical change, a much warmer green).</p>

<p class="mtm mbm-minus clear"><strong>Before</strong></p>
<pre class="base16" style="background-color:#1b181b;color:#ab9bab">

<span style="color:#7b59c0">
require</span> <span style="color:#379a37">"gem"</span>
<span style="color:#ca402b">string</span> = <span style="color:#379a37">"base16"</span>

</pre>

<p>Here it was really the clash between the green and the background that began to bother me after a while. The green pops out from the warm brownish background, cathing the eye more than the other colors.</p>

<p class="mtm mbm-minus clear"><strong>After</strong></p>
<pre class="base16" style="background-color:#1b1918;color:#ab9bab">

<span style="color:#7b59c0">
require</span> <span style="color:#918b3b">"gem"</span>
<span style="color:#ca402b">string</span> = <span style="color:#918b3b">"base16"</span>

</pre>
<p>So again, by changing the hue value of green more towards the yellow, making it “warmer”, it fits in more harmoniously within the colorscheme.</p>

<p>More <a href="../heath/">information</a> on code, color-values and more &hellip;.</p>

<h3 id="sulphurpool" class="mtm bn"><a href="../sulphurpool">Sulphurpool</a></h3>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 300" class="svg-colortiles">
<style type="text/css">
<![CDATA[
.base00-sulphurpool-bg  {fill:#202746}
.base01-sulphurpool-bg  {fill:#293256}
.base02-sulphurpool-bg  {fill:#5e6687}
.base03-sulphurpool-bg  {fill:#6b7394}
.base04-sulphurpool-bg  {fill:#898ea4}
.base05-sulphurpool-bg  {fill:#979db4}
.base06-sulphurpool-bg  {fill:#dfe2f1}
.base07-sulphurpool-bg  {fill:#f5f7ff}
.base08-sulphurpool-bg,
.red-sulphurpool-bg     {fill:#c94922}
.base09-sulphurpool-bg,
.orange-sulphurpool-bg  {fill:#c76b29}
.base0A-sulphurpool-bg,
.yellow-sulphurpool-bg  {fill:#c08b30}
.base0B-sulphurpool-bg,
.green-sulphurpool-bg   {fill:#ac9739}
.base0C-sulphurpool-bg,
.cyan-sulphurpool-bg    {fill:#22a2c9}
.base0D-sulphurpool-bg,
.blue-sulphurpool-bg    {fill:#3d8fd1}
.base0E-sulphurpool-bg,
.violet-sulphurpool-bg  {fill:#6679cc}
.base0F-sulphurpool-bg,
.magenta-sulphurpool-bg {fill:#9c637a}
text{font-size:1.875em}]]></style>
<g>
  <rect x="0" y="0" width="150" height="150" class="base00-sulphurpool-bg" />
  <rect x="150" y="0" width="150" height="150" class="base01-sulphurpool-bg" />
  <rect x="300" y="0" width="150" height="150" class="base02-sulphurpool-bg" />
  <rect x="450" y="0" width="150" height="150" class="base03-sulphurpool-bg" />
  <rect x="600" y="0" width="150" height="150" class="base04-sulphurpool-bg" />
  <rect x="750" y="0" width="150" height="150" class="base05-sulphurpool-bg" />
  <rect x="900" y="0" width="150" height="150" class="base06-sulphurpool-bg" />
  <rect x="1050" y="0" width="150" height="150" class="base07-sulphurpool-bg" />
  <rect x="0" y="150" width="150" height="150" class="yellow-sulphurpool-bg" />
  <rect x="150" y="150" width="150" height="150" class="orange-sulphurpool-bg" />
  <rect x="300" y="150" width="150" height="150" class="red-sulphurpool-bg" />
  <rect x="450" y="150" width="150" height="150" class="magenta-sulphurpool-bg" />
  <rect x="600" y="150" width="150" height="150" class="violet-sulphurpool-bg" />
  <rect x="750" y="150" width="150" height="150" class="blue-sulphurpool-bg" />
  <rect x="900" y="150" width="150" height="150" class="cyan-sulphurpool-bg" />
  <rect x="1050" y="150" width="150" height="150" class="green-sulphurpool-bg" />
</g>
</svg>

<p class="mtm">Sulphurpool is a the most recent colorscheme, the changes documented in the Changelog are not likely to affect any implementation.</p>

<p>More <a href="../sulphurpool/">information</a> on code, color-values and more &hellip;.</p>

<h3 id="lakeside" class="mtm bn"><a href="../lakeside">Lakeside</a></h3>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 300" class="svg-colortiles">
<style type="text/css">
<![CDATA[
.base00-lakeside-bg  {fill:#161b1d}
.base01-lakeside-bg  {fill:#1f292e}
.base02-lakeside-bg  {fill:#516d7b}
.base03-lakeside-bg  {fill:#5a7b8c}
.base04-lakeside-bg  {fill:#7195a8}
.base05-lakeside-bg  {fill:#7ea2b4}
.base06-lakeside-bg  {fill:#c1e4f6}
.base07-lakeside-bg  {fill:#ebf8ff}
.base08-lakeside-bg, .red-lakeside-bg     {fill:#d22d72}
.base09-lakeside-bg, .orange-lakeside-bg  {fill:#935c25}
.base0A-lakeside-bg, .yellow-lakeside-bg  {fill:#8a8a0f}
.base0B-lakeside-bg, .green-lakeside-bg   {fill:#568c3b}
.base0C-lakeside-bg, .cyan-lakeside-bg    {fill:#2d8f6f}
.base0D-lakeside-bg, .blue-lakeside-bg    {fill:#257fad}
.base0E-lakeside-bg, .violet-lakeside-bg  {fill:#6b6bb8}
.base0F-lakeside-bg, .magenta-lakeside-bg {fill:#b72dd2}
text{font-size:1.875em}]]></style>
<g>
<rect x="0" y="0" width="150" height="150" class="base00-lakeside-bg" />
<rect x="150" y="0" width="150" height="150" class="base01-lakeside-bg" />
<rect x="300" y="0" width="150" height="150" class="base02-lakeside-bg" />
<rect x="450" y="0" width="150" height="150" class="base03-lakeside-bg" />
<rect x="600" y="0" width="150" height="150" class="base04-lakeside-bg" />
<rect x="750" y="0" width="150" height="150" class="base05-lakeside-bg" />
<rect x="900" y="0" width="150" height="150" class="base06-lakeside-bg" />
<rect x="1050" y="0" width="150" height="150" class="base07-lakeside-bg" />
<rect x="0" y="150" width="150" height="150" class="yellow-lakeside-bg" />
<rect x="150" y="150" width="150" height="150" class="orange-lakeside-bg" />
<rect x="300" y="150" width="150" height="150" class="red-lakeside-bg" />
<rect x="450" y="150" width="150" height="150" class="magenta-lakeside-bg" />
<rect x="600" y="150" width="150" height="150" class="violet-lakeside-bg" />
<rect x="750" y="150" width="150" height="150" class="blue-lakeside-bg" />
<rect x="900" y="150" width="150" height="150" class="cyan-lakeside-bg" />
<rect x="1050" y="150" width="150" height="150" class="green-lakeside-bg" />
</g>
</svg>

<h4 class="mtl">Changes <time class="smll" datetime="2015-03-14">&#8212; March, 2015</time></h4>

<p>One changed value for violet: base0E changed from <span class="bg-colors-inline" style="background-color:#5d5db1">#5d5db1</span> to  <span class="bg-colors-inline" style="background-color:#6b6bb8">#6b6bb8</span> (a slightly lighter violet).</p>

<p class="mtm mbm-minus clear"><strong>Before</strong></p>
<pre class="base16" style="background-color:#161b1d;color:#7ea2b4">

<span style="color:#5d5db1">
require</span> <span style="color:#568c3b">"gem"</span>
<span style="color:#d22d72">string</span> = <span style="color:#568c3b">"base16"</span>

</pre>

<p class="mtm mbm-minus clear"><strong>After</strong></p>
<pre class="base16" style="background-color:#161b1d;color:#7ea2b4">

<span style="color:#6b6bb8">
require</span> <span style="color:#568c3b">"gem"</span>
<span style="color:#d22d72">string</span> = <span style="color:#568c3b">"base16"</span>

</pre>

<p>The lightened purple, <i>here called ‘violet’</i> performs much better on the dark background.</p>

<p class="clear">More <a href="../lakeside/">information</a> on code, color-values and more &hellip;.</p>

<h3 id="seaside" class="mtm bn"><a href="../seaside">Seaside</a></h3>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 300" class="svg-colortiles">
<style type="text/css">
<![CDATA[
.base00-seaside-bg  {fill:#131513}
.base01-seaside-bg  {fill:#242924}
.base02-seaside-bg  {fill:#5e6e5e}
.base03-seaside-bg  {fill:#687d68}
.base04-seaside-bg  {fill:#809980}
.base05-seaside-bg  {fill:#8ca68c}
.base06-seaside-bg  {fill:#cfe8cf}
.base07-seaside-bg  {fill:#f4fbf4}
.base08-seaside-bg, .red-seaside-bg     {fill:#e6193c}
.base09-seaside-bg, .orange-seaside-bg  {fill:#87711d}
.base0A-seaside-bg, .yellow-seaside-bg  {fill:#98981b}
.base0B-seaside-bg, .green-seaside-bg   {fill:#29a329}
.base0C-seaside-bg, .cyan-seaside-bg    {fill:#1999b3}
.base0D-seaside-bg, .blue-seaside-bg    {fill:#3d62f5}
.base0E-seaside-bg, .violet-seaside-bg  {fill:#ad2bee}
.base0F-seaside-bg, .magenta-seaside-bg {fill:#e619c3}
text{font-size:1.875em}]]></style>
<g>
<rect x="0" y="0" width="150" height="150" class="base00-seaside-bg" />
<rect x="150" y="0" width="150" height="150" class="base01-seaside-bg" />
<rect x="300" y="0" width="150" height="150" class="base02-seaside-bg" />
<rect x="450" y="0" width="150" height="150" class="base03-seaside-bg" />
<rect x="600" y="0" width="150" height="150" class="base04-seaside-bg" />
<rect x="750" y="0" width="150" height="150" class="base05-seaside-bg" />
<rect x="900" y="0" width="150" height="150" class="base06-seaside-bg" />
<rect x="1050" y="0" width="150" height="150" class="base07-seaside-bg" />
<rect x="0" y="150" width="150" height="150" class="yellow-seaside-bg" />
<rect x="150" y="150" width="150" height="150" class="orange-seaside-bg" />
<rect x="300" y="150" width="150" height="150" class="red-seaside-bg" />
<rect x="450" y="150" width="150" height="150" class="magenta-seaside-bg" />
<rect x="600" y="150" width="150" height="150" class="violet-seaside-bg" />
<rect x="750" y="150" width="150" height="150" class="blue-seaside-bg" />
<rect x="900" y="150" width="150" height="150" class="cyan-seaside-bg" />
<rect x="1050" y="150" width="150" height="150" class="green-seaside-bg" />
</g>
</svg>

<h4 class="mtl">Changes <time class="smll" datetime="2015-03-14">&#8212; March, 2015</time></h4>
<ol>
  <li>Changed value for yellow (quit a bit darker): base0A changed from <span class="bg-colors-inline" style="background-color:#c3c322">#c3c322</span> to <span class="bg-colors-inline" style="background-color:#98981b">#98981b</span></li>
  <li>Changed value for lightest color (less saturated): base07 changed from <span class="bg-colors-inline" style="background-color:#f0fff0">#f0fff0</span> to <span class="bg-colors-inline" style="background-color:#f4fbf4">#f4fbf4</span></li>
</ol>

<p class="mtm mbm-minus clear"><strong>Before</strong></p>
<pre class="base16" style="background-color:#f0fff0;color:#5e6e5e">

<span style="color:#e6193c">
person1</span> = <span style="color:#c3c322">Person</span>.<span style="color:#3d62f5">new</span>(<span style="color:#29a329">:name</span> => <span style="color:#29a329">"Chris"</span>)
<span style="color:#3d62f5">print</span> <span style="color:#c3c322">Person</span>::<span style="color:#3d62f5">greet</span>, <span style="color:#29a329">" "</span>, <span style="color:#e6193c">person1</span>.<span style="color:#3d62f5">name</span>, <span style="color:#29a329">"<span style="color:#87711d">\n</span>"</span>

</pre>

<p>After a while the intense saturation of the lightest green, here as background-color, started to be a distraction for me, and the yellow looked far too light on this light background.</p>

<p class="mtm mbm-minus clear"><strong>After</strong></p>
<pre class="base16" style="background-color:#f4fbf4;color:#5e6e5e"><span style="color:#e6193c">
person1</span> = <span style="color:#98981b">Person</span>.<span style="color:#3d62f5">new</span>(<span style="color:#29a329">:name</span> => <span style="color:#29a329">"Chris"</span>)
<span style="color:#3d62f5">print</span> <span style="color:#98981b">Person</span>::<span style="color:#3d62f5">greet</span>, <span style="color:#29a329">" "</span>, <span style="color:#e6193c">person1</span>.<span style="color:#3d62f5">name</span>, <span style="color:#29a329">"<span style="color:#87711d">\n</span>"</span></pre>
<p>Desaturating the lightest color <code>base07</code> makes this background-color on light-themes much quiter.</p><p>Making yellow quite a bit darker gave it more presence among the other colors on a light background, while still holding it’s own on a dark background &hellip; </p>

<p class="clear">More <a href="../seaside/">information</a> on code, color-values and more &hellip;.</p>

<h3 id="dune" class="mtm bn"><a href="../dune">Dune</a></h3>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 300" class="svg-colortiles">
<style type="text/css">
<![CDATA[
     .base00-dune-bg  {fill:#20201d}
     .base01-dune-bg  {fill:#292824}
     .base02-dune-bg  {fill:#6e6b5e}
     .base03-dune-bg  {fill:#7d7a68}
     .base04-dune-bg  {fill:#999580}
     .base05-dune-bg  {fill:#a6a28c}
     .base06-dune-bg  {fill:#e8e4cf}
     .base07-dune-bg  {fill:#fefbec}
     .base08-dune-bg, .red-dune-bg     {fill:#d73737}
     .base09-dune-bg, .orange-dune-bg  {fill:#b65611}
     .base0A-dune-bg, .yellow-dune-bg  {fill:#ae9513}
     .base0B-dune-bg, .green-dune-bg   {fill:#60ac39}
     .base0C-dune-bg, .cyan-dune-bg    {fill:#1fad83}
     .base0D-dune-bg, .blue-dune-bg    {fill:#6684e1}
     .base0E-dune-bg, .violet-dune-bg  {fill:#b854d4}
     .base0F-dune-bg, .magenta-dune-bg {fill:#d43552}
     text{font-size:1.875em}]]></style>
<g>
<rect x="0" y="0" width="150" height="150" class="base00-dune-bg" />
<rect x="150" y="0" width="150" height="150" class="base01-dune-bg" />
<rect x="300" y="0" width="150" height="150" class="base02-dune-bg" />
<rect x="450" y="0" width="150" height="150" class="base03-dune-bg" />
<rect x="600" y="0" width="150" height="150" class="base04-dune-bg" />
<rect x="750" y="0" width="150" height="150" class="base05-dune-bg" />
<rect x="900" y="0" width="150" height="150" class="base06-dune-bg" />
<rect x="1050" y="0" width="150" height="150" class="base07-dune-bg" />
<rect x="0" y="150" width="150" height="150" class="yellow-dune-bg" />
<rect x="150" y="150" width="150" height="150" class="orange-dune-bg" />
<rect x="300" y="150" width="150" height="150" class="red-dune-bg" />
<rect x="450" y="150" width="150" height="150" class="magenta-dune-bg" />
<rect x="600" y="150" width="150" height="150" class="violet-dune-bg" />
<rect x="750" y="150" width="150" height="150" class="blue-dune-bg" />
<rect x="900" y="150" width="150" height="150" class="cyan-dune-bg" />
<rect x="1050" y="150" width="150" height="150" class="green-dune-bg" />
</g>
</svg>

<h4 class="mtl">Changes <time class="smll" datetime="2015-03-14">&#8212; March, 2015</time></h4>
<p>Changed value for yellow (slightly darker): base0A changed from <span class="bg-colors-inline" style="background-color:#cfb017">#cfb017</span> to <span class="bg-colors-inline" style="background-color:#ae9513">#ae9513</span></p>

<p class="mtm mbm-minus clear"><strong>Before</strong></p>
<pre class="base16" style="background-color:#fefbec;color:#6e6b5e">

<span style="color:#d73737">
person1</span> = <span style="color:#cfb017">Person</span>.<span style="color:#6684e1">new</span>(<span style="color:#60ac39">:name</span> => <span style="color:#60ac39">"Chris"</span>)
<span style="color:#6684e1">print</span> <span style="color:#cfb017">Person</span>::<span style="color:#6684e1">greet</span>, <span style="color:#60ac39">" "</span>, <span style="color:#d73737">person1</span>.<span style="color:#6684e1">name</span>, <span style="color:#60ac39">"<span style="color:#b65611">\n</span>"</span>

</pre>

<p>Yellow looked too light on this light background.</p>

<p class="mtm mbm-minus clear"><strong>After</strong></p>
<pre class="base16" style="background-color:#fefbec;color:#6e6b5e">

<span style="color:#d73737">
person1</span> = <span style="color:#ae9513">Person</span>.<span style="color:#6684e1">new</span>(<span style="color:#60ac39">:name</span> => <span style="color:#60ac39">"Chris"</span>)
<span style="color:#6684e1">print</span> <span style="color:#ae9513">Person</span>::<span style="color:#6684e1">greet</span>, <span style="color:#60ac39">" "</span>, <span style="color:#d73737">person1</span>.<span style="color:#6684e1">name</span>, <span style="color:#60ac39">"<span style="color:#b65611">\n</span>"</span>

</pre>

<p>Making yellow quite a bit darker gave it more presence among the other colors on a light background, while still holding it’s own on a dark background &hellip; </p>

<p class="clear">More <a href="../dune">information</a> on code, color-values and more &hellip;.</p>

@endsection

---
extends: _layouts.atelier_schemes
page_title: Dune colorscheme for syntax highlighting
page_type: themepage
page_id: dune
slug: dune
date: 2015-01-09
---

<h3 id="about-dune">Dune</h3>

<p>Base color for Dune is yellow, and then warm yellowish brown greyed colors for the background. A welcoming, soothing friendly but also bright, colorscheme.</p>

<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1200 1200">
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
]]></style>
<g>
  <rect x="0" y="0" width="300" height="300" class="base00-dune-bg" />
  <rect x="300" y="0" width="300" height="300" class="base01-dune-bg" />
  <rect x="600" y="0" width="300" height="300" class="base02-dune-bg" />
  <rect x="900" y="0" width="300" height="300" class="base03-dune-bg" />
  <rect x="0" y="300" width="300" height="300" class="base04-dune-bg" />
  <rect x="300" y="300" width="300" height="300" class="base05-dune-bg" />
  <rect x="600" y="300" width="300" height="300" class="base06-dune-bg" />
  <rect x="900" y="300" width="300" height="300" class="base07-dune-bg" />
  <rect x="0" y="600" width="300" height="300" class="yellow-dune-bg" />
  <rect x="300" y="600" width="300" height="300" class="orange-dune-bg" />
  <rect x="600" y="600" width="300" height="300" class="red-dune-bg" />
  <rect x="900" y="600" width="300" height="300" class="magenta-dune-bg" />
  <rect x="0" y="900" width="300" height="300" class="violet-dune-bg" />
  <rect x="300" y="900" width="300" height="300" class="blue-dune-bg" />
  <rect x="600" y="900" width="300" height="300" class="cyan-dune-bg" />
  <rect x="900" y="900" width="300" height="300" class="green-dune-bg" />
</g>
<g>
  <text x="0" y="158" class="base07-dune-bg">
    <tspan dx="100" dy="0">base00</tspan>
    <tspan dx="190" dy="0">base01</tspan>
    <tspan dx="200" dy="0">base02</tspan>
    <tspan dx="195" dy="0">base03</tspan>
  </text>
  <text x="0" y="465" class="base00-dune-bg">
    <tspan dx="100" dy="0">base04</tspan>
    <tspan dx="190" dy="0">base05</tspan>
    <tspan dx="200" dy="0">base06</tspan>
    <tspan dx="195" dy="0">base07</tspan>
  </text>
  <text x="0" y="760" class="base00-dune-bg">
    <tspan dx="100" dy="0">yellow</tspan>
    <tspan dx="210" dy="0">orange</tspan>
    <tspan dx="220" dy="0" class="base07-dune-bg">red</tspan>
    <tspan dx="210" dy="0" class="base07-dune-bg">magenta</tspan>
  </text>
  <text x="0" y="1060" class="base00-dune-bg">
    <tspan dx="100" dy="0">violet</tspan>
    <tspan dx="230" dy="0">blue</tspan>
    <tspan dx="235" dy="0">cyan</tspan>
    <tspan dx="225" dy="0">green</tspan>
  </text>
</g>
</svg>

<h3 id="color-code" class="mtm no-border">Colors in code <small>Scss variables</small></h3>

<pre class="base00-background language-scss"><code class="language-scss sh-c-light">
$base00: <span class="sh-c-comm">hsl(50, 5%, 12%);   /* #20201d */</span>
$base01: <span class="base01-background sh-c-comm">hsl(50, 6%, 15%);   /* #292824 */</span>
$base02: <span class="base02-background sh-c-comm sh-c-dark">hsl(50, 8%, 40%);   /* #6e6b5e */</span>
$base03: <span class="base03-background sh-c-comm sh-c-dark">hsl(50, 9%, 45%);   /* #7d7a68 */</span>
$base04: <span class="base04-background sh-c-comm sh-c-dark">hsl(50, 11%, 55%);  /* #999580 */</span>
$base05: <span class="base05-background sh-c-comm sh-c-dark">hsl(50, 13%, 60%);  /* #a6a28c */</span>
$base06: <span class="base06-background sh-c-comm sh-c-dark">hsl(50, 35%, 86%);  /* #e8e4cf */</span>
$base07: <span class="base07-background sh-c-comm sh-c-dark">hsl(50, 87%, 96%);  /* #fefbec */</span>
$base08: <span class="base08-background sh-c-comm sh-c-dark">hsl(0, 67%, 53%);   /* #d73737 */</span>
$base09: <span class="base09-background sh-c-comm sh-c-dark">hsl(25, 83%, 39%);  /* #b65611 */</span>
$base0a: <span class="base0A-background sh-c-comm sh-c-dark">hsl(50, 80%, 38%);  /* #ae9513 */</span>
$base0b: <span class="base0B-background sh-c-comm sh-c-dark">hsl(100, 50%, 45%); /* #60ac39 */</span>
$base0c: <span class="base0C-background sh-c-comm sh-c-dark">hsl(162, 70%, 40%); /* #1fad83 */</span>
$base0d: <span class="base0D-background sh-c-comm sh-c-dark">hsl(225, 67%, 64%); /* #6684e1 */</span>
$base0e: <span class="base0E-background sh-c-comm sh-c-dark">hsl(287, 60%, 58%); /* #b854d4 */</span>
$base0f: <span class="base0F-background sh-c-comm sh-c-dark">hsl(349, 65%, 52%); /* #d43552 */</span>

<span class="red-background sh-c-comm sh-c-dark">$red:</span>     $base08;
<span class="orange-background sh-c-comm sh-c-dark">$orange:</span>  $base09;
<span class="yellow-background sh-c-comm sh-c-dark">$yellow:</span>  $base0a;
<span class="green-background sh-c-comm sh-c-dark">$green:</span>   $base0b;
<span class="cyan-background sh-c-comm sh-c-dark">$cyan:</span>    $base0c;
<span class="blue-background sh-c-comm sh-c-dark">$blue:</span>    $base0d;
<span class="violet-background sh-c-comm sh-c-dark">$violet:</span>  $base0e;
<span class="magenta-background sh-c-comm sh-c-dark">$magenta:</span> $base0f;

</code></pre>

<pre class="base00-background base05">

<span class="base0E">require</span> <span class="base0B">"gem"</span>

<span class="base08">string</span> = <span class="base0B">"base16"</span>
<span class="base08">symbol</span> = <span class="base0B">:base16</span>
<span class="base08">fixnum</span> = <span class="base09">0</span>
<span class="base08">float</span>  = <span class="base09">0.00</span>
<span class="base08">array</span>  = <span class="base0A">Array</span>.<span class="base0D">new</span>
<span class="base08">array</span>  = [<span class="base0B">'chris'</span>, <span class="base09">85</span>]
<span class="base08">hash</span>   = {<span class="base0B">"test"</span> => <span class="base0B">"test"</span>}
<span class="base08">regexp</span> = <span class="base0C">/[abc]/</span>

<span class="base03"># This is a comment</span>
<span class="base0E">class</span> <span class="base0A">Person</span>

  <span class="base0D">attr_accessor</span> <span class="base0B">:name</span>

  <span class="base0E">def</span> <span class="base0D">initialize</span>(<span class="base08">attributes</span> = {})
    <span class="base08">@name</span> = <span class="base08">attributes</span>[<span class="base0B">:name</span>]
  <span class="base0E">end</span>

  <span class="base0E">def</span> <span class="base0E">self</span>.<span class="base0D">greet</span>
    <span class="base02-background"><span class="base0B">"hello"</span></span>
  <span class="base0E">end</span>
<span class="base0E">end</span>

<span class="base08">person1</span> = <span class="base0A">Person</span>.<span class="base0D">new</span>(<span class="base0B">:name</span> => <span class="base0B">"Chris"</span>)
<span class="base0D">print</span> <span class="base0A">Person</span>::<span class="base0D">greet</span>, <span class="base0B">" "</span>, <span class="base08">person1</span>.<span class="base0D">name</span>, <span class="base0B">"<span class="base09">\n</span>"</span>
<span class="base0D">puts</span> <span class="base0B">"another </span><span class="base0F">#{</span><span class="base0A">Person</span>::<span class="base0D">greet</span><span class="base0F">}</span> <span class="base0F">#{</span><span class="base08">person1</span>.<span class="base0D">name</span><span class="base0F">}</span><span class="base0B">"</span>

</pre>

<pre class="base07-background base02">

<span class="base0E">require</span> <span class="base0B">"rubygems"</span>

<span class="base08">string</span> = <span class="base0B">"tomorrow"</span>
<span class="base08">symbol</span> = <span class="base0B">:tomorrow</span>
<span class="base08">fixnum</span> = <span class="base09">0</span>
<span class="base08">float</span>  = <span class="base09">0.00</span>
<span class="base08">array</span>  = <span class="base0A">Array</span>.<span class="base0D">new</span>
<span class="base08">array</span>  = [<span class="base0B">'chris'</span>, <span class="base09">85</span>]
<span class="base08">hash</span>   = {<span class="base0B">"test"</span> => <span class="base0B">"test"</span>}
<span class="base08">regexp</span> = <span class="base0C">/[abc]/</span>

<span class="base03"># This is a comment</span>
<span class="base0E">class</span> <span class="base0A">Person</span>

  <span class="base0D">attr_accessor</span> <span class="base0B">:name</span>

  <span class="base0E">def</span> <span class="base0D">initialize</span>(<span class="base08">attributes</span> = {})
    <span class="base08">@name</span> = <span class="base08">attributes</span>[<span class="base0B">:name</span>]
  <span class="base0E">end</span>

  <span class="base0E">def</span> <span class="base0E">self</span>.<span class="base0D">greet</span>
    <span class="base06-background"><span class="base0B">"hello"</span></span>
  <span class="base0E">end</span>
<span class="base0E">end</span>

<span class="base08">person1</span> = <span class="base0A">Person</span>.<span class="base0D">new</span>(<span class="base0B">:name</span> => <span class="base0B">"Chris"</span>)
<span class="base0D">print</span> <span class="base0A">Person</span>::<span class="base0D">greet</span>, <span class="base0B">" "</span>, <span class="base08">person1</span>.<span class="base0D">name</span>, <span class="base0B">"<span class="base09">\n</span>"</span>
<span class="base0D">puts</span> <span class="base0B">"another </span><span class="base0F">#{</span><span class="base0A">Person</span>::<span class="base0D">greet</span><span class="base0F">}</span> <span class="base0F">#{</span><span class="base08">person1</span>.<span class="base0D">name</span><span class="base0F">}</span><span class="base0B">"</span>

</pre>

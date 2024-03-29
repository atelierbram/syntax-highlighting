---
extends: _layouts.atelier_schemes
page_title: 'Lakeside colorscheme for syntax highlighting'
page_type: 'themepage'
page_id: 'lakeside'
slug: 'lakeside'
date: 2015-01-06
---

<h3 id="about-lakeside">Lakeside</h3>

<p>Base color for Lakeside is blue, which means bluish colors for the background.</p>

<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1200 1200">
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
]]></style>
<g>
<rect x="0" y="0" width="300" height="300" class="base00-lakeside-bg" />
<rect x="300" y="0" width="300" height="300" class="base01-lakeside-bg" />
<rect x="600" y="0" width="300" height="300" class="base02-lakeside-bg" />
<rect x="900" y="0" width="300" height="300" class="base03-lakeside-bg" />
<rect x="0" y="300" width="300" height="300" class="base04-lakeside-bg" />
<rect x="300" y="300" width="300" height="300" class="base05-lakeside-bg" />
<rect x="600" y="300" width="300" height="300" class="base06-lakeside-bg" />
<rect x="900" y="300" width="300" height="300" class="base07-lakeside-bg" />
<rect x="0" y="600" width="300" height="300" class="yellow-lakeside-bg" />
<rect x="300" y="600" width="300" height="300" class="orange-lakeside-bg" />
<rect x="600" y="600" width="300" height="300" class="red-lakeside-bg" />
<rect x="900" y="600" width="300" height="300" class="magenta-lakeside-bg" />
<rect x="0" y="900" width="300" height="300" class="violet-lakeside-bg" />
<rect x="300" y="900" width="300" height="300" class="blue-lakeside-bg" />
<rect x="600" y="900" width="300" height="300" class="cyan-lakeside-bg" />
<rect x="900" y="900" width="300" height="300" class="green-lakeside-bg" />
</g>
<g>
<text x="0" y="158" class="base07-lakeside-bg">
<tspan dx="100" dy="0">base00</tspan>
<tspan dx="190" dy="0">base01</tspan>
<tspan dx="200" dy="0">base02</tspan>
<tspan dx="195" dy="0">base03</tspan>
</text>
<text x="0" y="465" class="base00-lakeside-bg">
<tspan dx="100" dy="0">base04</tspan>
<tspan dx="190" dy="0">base05</tspan>
<tspan dx="200" dy="0">base06</tspan>
<tspan dx="195" dy="0">base07</tspan>
</text>
<text x="0" y="760" class="base00-lakeside-bg">
<tspan dx="100" dy="0">yellow</tspan>
<tspan dx="210" dy="0">orange</tspan>
<tspan dx="220" dy="0" class="base07-lakeside-bg">red</tspan>
<tspan dx="210" dy="0" class="base07-lakeside-bg">magenta</tspan>
</text>
<text x="0" y="1060" class="base00-lakeside-bg">
<tspan dx="100" dy="0">violet</tspan>
<tspan dx="230" dy="0">blue</tspan>
<tspan dx="235" dy="0">cyan</tspan>
<tspan dx="225" dy="0">green</tspan>
</text>
</g>
</svg>

<h3 id="color-code" class="mtm no-border">Colors in code <small>Scss variables</small></h3>
<pre class="base00-background language-scss"><code class="language-scss sh-c-light">
$base00: <span class="sh-c-comm">hsl(200, 15%, 10%);  /* #161b1d; */</span>
$base01: <span class="base01-background sh-c-comm">hsl(200, 20%, 15%);  /* #1f292e; */</span>
$base02: <span class="base02-background sh-c-comm sh-c-dark">hsl(200, 21%, 40%);  /* #516d7b; */</span>
$base03: <span class="base03-background sh-c-comm sh-c-dark">hsl(200, 22%, 45%);  /* #5a7b8c; */</span>
$base04: <span class="base04-background sh-c-comm sh-c-dark">hsl(200, 24%, 55%);  /* #7195a8; */</span>
$base05: <span class="base05-background sh-c-comm sh-c-dark">hsl(200, 26%, 60%);  /* #7ea2b4; */</span>
$base06: <span class="base06-background sh-c-comm sh-c-dark">hsl(200, 75%, 86%);  /* #c1e4f6; */</span>
$base07: <span class="base07-background sh-c-comm sh-c-dark">hsl(200, 100%, 96%); /* #ebf8ff; */</span>
$base08: <span class="base08-background sh-c-comm sh-c-dark">hsl(335, 65%, 50%);  /* #d22d72; */</span>
$base09: <span class="base09-background sh-c-comm sh-c-dark">hsl(30, 60%, 36%);   /* #935c25; */</span>
$base0a: <span class="base0A-background sh-c-comm sh-c-dark">hsl(60, 80%, 30%);   /* #8a8a0f; */</span>
$base0b: <span class="base0B-background sh-c-comm sh-c-dark">hsl(100, 41%, 39%);  /* #568c3b; */</span>
$base0c: <span class="base0C-background sh-c-comm sh-c-dark">hsl(160, 52%, 37%);  /* #2d8f6f; */</span>
$base0d: <span class="base0D-background sh-c-comm sh-c-dark">hsl(200, 65%, 41%);  /* #257fad; */</span>
$base0e: <span class="base0E-background sh-c-comm sh-c-dark">hsl(240, 35%, 57%);  /* #6b6bb8; */</span>
$base0f: <span class="base0F-background sh-c-comm sh-c-dark">hsl(290, 65%, 50%);  /* #b72dd2; */</span>

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

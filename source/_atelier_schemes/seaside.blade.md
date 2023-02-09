---
extends: _layouts.atelier_schemes
page_title: 'Seaside colorscheme for syntax highlighting'
page_type: 'themepage'
page_id: 'seaside'
slug: 'seaside'
date: 2015-01-08
---

<h3 id="about-seaside">Seaside</h3>
<p>Base color for Seaside is green, which leads to greenish colors for the background.</p>

<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1200 1200">
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
]]></style>
  <g>
  <rect x="0" y="0" width="300" height="300" class="base00-seaside-bg" />
  <rect x="300" y="0" width="300" height="300" class="base01-seaside-bg" />
  <rect x="600" y="0" width="300" height="300" class="base02-seaside-bg" />
  <rect x="900" y="0" width="300" height="300" class="base03-seaside-bg" />
  <rect x="0" y="300" width="300" height="300" class="base04-seaside-bg" />
  <rect x="300" y="300" width="300" height="300" class="base05-seaside-bg" />
  <rect x="600" y="300" width="300" height="300" class="base06-seaside-bg" />
  <rect x="900" y="300" width="300" height="300" class="base07-seaside-bg" />
  <rect x="0" y="600" width="300" height="300" class="yellow-seaside-bg" />
  <rect x="300" y="600" width="300" height="300" class="orange-seaside-bg" />
  <rect x="600" y="600" width="300" height="300" class="red-seaside-bg" />
  <rect x="900" y="600" width="300" height="300" class="magenta-seaside-bg" />
  <rect x="0" y="900" width="300" height="300" class="violet-seaside-bg" />
  <rect x="300" y="900" width="300" height="300" class="blue-seaside-bg" />
  <rect x="600" y="900" width="300" height="300" class="cyan-seaside-bg" />
  <rect x="900" y="900" width="300" height="300" class="green-seaside-bg" />
  </g>
  <g>
  <text x="0" y="158" class="base07-seaside-bg">
    <tspan dx="100" dy="0">base00</tspan>
    <tspan dx="190" dy="0">base01</tspan>
    <tspan dx="200" dy="0">base02</tspan>
    <tspan dx="195" dy="0">base03</tspan>
  </text>
  <text x="0" y="465" class="base00-seaside-bg">
    <tspan dx="100" dy="0">base04</tspan>
    <tspan dx="190" dy="0">base05</tspan>
    <tspan dx="200" dy="0">base06</tspan>
    <tspan dx="195" dy="0">base07</tspan>
  </text>
  <text x="0" y="760" class="base00-seaside-bg">
    <tspan dx="100" dy="0">yellow</tspan>
    <tspan dx="210" dy="0">orange</tspan>
    <tspan dx="220" dy="0" class="base07-seaside-bg">red</tspan>
    <tspan dx="210" dy="0" class="base07-seaside-bg">magenta</tspan>
  </text>
  <text x="0" y="1060" class="base00-seaside-bg">
    <tspan dx="100" dy="0">violet</tspan>
    <tspan dx="230" dy="0">blue</tspan>
    <tspan dx="235" dy="0">cyan</tspan>
    <tspan dx="225" dy="0">green</tspan>
  </text>
  </g>
</svg>

<h3 id="color-code" class="mtm no-border">Colors in code <small>Scss variables</small></h3>
<pre class="base00-background language-scss"><code class="language-scss sh-c-light">
$base00: <span class="sh-c-comm">hsl(120, 5%, 8%);    /* #131513; */</span>
$base01: <span class="base01-background sh-c-comm">hsl(120, 6%, 15%);   /* #242924; */</span>
$base02: <span class="base02-background sh-c-comm sh-c-dark">hsl(120, 8%, 40%);   /* #5e6e5e; */</span>
$base03: <span class="base03-background sh-c-comm sh-c-dark">hsl(120, 9%, 45%);   /* #687d68; */</span>
$base04: <span class="base04-background sh-c-comm sh-c-dark">hsl(120, 11%, 55%);  /* #809980; */</span>
$base05: <span class="base05-background sh-c-comm sh-c-dark">hsl(120, 13%, 60%);  /* #8ca68c; */</span>
$base06: <span class="base06-background sh-c-comm sh-c-dark">hsl(120, 35%, 86%);  /* #cfe8cf; */</span>
$base07: <span class="base07-background sh-c-comm sh-c-dark">hsl(120, 50%, 97%);  /* #f4fbf4; */</span>
$base08: <span class="base08-background sh-c-comm sh-c-dark">hsl(350, 80%, 50%);  /* #e6193c; */</span>
$base09: <span class="base09-background sh-c-comm sh-c-dark">hsl(48, 65%, 32%);   /* #87711d; */</span>
$base0a: <span class="base0A-background sh-c-comm sh-c-dark">hsl(60, 70%, 35%);   /* #98981b; */</span>
$base0b: <span class="base0B-background sh-c-comm sh-c-dark">hsl(120, 60%, 40%);  /* #29a329; */</span>
$base0c: <span class="base0C-background sh-c-comm sh-c-dark">hsl(190, 75%, 40%);  /* #1999b3; */</span>
$base0d: <span class="base0D-background sh-c-comm sh-c-dark">hsl(228, 95%, 63%);  /* #3d62f5; */</span>
$base0e: <span class="base0E-background sh-c-comm sh-c-dark">hsl(280, 85%, 55%);  /* #ad2bee; */</span>
$base0f: <span class="base0F-background sh-c-comm sh-c-dark">hsl(310, 80%, 50%);  /* #e619c3; */</span>

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

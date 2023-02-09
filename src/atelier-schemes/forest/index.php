<?php
$title = 'Syntax highlighting; colorschemes for syntax highlighting';
$type = 'themepage';
$page = 'forest';
$description = 'Collection of colorschemes for Code Syntax highlighting';
include '../../inc/config.inc'; ?>
<!doctype html><html lang="en" class="no-js no-flexbox core wf-inactive">
  <head>
    <meta charset="utf-8">
    <title>Syntax Highlighting</title>
    <style><?php include '../../inc/critical-min-css.inc'; ?></style>
    <style><?php include '../../inc/forest-css.inc'; ?></style>
<?php include '../../inc/head.inc'; ?>
<script><?php include "../../inc/head-detect-js.inc"; ?></script>
<?php
include '../../inc/header.inc';
include '../../inc/nav.inc';
?>
<main class="container" id="main">
<article class="article article--demo">
       <h2>Atelier <small>colorscheme</small></h2>
      <h3 id="about-forest">Forest</h3>

      <p>Starting point for Forest was to have brownish colors for the background, not unlike a colorsheme like <a href="http://joebergantine.com/projects/color-schemes/birds-of-paradise/">&#8220;Birds of Paradise&#8221;</a>, but a bit muddier on the browns, less red and more greyed out, like clay.</p>

      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1200 1200">
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
]]>
</style>
        <g>
        <rect x="0" y="0" width="300" height="300" class="base00-forest-bg" />
        <rect x="300" y="0" width="300" height="300" class="base01-forest-bg" />
        <rect x="600" y="0" width="300" height="300" class="base02-forest-bg" />
        <rect x="900" y="0" width="300" height="300" class="base03-forest-bg" />
        <rect x="0" y="300" width="300" height="300" class="base04-forest-bg" />
        <rect x="300" y="300" width="300" height="300" class="base05-forest-bg" />
        <rect x="600" y="300" width="300" height="300" class="base06-forest-bg" />
        <rect x="900" y="300" width="300" height="300" class="base07-forest-bg" />
        <rect x="0" y="600" width="300" height="300" class="yellow-forest-bg" />
        <rect x="300" y="600" width="300" height="300" class="orange-forest-bg" />
        <rect x="600" y="600" width="300" height="300" class="red-forest-bg" />
        <rect x="900" y="600" width="300" height="300" class="magenta-forest-bg" />
        <rect x="0" y="900" width="300" height="300" class="violet-forest-bg" />
        <rect x="300" y="900" width="300" height="300" class="blue-forest-bg" />
        <rect x="600" y="900" width="300" height="300" class="cyan-forest-bg" />
        <rect x="900" y="900" width="300" height="300" class="green-forest-bg" />
        </g>
        <g>
        <text x="0" y="158" class="base07-forest-bg">
          <tspan dx="100" dy="0">base00</tspan>
          <tspan dx="190" dy="0">base01</tspan>
          <tspan dx="200" dy="0">base02</tspan>
          <tspan dx="195" dy="0">base03</tspan>
        </text>
        <text x="0" y="465" class="base00-forest-bg">
          <tspan dx="100" dy="0">base04</tspan>
          <tspan dx="190" dy="0">base05</tspan>
          <tspan dx="200" dy="0">base06</tspan>
          <tspan dx="195" dy="0">base07</tspan>
        </text>
        <text x="0" y="760" class="base00-forest-bg">
          <tspan dx="100" dy="0">yellow</tspan>
          <tspan dx="210" dy="0">orange</tspan>
          <tspan dx="220" dy="0" class="base07-forest-bg">red</tspan>
          <tspan dx="210" dy="0" class="base07-forest-bg">magenta</tspan>
        </text>
        <text x="0" y="1060" class="base00-forest-bg">
          <tspan dx="100" dy="0">violet</tspan>
          <tspan dx="230" dy="0">blue</tspan>
          <tspan dx="235" dy="0">cyan</tspan>
          <tspan dx="225" dy="0">green</tspan>
        </text>
        </g>
      </svg>

      <h3 id="color-code" class="mtm no-border">Colors in code <small>Scss variables</small></h3>
      <pre class="base00-background language-scss"><code class="language-scss sh-c-light">
$base00: <span class="sh-c-comm">hsl(20, 6%, 10%);    /* #1b1918 */</span>
$base01: <span class="base01-background sh-c-comm">hsl(16, 14%, 15%);   /* #2c2421 */</span>
$base02: <span class="base02-background sh-c-comm sh-c-dark">hsl(18, 5%, 39%);    /* #68615e */</span>
$base03: <span class="base03-background sh-c-comm sh-c-dark">hsl(16, 5%, 44%);    /* #766e6b */</span>
$base04: <span class="base04-background sh-c-comm sh-c-dark">hsl(16, 5%, 59%);    /* #9c9491 */</span>
$base05: <span class="base05-background sh-c-comm sh-c-dark">hsl(13, 5%, 64%);    /* #a8a19f */</span>
$base06: <span class="base06-background sh-c-comm sh-c-dark">hsl(20, 11%, 89%);   /* #e6e2e0 */</span>
$base07: <span class="base07-background sh-c-comm sh-c-dark">hsl(20, 10%, 94%);   /* #f1efee */</span>
$base08: <span class="base08-background sh-c-comm sh-c-dark">hsl(354, 88%, 56%);  /* #f22c40 */</span>
$base09: <span class="base09-background sh-c-comm sh-c-dark">hsl(16, 75%, 50%);   /* #df5320 */</span>
$base0a: <span class="base0A-background sh-c-comm sh-c-dark">hsl(38, 78%, 43%);   /* #c38418 */</span>
$base0b: <span class="base0B-background sh-c-comm sh-c-dark">hsl(75, 60%, 37%);   /* #7b9726 */</span>
$base0c: <span class="base0C-background sh-c-comm sh-c-dark">hsl(174, 100%, 34%); /* #00ad9c */</span>
$base0d: <span class="base0D-background sh-c-comm sh-c-dark">hsl(218, 78%, 58%);  /* #407ee7 */</span>
$base0e: <span class="base0E-background sh-c-comm sh-c-dark">hsl(240, 76%, 66%);  /* #6666ea */</span>
$base0f: <span class="base0F-background sh-c-comm sh-c-dark">hsl(284, 88%, 60%);  /* #c33ff3 */</span>

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


<?php include '../../inc/atelierschemes-downloads.inc'; ?>
<?php include '../../inc/atelierschemes-credits.inc'; ?>
<?php include '../../inc/gototop.inc'; ?>

</article>

</main><!-- /.container-flex #main -->
<?php include '../../inc/footer.inc'; ?>

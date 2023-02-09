<?php
$title = 'Syntax highlighting; colorschemes for syntax highlighting';
$type = 'themepage';
$page = 'heath';
$description = 'Collection of colorschemes for Code Syntax highlighting';
include '../../inc/config.inc'; ?>
<!doctype html><html lang="en" class="no-js no-flexbox core wf-inactive">
  <head>
    <meta charset="utf-8">
    <title>Syntax Highlighting</title>
    <style><?php include '../../inc/critical-min-css.inc'; ?></style>
    <style><?php include '../../inc/heath-css.inc'; ?></style>
<?php include '../../inc/head.inc'; ?>
<script><?php include "../../inc/head-detect-js.inc"; ?></script>
<?php
include '../../inc/header.inc';
include '../../inc/nav.inc';
?>

<main class="container" id="main">
<article class="article article--demo">
           <h2>Atelier <small>colorscheme</small></h2>
          <h3 id="about-lakeside">Heath</h3>

          <p>
          Base color for Heath is magenta, and here the background-colors have these cool-red colors for the background, but then obviously toned down quite a bit &hellip;.
          </p>

          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1200 1200">
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
]]></style>
            <g>
            <rect x="0" y="0" width="300" height="300" class="base00-heath-bg" />
            <rect x="300" y="0" width="300" height="300" class="base01-heath-bg" />
            <rect x="600" y="0" width="300" height="300" class="base02-heath-bg" />
            <rect x="900" y="0" width="300" height="300" class="base03-heath-bg" />
            <rect x="0" y="300" width="300" height="300" class="base04-heath-bg" />
            <rect x="300" y="300" width="300" height="300" class="base05-heath-bg" />
            <rect x="600" y="300" width="300" height="300" class="base06-heath-bg" />
            <rect x="900" y="300" width="300" height="300" class="base07-heath-bg" />
            <rect x="0" y="600" width="300" height="300" class="yellow-heath-bg" />
            <rect x="300" y="600" width="300" height="300" class="orange-heath-bg" />
            <rect x="600" y="600" width="300" height="300" class="red-heath-bg" />
            <rect x="900" y="600" width="300" height="300" class="magenta-heath-bg" />
            <rect x="0" y="900" width="300" height="300" class="violet-heath-bg" />
            <rect x="300" y="900" width="300" height="300" class="blue-heath-bg" />
            <rect x="600" y="900" width="300" height="300" class="cyan-heath-bg" />
            <rect x="900" y="900" width="300" height="300" class="green-heath-bg" />
            </g>
            <g>
            <text x="0" y="158" class="base07-heath-bg">
              <tspan dx="100" dy="0">base00</tspan>
              <tspan dx="190" dy="0">base01</tspan>
              <tspan dx="200" dy="0">base02</tspan>
              <tspan dx="195" dy="0">base03</tspan>
            </text>
            <text x="0" y="465" class="base00-heath-bg">
              <tspan dx="100" dy="0">base04</tspan>
              <tspan dx="190" dy="0">base05</tspan>
              <tspan dx="200" dy="0">base06</tspan>
              <tspan dx="195" dy="0">base07</tspan>
            </text>
            <text x="0" y="760" class="base00-heath-bg">
              <tspan dx="100" dy="0">yellow</tspan>
              <tspan dx="210" dy="0">orange</tspan>
              <tspan dx="220" dy="0" class="base07-heath-bg">red</tspan>
              <tspan dx="210" dy="0" class="base07-heath-bg">magenta</tspan>
            </text>
            <text x="0" y="1060" class="base00-heath-bg">
              <tspan dx="100" dy="0">violet</tspan>
              <tspan dx="230" dy="0">blue</tspan>
              <tspan dx="235" dy="0">cyan</tspan>
              <tspan dx="225" dy="0">green</tspan>
            </text>
            </g>
          </svg>

          <h3 id="color-code" class="mtm no-border">Colors in code <small>Scss variables</small></h3>
          <pre class="base00-background language-scss"><code class="language-scss sh-c-light">
$base00: <span class="sh-c-comm">hsl(300, 5%, 10%);  /* #1b181b */</span>
$base01: <span class="base01-background sh-c-comm">hsl(300, 8%, 15%);  /* #292329 */</span>
$base02: <span class="base02-background sh-c-comm sh-c-dark">hsl(300, 6%, 39%);  /* #695d69 */</span>
$base03: <span class="base03-background sh-c-comm sh-c-dark">hsl(300, 6%, 44%);  /* #776977 */</span>
$base04: <span class="base04-background sh-c-comm sh-c-dark">hsl(300, 7%, 59%);  /* #9e8f9e */</span>
$base05: <span class="base05-background sh-c-comm sh-c-dark">hsl(300, 9%, 64%);  /* #ab9bab */</span>
$base06: <span class="base06-background sh-c-comm sh-c-dark">hsl(300, 16%, 86%); /* #d8cad8 */</span>
$base07: <span class="base07-background sh-c-comm sh-c-dark">hsl(300, 20%, 96%); /* #f7f3f7 */</span>
$base08: <span class="base08-background sh-c-comm sh-c-dark">hsl(8, 65%, 48%);   /* #ca402b */</span>
$base09: <span class="base09-background sh-c-comm sh-c-dark">hsl(24, 63%, 40%);  /* #a65926 */</span>
$base0a: <span class="base0A-background sh-c-comm sh-c-dark">hsl(38, 56%, 47%);  /* #bb8a35 */</span>
$base0b: <span class="base0B-background sh-c-comm sh-c-dark">hsl(56, 42%, 40%);  /* #918b3b */</span>
$base0c: <span class="base0C-background sh-c-comm sh-c-dark">hsl(180, 75%, 33%); /* #159393 */</span>
$base0d: <span class="base0D-background sh-c-comm sh-c-dark">hsl(230, 80%, 62%); /* #516aec */</span>
$base0e: <span class="base0E-background sh-c-comm sh-c-dark">hsl(260, 45%, 55%); /* #7b59c0 */</span>
$base0f: <span class="base0F-background sh-c-comm sh-c-dark">hsl(300, 60%, 50%); /* #c3c */   </span>

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

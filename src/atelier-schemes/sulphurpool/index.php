<?php
$title = 'Syntax highlighting; colorschemes for syntax highlighting';
$type = 'themepage';
$page = 'sulphurpool';
$description = 'Collection of colorschemes for Code Syntax highlighting';
include '../../inc/config.inc'; ?>
<!doctype html><html lang="en" class="no-js no-flexbox core wf-inactive">
  <head>
    <meta charset="utf-8">
    <title>Syntax Highlighting</title>
    <style><?php include '../../inc/critical-min-css.inc'; ?></style>
    <style><?php include '../../inc/sulphurpool-css.inc'; ?></style>
<?php include '../../inc/head.inc'; ?>
<script><?php include "../../inc/head-detect-js.inc"; ?></script>
<?php
include '../../inc/header.inc';
include '../../inc/nav.inc';
?>

<main class="container" id="main">
<article class="article article--demo">
           <h2>Atelier <small>colorscheme</small></h2>
          <h3 id="about-sulphurpool">Sulphurpool</h3>
           <p>
          Base color for sulphurpool is purple, and here the background-colors have these grey purplish colors for the background. Darkest background-color needed not to be as desaturated as some of the warmer palettes, giving this colorscheme it’s otherworldly character. Yellow and green are close, because of avoidance of too greenish hues. In all: easy on the eye.
          </p>

          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1200 1200">
            <style type="text/css">
<![CDATA[
.base00-background  {fill:#202746}
.base01-background  {fill:#293256}
.base02-background  {fill:#5e6687}
.base03-background  {fill:#6b7394}
.base04-background  {fill:#898ea4}
.base05-background  {fill:#979db4}
.base06-background  {fill:#dfe2f1}
.base07-background  {fill:#f5f7ff}
.base08-background,
.red-background     {fill:#c94922}
.base09-background,
.orange-background  {fill:#c76b29}
.base0A-background,
.yellow-background  {fill:#c08b30}
.base0B-background,
.green-background   {fill:#ac9739}
.base0C-background,
.cyan-background    {fill:#22a2c9}
.base0D-background,
.blue-background    {fill:#3d8fd1}
.base0E-background,
.violet-background  {fill:#6679cc}
.base0F-background,
.magenta-background {fill:#9c637a}
]]></style>
            <g>
            <rect x="0" y="0" width="300" height="300" class="base00-background" />
            <rect x="300" y="0" width="300" height="300" class="base01-background" />
            <rect x="600" y="0" width="300" height="300" class="base02-background" />
            <rect x="900" y="0" width="300" height="300" class="base03-background" />
            <rect x="0" y="300" width="300" height="300" class="base04-background" />
            <rect x="300" y="300" width="300" height="300" class="base05-background" />
            <rect x="600" y="300" width="300" height="300" class="base06-background" />
            <rect x="900" y="300" width="300" height="300" class="base07-background" />
            <rect x="0" y="600" width="300" height="300" class="yellow-background" />
            <rect x="300" y="600" width="300" height="300" class="orange-background" />
            <rect x="600" y="600" width="300" height="300" class="red-background" />
            <rect x="900" y="600" width="300" height="300" class="magenta-background" />
            <rect x="0" y="900" width="300" height="300" class="violet-background" />
            <rect x="300" y="900" width="300" height="300" class="blue-background" />
            <rect x="600" y="900" width="300" height="300" class="cyan-background" />
            <rect x="900" y="900" width="300" height="300" class="green-background" />
            </g>
            <g>
            <text x="0" y="158" class="base07-background">
              <tspan dx="100" dy="0">base00</tspan>
              <tspan dx="190" dy="0">base01</tspan>
              <tspan dx="200" dy="0">base02</tspan>
              <tspan dx="195" dy="0">base03</tspan>
            </text>
            <text x="0" y="465" class="base00-background">
              <tspan dx="100" dy="0">base04</tspan>
              <tspan dx="190" dy="0">base05</tspan>
              <tspan dx="200" dy="0">base06</tspan>
              <tspan dx="195" dy="0">base07</tspan>
            </text>
            <text x="0" y="760" class="base00-background">
              <tspan dx="100" dy="0">yellow</tspan>
              <tspan dx="210" dy="0">orange</tspan>
              <tspan dx="220" dy="0" class="base07-background">red</tspan>
              <tspan dx="210" dy="0" class="base07-background">magenta</tspan>
            </text>
            <text x="0" y="1060" class="base00-background">
              <tspan dx="100" dy="0">violet</tspan>
              <tspan dx="230" dy="0">blue</tspan>
              <tspan dx="235" dy="0">cyan</tspan>
              <tspan dx="225" dy="0">green</tspan>
            </text>
            </g>
          </svg>

          <h3 id="color-code" class="mtm no-border">Colors in code <small>Scss variables</small></h3>
          <pre class="base00-background language-scss"><code class="language-scss sh-c-light">
$base00: <span class="sh-c-comm">hsl(229, 37%, 20%);    /* #202746 */</span>
$base01: <span class="base01-background sh-c-comm">hsl(229, 35%, 25%);    /* #293256 */</span>
$base02: <span class="base02-background sh-c-comm sh-c-dark">hsl(228, 18%, 45%);    /* #5e6687 */</span>
$base03: <span class="base03-background sh-c-comm sh-c-dark">hsl(229, 16%, 50%);    /* #6b7394 */</span>
$base04: <span class="base04-background sh-c-comm sh-c-dark">hsl(229, 13%, 59%);    /* #898ea4 */</span>
$base05: <span class="base05-background sh-c-comm sh-c-dark">hsl(229, 16%, 65%);    /* #979db4 */</span>
$base06: <span class="base06-background sh-c-comm sh-c-dark">hsl(229, 40%, 91%);    /* #dfe2f1 */</span>
$base07: <span class="base07-background sh-c-comm sh-c-dark">hsl(229, 94%, 98%);    /* #f5f7ff */</span>
$base08: <span class="base08-background sh-c-comm sh-c-dark">hsl(14, 71%, 47%);;    /* #c94922 */</span>
$base09: <span class="base09-background sh-c-comm sh-c-dark">hsl(25, 66%, 47%);     /* #c76b29 */</span>
$base0a: <span class="base0A-background sh-c-comm sh-c-dark">hsl(38, 60%, 47%);     /* #c08b30 */</span>
$base0b: <span class="base0B-background sh-c-comm sh-c-dark">hsl(49, 50%, 45%);     /* #ac9739 */</span>
$base0c: <span class="base0C-background sh-c-comm sh-c-dark">hsl(194, 71%, 46%);    /* #22a2c9 */</span>
$base0d: <span class="base0D-background sh-c-comm sh-c-dark">hsl(207, 62%, 53%);    /* #3d8fd1 */</span>
$base0e: <span class="base0E-background sh-c-comm sh-c-dark">hsl(229, 50%, 60%);    /* #6679cc */</span>
$base0f: <span class="base0F-background sh-c-comm sh-c-dark">hsl(336, 22%, 50%);    /* #9c637a */</span>

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

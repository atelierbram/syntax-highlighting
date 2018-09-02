<?php
$title = 'Syntax highlighting; colorschemes for syntax highlighting';
$type = 'themepage';
$page = 'cave';
$description = 'Collection of colorschemes for Code Syntax highlighting';
include '../../inc/config.inc'; ?>
<!doctype html><html lang="en" class="no-js no-flexbox core wf-inactive">
  <head>
    <meta charset="utf-8">
    <title>Syntax Highlighting</title>
    <style><?php include '../../inc/critical-min-css.inc'; ?></style>
    <style><?php include '../../inc/cave-css.inc'; ?></style>
<?php include '../../inc/head.inc'; ?>
<script><?php include "../../inc/head-detect-js.inc"; ?></script>
<?php
include '../../inc/header.inc';
include '../../inc/nav.inc';
?>

<main class="container" id="main">
<article class="article article--demo">
           <h2>Atelier <small>colorscheme</small></h2>
          <h3 id="about-cave">Cave</h3>

           <p>
          Base color for Cave is violet, and although the colors are regularly spaced out, there is no real green in here, (<i>see also “Plateau”</i>) a “cool-warm” palette; not for the claustrophobic.
          </p>

          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1200 1200">
            <style type="text/css">
<![CDATA[
.base00-background                      {fill:hsl(265, 10%, 10%); }
.base01-background                      {fill:hsl(265, 9%, 15%); }
.base02-background                      {fill:hsl(265, 8%, 35%); }
.base03-background                      {fill:hsl(265, 7%, 40%); }
.base04-background                      {fill:hsl(265, 6%, 50%); }
.base05-background                      {fill:hsl(265, 5%, 55%); }
.base06-background                      {fill:hsl(265, 15%, 89%); }
.base07-background                      {fill:hsl(265, 25%, 94%); }
.base08-background, .red-background     {fill:hsl(335, 48%, 51%); }
.base09-background, .orange-background  {fill:hsl(15, 48%, 45%);  }
.base0A-background, .yellow-background  {fill:hsl(30, 46%, 43%);  }
.base0B-background, .green-background   {fill:hsl(180, 55%, 37%);  }
.base0C-background, .cyan-background    {fill:hsl(205, 55%, 50%); }
.base0D-background, .blue-background    {fill:hsl(230, 65%, 60%); }
.base0E-background, .violet-background  {fill:hsl(265, 75%, 63%); }
.base0F-background, .magenta-background {fill:hsl(300, 50%, 50%); }
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
$base00: <span class="sh-c-comm">hsl(265, 10%, 10%);  /* #19171c */</span>
$base01: <span class="base01-background sh-c-comm">hsl(265, 9%, 15%);   /* #26232a */</span>
$base02: <span class="base02-background sh-c-comm sh-c-dark">hsl(265, 8%, 35%);   /* #585260 */</span>
$base03: <span class="base03-background sh-c-comm sh-c-dark">hsl(265, 7%, 40%);   /* #655f6d */</span>
$base04: <span class="base04-background sh-c-comm sh-c-dark">hsl(265, 6%, 50%);   /* #7e7887 */</span>
$base05: <span class="base05-background sh-c-comm sh-c-dark">hsl(265, 5%, 55%);   /* #8b8792 */</span>
$base06: <span class="base06-background sh-c-comm sh-c-dark">hsl(265, 15%, 89%);  /* #e2dfe7 */</span>
$base07: <span class="base07-background sh-c-comm sh-c-dark">hsl(265, 25%, 94%);  /* #efecf4 */</span>
$base08: <span class="base08-background sh-c-comm sh-c-dark">hsl(335, 48%, 51%);  /* #be4678 */</span>
$base09: <span class="base09-background sh-c-comm sh-c-dark">hsl(15, 48%, 45%);   /* #aa573c */</span>
$base0a: <span class="base0A-background sh-c-comm sh-c-dark">hsl(30, 46%, 43%);   /* #a06e3b */</span>
$base0b: <span class="base0B-background sh-c-comm sh-c-dark">hsl(180, 55%, 37%);  /* #2a9292 */</span>
$base0c: <span class="base0C-background sh-c-comm sh-c-dark">hsl(205, 55%, 50%);  /* #398bc6 */</span>
$base0d: <span class="base0D-background sh-c-comm sh-c-dark">hsl(230, 65%, 60%);  /* #576ddb */</span>
$base0e: <span class="base0E-background sh-c-comm sh-c-dark">hsl(265, 75%, 63%);  /* #955ae7 */</span>
$base0f: <span class="base0F-background sh-c-comm sh-c-dark">hsl(300, 50%, 50%);  /* #bf40bf */</span>

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

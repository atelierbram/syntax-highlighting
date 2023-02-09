<?php
$title = 'Syntax highlighting; colorschemes for syntax highlighting';
$type = 'index';
$page = 'home';
$id = 'landingpage-index';
$description = 'Collection of colorschemes for Code Syntax highlighting';
include '../inc/config.inc'; ?>
<!doctype html><html lang="en" class="no-js no-flexbox core wf-inactive">
  <head>
    <meta charset="utf-8">
    <title>Syntax Highlighting</title>
    <style><?php include '../inc/critical-min-css.inc'; ?></style>
<?php include '../inc/head.inc'; ?>
<script><?php include "../inc/head-detect-js.inc"; ?></script>
<?php
include '../inc/header.inc';
include '../inc/nav.inc';
?>

<main class="container" id="main">
<article class="article article--demo">

<h3 id="base4tone"><a href="<?= $rootUrl; ?>base4tone/">Base4Tone</a><svg class="new-theme-svg" width="80" height="40"><use xlink:href="#NewTheme" /></svg></h3>
<p>Base4Tone is an opinionated system for working with variables in webdesign, and is also used to generate a collection of colorthemes for many different applications in dark - and light versions.</p>
   <pre style="background-color:#201d1e;" class="screenshot language-javascript"><code style="color:#de5745" class="language-javascript" data-language="javascript"><span class="token lf">
</span><span style="color:#fbbab1" class="token keyword">function</span> <span class="token function">foo<span style="color:#4b4447" class="token punctuation">(</span></span><span style="color:#f9f6f7">bar</span><span style="color:#4b4447" class="token punctuation">)</span> <span style="color:#4b4447" class="token punctuation">{</span><span class="token lf">
</span>    <span style="color:#fbbab1" class="token keyword">var</span> <span style="color:#f9f6f7">a</span> <span style="color:#22a50d" class="token operator">=</span> <span style="color:#fbbab1" class="token number">42</span><span style="color:#4b4447" class="token punctuation">,</span><span class="token lf">
</span>        <span style="color:#f9f6f7">b</span> <span style="color:#22a50d" class="token operator">=</span> <span style="color:#fbbab1" class="token string">'Prism'</span><span style="color:#4b4447" class="token punctuation">;</span><span class="token lf">
</span>    <span style="color:#fbbab1" class="token keyword">return</span> <span style="color:#f9f6f7">a</span> <span style="color:#22a50d" class="token operator">+</span> <span class="token function">bar<span style="color:#4b4447" class="token punctuation">(</span></span><span style="color:#f9f6f7">b</span><span style="color:#4b4447" class="token punctuation">)</span><span style="color:#4b4447" class="token punctuation">;</span><span class="token lf"></span>
<span style="color:#4b4447" class="token punctuation">}</span></code></pre>
 


  <h3 id="base2tone"><a href="<?= $rootUrl; ?>base2tone/">Base2Tone</a></h3>
  <p>Based on <a href="//simurai.com/projects/2016/01/01/duotone-themes/">DuoTone themes</a> by <a href="//simurai.com/">Simurai</a> for Atom.</p>

  <blockquote>“DuoTone themes use only 2 hues (7 shades in total). It <strong>tones down</strong> less important parts (like punctuation and brackets) and highlights only the <strong>important</strong> ones. This leads to a more calm color scheme, but still lets you find the stuff you’re looking for.”</blockquote>

<p>Base2Tone has it’s own <a href="//github.com/atelierbram/Base2Tone">dedicated repository</a>, and demopage on <a href="//base2t.one/">base2t.one</a>.</p>

    <pre style="background-color:#2a2734;" class="screenshot language-javascript"><code style="color:#b3a5fe" class="language-javascript" data-language="javascript"><span class="token lf">
</span><span style="color:#fc9" class="token keyword">function</span> <span class="token function">foo<span style="color:#726e87" class="token punctuation">(</span></span>bar<span style="color:#726e87" class="token punctuation">)</span> <span style="color:#726e87" class="token punctuation">{</span><span class="token lf">
</span>    <span style="color:#fc9" class="token keyword">var</span> a <span style="color:#e09142" class="token operator">=</span> <span style="color:#e09142" class="token number">42</span><span style="color:#726e87" class="token punctuation">,</span><span class="token lf">
</span>        b <span style="color:#e09142" class="token operator">=</span> <span style="color:#fc9" class="token string">'Prism'</span><span style="color:#726e87" class="token punctuation">;</span><span class="token lf">
</span>    <span style="color:#fc9" class="token keyword">return</span> a <span style="color:#e09142" class="token operator">+</span> <span class="token function">bar<span style="color:#726e87" class="token punctuation">(</span></span>b<span style="color:#726e87" class="token punctuation">)</span><span style="color:#726e87" class="token punctuation">;</span><span class="token lf"></span>
<span style="color:#726e87" class="token punctuation">}</span></code></pre>

    <h3 class="mtl"><a href="<?= $rootUrl; ?>atelier-schemes/">Atelier Schemes</a></h3>

    <ul>
      <li><a href="//atelierbram.github.io/syntax-highlighting/atelier-schemes">index - demopages</a></li>
      <li><a href="//github.com/atelierbram/syntax-highlighting/tree/master/atelier-schemes/output">Downloads</a></li>
    </ul>
    <figure class="mtm mbl">
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1200 300">
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

      <figcaption class="fig-cap">
      <pre>Atelier Schemes, demotiles for Dune,
 syntax highlighting colorscheme</pre>
      </figcaption>
    </figure>

    <figure class="sh-fig sh-screenshot mtm mbl">
      <img src="//atelierbram.github.io/syntax-highlighting/assets/img/sulphurpool-dark_vim_640x425.png" alt="screenshot of Sulphurpool colorscheme - dark version - in Vim" class="img-block" />
      <figcaption class="fig-cap">
      <pre>Screenshot Sulphurpool &#8211; dark version &#8211; in Vim</pre>
      </figcaption>
    </figure>


    <h3 class="mtl"><a href="<?= $rootUrl; ?>prism/">Prism</a></h3>

    <p>Colorschemes for Prism: <a href="//atelierbram.github.io/syntax-highlighting/prism"> demopage</a></p>

<!--     <figure class="sh-fig sh-screenshot mtm mbl"> -->
<!--       <img src="https://lh6.googleusercontent.com/-27KX3QAEzAc/Ug9O3QH1t2I/AAAAAAAAAlw/tdEU6foUIXM/s800/prism-styleswitcher_screenshot_546x364.png" alt="screenshot of styleswitcher for Prism themes" class="img-block"> -->
<!--       <figcaption class="fig-cap"> -->
<!--       <pre>screenshot of styleswitcher for Prism themes</pre> -->
<!--       </figcaption> -->
<!--     </figure> -->

    <h3 class="mtl">Colorscheme Lab</h3>
    <ul>
      <li><a href="//codepen.io/atelierbram/pen/JnbIt">Colorscheme Lab on CodePen</a>
        <p data-height="600" data-theme-id="71" data-slug-hash="JnbIt" data-user="atelierbram" data-default-tab="result" class='codepen'>See the Pen <a href='//codepen.io/atelierbram/pen/JnbIt'>Colorscheme Lab – with Sass Variables</a> by Bram de Haan (<a href='//codepen.io/atelierbram'>@atelierbram</a>) on <a href='//codepen.io'>CodePen</a></p><script async src="//codepen.io/assets/embed/ei.js"></script>
      </li>
      <li><a href="//gist.github.com/atelierbram/6283373">Colorscheme Lab as Github Gist</a></li>
      <li><a href="//devthemez.com">More Themes for Web Developer's Toys</a></li>
    </ul>

</article>

</main><!-- /.container-flex #main -->
<?php include '../inc/footer.inc'; ?>

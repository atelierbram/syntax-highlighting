<?php
$title = 'Syntax highlighting; Base4Tone duotone colorschemes for syntax highlighting';
$type = 'landingpage';
$page = 'base4tone';
// $theme = 'Base2Tone-Drawbridge';
// $themeId = 'base2tone-drawbridge-index';
$id = 'landingpage-base4tone';
$description = 'Collection colorschemes for code syntax highlighting';
include '../inc/config.inc';
include '../inc/head.inc';
include '../inc/header.inc';
include '../inc/nav.inc';
?>

<main class="container" id="main">
<article>

<header class="tc"><h2 class="visuallyhidden"><a href="<?= $rootUrl; ?>/base4tone/">Base4Tone</a></h2>
<?php include '../inc/base4tone-header_912x180_svg.inc'; ?>
</header>

<p class="mtl">Base4Tone is an opinionated system for working with variables in webdesign, and is also used to generate a collection of colorthemes for many different applications in dark - and light versions. Applications like:</p>
<li><a href="https://github.com/atelierbram/Base4Tone-iterm2/">iTerm2</a></li>
<li><a href="https://github.com/atelierbram/Base4Tone-hyper/">Hyper</a></li>
<li><a href="https://github.com/atelierbram/Base4Tone-alacritty/">Alacritty</a></li>
<li><a href="https://github.com/atelierbram/Base4Tone-vim/">Vim</a></li>
<li><a href="https://github.com/atelierbram/Base4Tone-VSCode-Themes">VSCode</a></li>
<li><a href="https://github.com/atelierbram/Base4Tone-prism/">Prism</a></li>

<p>Please go to <a href="https://atelierbram.github.io/Base4Tone-prism/b4t_classic-a/dark/">the live demo for Prism</a> to see the themes in action!</p>

<figure><img src="https://atelierbram.github.io/Base4Tone-vim/img/Base4Tone_Modern_W_Dark.png" alt="screenshot of Base4Tone_Modern_W_Dark in Vim" /><figcaption><pre>screenshot of Base4Tone_Modern_W_Dark in Vim</pre></figcaption></figure>

</article>

</main><!-- /.container-flex #main -->
<?php include '../inc/footer.inc'; ?>

<?php
$title = 'Syntax highlighting; Base2Tone duotone colorschemes for syntax highlighting';
$type = 'landingpage';
$page = 'base2tone';
// $theme = 'Base2Tone-Drawbridge';
// $themeId = 'base2tone-drawbridge-index';
$id = 'landingpage-base2tone';
$description = 'Collection of duotone colorschemes for code syntax highlighting';
include '../inc/config.inc';
include '../inc/head.inc';
include '../inc/header.inc';
include '../inc/nav.inc';
?>

<main class="container" id="main">
<article>
<h2 class="visuallyhidden"><a href="base2tone/">Base2Tone</a></h2>

<?php include '../inc/base2tone-logo-infini_896x176_svg.inc'; ?>

  <p>Based on <a href="http://simurai.com/projects/2016/01/01/duotone-themes/">DuoTone themes</a> by <a href="http://simurai.com/">Simurai</a> for Atom.</p>

  <blockquote>“DuoTone themes use only 2 hues (7 shades in total). It <strong>tones down</strong> less important parts (like punctuation and brackets) and highlights only the <strong>important</strong> ones. This leads to a more calm color scheme, but still lets you find the stuff you’re looking for.”</blockquote>

<p>Base2Tone has it’s own <a href="//github.com/atelierbram/Base2Tone">dedicated repository</a>, and demopage on <a href="http://base2t.one/">http://base2t.one</a> where one can find links to dedicated repositories for generating syntax-highlighting themes for specific applications, like VS Code, Vim, iTerm2, HyperTerm and Prism.</p>

</article>

</main><!-- /.container-flex #main -->
<?php include '../inc/footer.inc'; ?>

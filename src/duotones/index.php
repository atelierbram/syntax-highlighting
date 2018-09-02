<?php
$title = 'Syntax highlighting; colorschemes for syntax highlighting';
$type = 'landingpage';
$page = 'duotones';
// $theme = 'Base2Tone-Drawbridge';
// $themeId = 'base2tone-drawbridge-index';
// $id = 'base2tone-drawbridge-dark';
$description = 'Collection of colorschemes for Code Syntax highlighting';
include '../inc/config.inc';
include '../inc/head.inc';
include '../inc/header.inc';
include '../inc/nav.inc';
?>

<main class="container" id="main">
<article class="article">
  <p><span class="note note-warning"><?php echo $warningUnmaintained ?></span><br class="clear" /><a href="<?php echo $rootUrl ?>archive/duotones">Link to archived page</a>.</p>
  <p>But the concept has been renamed to <a href="http://atelierbram.github.io/syntax-highlighting/base2tone">Base2Tone</a> and has <a href="https://github.com/atelierbram/Base2Tone">it’s own dedicated repository</a> and <a href="http://base2t.one/">demos</a>.</p>
</article>
</main><!-- /.container-flex #main -->
<?php include '../inc/footer.inc'; ?>

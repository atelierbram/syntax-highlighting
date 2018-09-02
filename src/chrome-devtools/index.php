<?php
$title = 'Syntax highlighting; colorschemes for syntax highlighting';
$type = 'landingpage';
$page = 'chrome-devtools';
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
  <p><span class="note note-warning"><?php echo $warningUnmaintained ?></span></p>
  <p>Please use an extension like <a href="https://github.com/micjamking/devtools-author">DevTools Author</a></p>
  <p>Link to <a href="<?php echo $rootUrl ?>archive/chrome-devtools">archived page</a>.</p>
</article>
</main><!-- /.container-flex #main -->
<?php include '../inc/footer.inc'; ?>

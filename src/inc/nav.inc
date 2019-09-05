<?php ?>
<nav class="nav nav-site container">
  <ul class="nav_list nav-site_list">
    <!-- legacy: archived <li><a href="chrome-devtools">Chrome Devtools</a></li> -->
    <!-- legacy: archived <li><a href="lab">Lab</a></li> -->
    <li class='<?php if ($page=="home") echo "current"; ?>'><a href="<?php echo $rootUrl ?>">Home</a></li>
    <!-- legacy: archived <li><a href="duotones">Duotones</a></li> -->
    <li class='<?php if ($page=="atelier-schemes") echo "current"; ?>'><a href="<?php echo $rootUrl ?>atelier-schemes/">Atelier Schemes</a></li>
    <li class='<?php if ($page=="base2tone") echo "current"; ?>'><a href="<?php echo $rootUrl ?>base2tone">Base2Tone</a></li>
    <li class='<?php if ($page=="base4tone") echo "current"; ?>'><a href="<?php echo $rootUrl ?>base4tone">Base4Tone</a></li>
    <li class='<?php if ($page=="prism") echo "current"; ?>'><a href="<?php echo $rootUrl ?>prism">Prism</a></li>
  </ul>
</nav>
<?php ?>


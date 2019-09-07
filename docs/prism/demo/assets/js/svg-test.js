function supportsSVG() {
  "use strict";
  return !! document.createElementNS && !! document.createElementNS('http://www.w3.org/2000/svg','svg').createSVGRect;
}
if (supportsSVG()) {
  document.documentElement.className += ' svg';
  var themesLogo = document.getElementById("themesLogo");
}
else {
  document.documentElement.className += ' no-svg';
  themesLogo.setAttribute("style","background: url(assets/img/logo-prism-themes_356x227.png) 0 0 no-repeat;width:356px;height:227px");
}
supportsSVG();

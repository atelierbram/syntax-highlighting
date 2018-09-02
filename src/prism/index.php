<?php
$title = 'Syntax highlighting; colorschemes for Prism syntax highlighter';
$type = 'landingpage';
$page = 'prism';
// $theme = 'Base2Tone-Drawbridge';
// $themeId = 'base2tone-drawbridge-index';
// $id = 'base2tone-drawbridge-dark';
$description = 'Collection of colorschemes for Prism syntax highlighter';
include '../inc/config.inc';
include '../inc/head.inc';
include '../inc/header.inc';
include '../inc/nav.inc';
?>

<main class="container" id="main">
  <article class="article article--demo">
    <h2 class="project-title" id="about-prism">Prism <small>colorschemes</small></h2>
    <p><a href="//prismjs.com/">Prism</a> is a lightweight, robust, elegant syntax highlighting library. It is written in javascript, and the colorschemes are CSS stylesheets; so highly customisable.</p>
    <p><span class="note">Go to <a href="demo">Demopage</a></span></p>

    <p>Prism comes with eight colorschemes:</p>
    <ol>
      <li><a href="https://github.com/PrismJS/prism/blob/master/themes/prism.css">Default Light</a></li>
      <li><a href="https://github.com/PrismJS/prism/blob/master/themes/prism-dark.css">Dark</a></li>
      <li><a href="https://github.com/PrismJS/prism/blob/master/themes/prism-funky.css">Funky</a></li>
      <li><a href="https://github.com/PrismJS/prism/blob/master/themes/prism-okaidia.css">Okaidia</a></li>
      <li><a href="https://github.com/PrismJS/prism/blob/master/themes/prism-twilight.css">Twilight</a></li>
      <li><a href="https://github.com/PrismJS/prism/blob/master/themes/prism-coy.css">Coy</a></li>
      <li><a href="https://github.com/PrismJS/prism/blob/master/themes/prism-solarizedlight.css">Solarized Light</a></li>
      <li><a href="https://github.com/PrismJS/prism/blob/master/themes/prism-tomorrow.css">Tomorrow Night</a></li>
    </ol>

    <p> One can <a href="https://github.com/PrismJS/prism">download those directly from Github.</a></p>
    <p>An additional selection of themes are at the <a href="https://github.com/PrismJS/prism-themes">Prism themes</a> repo.</p>

    <!-- /.row prism syntax highlight examples -->



    <h3 id="customising">Customising</h3>

    <p>Except for the themes mentioned above on the Prism repos, this repo contains more colorschemes, collected (<i>stolen</i>) from elsewhere and further adapted (<i>tweaked</i>).</p>
    <p>When possible, backlinks to their origin, and information about their creators are included.</p>

    <ol>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-xonokai.css">Xonokai</a>,
        original scheme by <a href="//moox.fr/">Maxime Thirouin</a>,
        <a href="//github.com/MoOx/sass-prism-theme-base">colorscheme on Github </a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-cbavota.css">CB</a>,
        original scheme by <a href="//cbavota.bitbucket.org/syntax-highlighter/">C. Bavota</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-pojoaque.css">Pojoaque</a>,
        original scheme by <a href="//web-cms-designs.com/ftopict-10-pojoaque-style-for-highlight-js-code-highlighter.html">Jason Tate</a></li>
    </ol>

    <h3 id="base16-schemes">Base16 Schemes</h3>
    <p>Colorschemes produced, and if not tributed to someone else, also made by <a href="//chriskempson.com">Chris Kempson</a> with <a href="//github.com/chriskempson/base16-builder">base16 builder</a>.
    </p>

    <ol>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-3024.dark.css">Base16-3024</a>, original scheme by <a href="//github.com/idleberg">Jan T. Sott</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-apathy.dark.css">Base16-Apathy</a>, original scheme by <a href="//github.com/janniks">Jannik Siebert</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-ashes.dark.css">Base16-Ashes</a>, original scheme by <a href="//github.com/janniks">Jannik Siebert</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-bespin.dark.css">Base16-Bespin</a>, original scheme by <a href="//github.com/idleberg">Jan T. Sott</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-brewer.dark.css">Base16-Brewer</a>, original scheme by <a href="//github.com/tpoisot">Timoth&#233;e Poisot</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-bright.dark.css">Base16-Bright</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-chalk.dark.css">Base16-Chalk</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-colors.dark.css">Base16-Colors</a>, original scheme by <a href="//clrs.cc">Adam Morse</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-default.dark.css">Base16-Default</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-eighties.dark.css">Base16-Eighties</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-embers.dark.css">Base16-Embers</a>, original scheme by <a href="//github.com/janniks">Jannik Siebert</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-flat.dark.css">Base16-Flat</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-google.light.css">Base16-Google</a>, original scheme by <a href="//sethawright.com/">Seth Wright</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-grayscale.dark.css">Base16-Grayscale</a>, original scheme by <a href="//github.com/Alexx2">Alexandre Gavioli</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-greenscreen.dark.css">Base16-Greenscreen</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-harmonic16.dark.css">Base16-Harmonic16</a>, original scheme by <a href="//github.com/janniks">Jannik Siebert</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-hopscotch.dark.css">Base16-Hopscotch</a>, original scheme by <a href="//github.com/idleberg">Jan T. Sott</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-isotope.dark.css">Base16-Isotope</a>, original scheme by <a href="//github.com/idleberg">Jan T. Sott</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-marrakesh.dark.css">Base16-Marrakesh</a>, original scheme by <a href="//github.com/Alexx2">Alexandre Gavioli</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-mocha.dark.css">Base16-Mocha</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-monokai.dark.css">Base16-Monokai</a>, original scheme by <a href="//www.monokai.nl">Wimer Hazenberg</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-ocean.dark.css">Base16-Ocean</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-paraiso.dark.css">Base16-Paraiso</a>, original scheme by <a href="//github.com/idleberg">Jan T. Sott</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-pop.dark.css">Base16-Pop</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-railscasts.dark.css">Base16-Railscasts</a>, original scheme by <a href="//railscasts.com">Ryan Bates</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-shapeshifter.dark.css">Base16-Shapeshifter</a>, original scheme by <a href="//github.com/idleberg">Tyler Benziger</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-solarized.dark.css">Base16-Solarized-dark</a>, original scheme by <a href="//ethanschoonover.com/solarized">Ethan Schoonover</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-solarized.light.css">Base16-Solarized-light</a>, original scheme by <a href="//ethanschoonover.com/solarized">Ethan Schoonover</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-summerfruit.dark.css">Base16-Summerfruit</a>, original scheme by <a href="//christop.club/">Christopher Corley</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-tomorrow.dark.css">Base16-Tomorrow</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-londontube.dark.css">Base16-London-Tube</a>, original scheme by <a href="//github.com/idleberg">Jan T. Sott</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-twilight.dark.css">Base16-Twilight</a>, original scheme by <a href="//hart-dev.com/">David Hart</a></li>
    </ol>

    <h3 id="atelier-schemes">Atelier Schemes</h3>
    <p>And then some more, made by <a href="//atelierbramdehaan.nl">me, Bram de Haan</a> with <a href="//github.com/chriskempson/base16-builder">base16 builder</a>. You can find them in the <a href="//github.com/atelierbram/syntax-highlighting/tree/master/atelier-schemes/output/prism">prism folder, within the output folder of Atelier schemes</a>.</p>

    <ol>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-atelierforest.light.css">Forest Light</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-atelierforest.dark.css">Forest Dark</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-atelierplateau.light.css">Plateau Light</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-atelierplateau.dark.css">Plateau Dark</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-atelierheath.light.css">Heath Light</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-atelierheath.dark.css">Heath Dark</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-ateliercave.light.css">Cave Light</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-ateliercave.dark.css">Cave Dark</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-ateliersulphurpool.light.css">Sulphurpool Light</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-ateliersulphurpool.dark.css">Sulphurpool Dark</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-atelierlakeside.light.css">Lakeside Light</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-atelierlakeside.dark.css">lakeside Dark</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-ateliersavanna.light.css">Savanna Light</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-ateliersavanna.dark.css">Savanna Dark</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-atelierseaside.light.css">Seaside Light</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-atelierseaside.dark.css">Seaside Dark</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-atelierestuary.light.css">Estuary Light</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-atelierestuary.dark.css">Estuary Dark</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-atelierdune.light.css">Dune Light</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism/demo/assets/css/prism-base16-atelierdune.dark.css">Dune Dark</a></li>
    </ol>

    <h3 id="duotone-schemes">Duotone Schemes</h3>
<p>Duotone themes can be found in a dedicated repo: <a href="https://github.com/atelierbram/Base2Tone-prism/">Base2Tone Prism</a>, which comes with a <a href="http://atelierbram.github.io/Base2Tone-prism/demo/evening/dark/">demo for Prism</a> as well.</p>
    <p></p>

    <h3 id="#lab" class="mtm">Lab</h3>
    <ul>
      <li><a href="//codepen.io/atelierbram/pen/JnbIt">Colorscheme Lab on CodePen</a></li>
      <li><a href="//gist.github.com/atelierbram/6283373">Colorscheme Lab as Github Gist</a></li>
    </ul>


    <h3 id="external-links">External Links</h3>
    <ul>
      <li><a href="//prismjs.com/">Prism Project site</a></li>
      <li><a href="//prismjs.com/download.html">Download Prism</a></li>
      <li><a href="//github.com/prismjs/prism-themes/">Official repo for Prism themes</a></li>
      <li><a href="//github.com/PrismJS/prism">Prism at Github</a></li>
      <li><a href="//twitter.com/prismjs">Prism on Twitter</a></li>
      <li><a href="//lea.verou.me/">Lea Verou &#8211; personal website and blog<!--<i>(if anything, hover over the RSS-icon, right in the top navigation bar &hellip;, be amazed, and then subscribe to the feed &hellip;) </i>--></a></li>
      <li><a href="//chriskempson.com/projects/base16/">Base16 Colorschemes Preview</a></li>
      <li><a href="//github.com/chriskempson/base16">Base16 on Github</a></li>
    </ul>

    <p><a href="#header" class="go-to-top sh-button"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
        <g id="outline-black">
        <path opacity="0.5" d="M25,3L3,34l12-1v13h20V33l12,1L25,3z"/>
        </g>
        <g id="inner-white">
        <polygon fill="#FFFFFF" points="42,31 25,7 8,31 18,30 18,44 32,44 32,30 	"/>
        </g>
      </svg>
      <span class="visuallyhidden">Go to Top</span></a>
    </p>

  </article>

</main><!-- /.container-flex #main -->
<?php include '../inc/footer.inc'; ?>

---
extends: _layouts.main
page_title: Custom colorschemes for Prism syntax highlighter
page_description: Collection of colorschemes for Prism syntax highlighter
page_type: landingpage
page_id: prism
slug: prism
---

@section('body')
<h2 class="project-title" id="about-prism">Prism colorschemes</h2>
<p><a href="//prismjs.com/">Prism</a> is a lightweight, robust, elegant syntax highlighting library. It is written in javascript, and the colorschemes are CSS stylesheets; so highly customisable.</p>

<h3>Go to the demo page for:</h3>
<ul class="list-inline">
  <li><a href="{{ $page->baseUrl }}demo/prism/" class="button">Atelier Schemes</a></li>
  <li><a href="//atelierbram.github.io/Base2Tone-prism/evening/dark/" class="button">Base2Tone</a></li>
  <li><a href="//atelierbram.github.io/Base4Tone-prism/b4t_classic-a/dark/" class="button">Base4Tone</a></li>
</ul>

<h3 id="atelier-schemes">Atelier Schemes</h3>
<p>Some colorschemes from a a collection named <a href="//atelierbram.github.io/syntax-highlighting/atelier-schemes/">Atelier Schemes</a> can be found <a href="//github.com/atelierbram/syntax-highlighting/tree/master/docs/assets/css/prism/schemes/">here in this repository</a>.</p>

<details><summary>Atelier Schemes for Prism (CSS files - direct links):</summary>
<ol>
  <li><a href="//atelierbram.github.io/syntax-highlighting/assets/css/prism/schemes/prism-atelier-forest-light.css">Forest Light</a></li>
  <li><a href="//atelierbram.github.io/syntax-highlighting/assets/css/prism/schemes/prism-atelier-forest-dark.css">Forest Dark</a></li>
  <li><a href="//atelierbram.github.io/syntax-highlighting/assets/css/prism/schemes/prism-atelier-plateau-light.css">Plateau Light</a></li>
  <li><a href="//atelierbram.github.io/syntax-highlighting/assets/css/prism/schemes/prism-atelier-plateau-dark.css">Plateau Dark</a></li>
  <li><a href="//atelierbram.github.io/syntax-highlighting/assets/css/prism/schemes/prism-atelier-heath-light.css">Heath Light</a></li>
  <li><a href="//atelierbram.github.io/syntax-highlighting/assets/css/prism/schemes/prism-atelier-heath-dark.css">Heath Dark</a></li>
  <li><a href="//atelierbram.github.io/syntax-highlighting/assets/css/prism/schemes/prism-atelier-cave-light.css">Cave Light</a></li>
  <li><a href="//atelierbram.github.io/syntax-highlighting/assets/css/prism/schemes/prism-atelier-cave-dark.css">Cave Dark</a></li>
  <li><a href="//atelierbram.github.io/syntax-highlighting/assets/css/prism/schemes/prism-atelier-sulphurpool-light.css">Sulphurpool Light</a></li>
  <li><a href="//atelierbram.github.io/syntax-highlighting/assets/css/prism/schemes/prism-atelier-sulphurpool-dark.css">Sulphurpool Dark</a></li>
  <li><a href="//atelierbram.github.io/syntax-highlighting/assets/css/prism/schemes/prism-atelier-lakeside-light.css">Lakeside Light</a></li>
  <li><a href="//atelierbram.github.io/syntax-highlighting/assets/css/prism/schemes/prism-atelier-lakeside-dark.css">lakeside Dark</a></li>
  <li><a href="//atelierbram.github.io/syntax-highlighting/assets/css/prism/schemes/prism-atelier-savanna-light.css">Savanna Light</a></li>
  <li><a href="//atelierbram.github.io/syntax-highlighting/assets/css/prism/schemes/prism-atelier-savanna-dark.css">Savanna Dark</a></li>
  <li><a href="//atelierbram.github.io/syntax-highlighting/assets/css/prism/schemes/prism-atelier-seaside-light.css">Seaside Light</a></li>
  <li><a href="//atelierbram.github.io/syntax-highlighting/assets/css/prism/schemes/prism-atelier-seaside-dark.css">Seaside Dark</a></li>
  <li><a href="//atelierbram.github.io/syntax-highlighting/assets/css/prism/schemes/prism-atelier-estuary-light.css">Estuary Light</a></li>
  <li><a href="//atelierbram.github.io/syntax-highlighting/assets/css/prism/schemes/prism-atelier-estuary-dark.css">Estuary Dark</a></li>
  <li><a href="//atelierbram.github.io/syntax-highlighting/assets/css/prism/schemes/prism-atelier-dune-light.css">Dune Light</a></li>
  <li><a href="//atelierbram.github.io/syntax-highlighting/assets/css/prism/schemes/prism-atelier-dune-dark.css">Dune Dark</a></li>
</ol>
</details>

<details><summary>Prism comes with eight colorschemes (CSS files - direct links):</summary>
<ol>
  <li><a href="https://prismjs.com/themes/prism.css">Default Light</a></li>
  <li><a href="https://prismjs.com/themes/prism-dark.css">Dark</a></li>
  <li><a href="https://prismjs.com/themes/prism-funky.css">Funky</a></li>
  <li><a href="https://prismjs.com/themes/prism-okaidia.css">Okaidia</a></li>
  <li><a href="https://prismjs.com/themes/prism-twilight.css">Twilight</a></li>
  <li><a href="https://prismjs.com/themes/prism-coy.css">Coy</a></li>
  <li><a href="https://prismjs.com/themes/prism-solarizedlight.css">Solarized Light</a></li>
  <li><a href="https://prismjs.com/themes/prism-tomorrow.css">Tomorrow Night</a></li>
</ol>
</details>

<p> One can <a href="https://github.com/PrismJS/prism/tree/master/themes/">download those directly from Github.</a><br>
An additional selection of custom themes are at the <a href="https://github.com/PrismJS/prism-themes">Prism themes</a> repo.</p>

<h3 id="customising">Customising</h3>
<p>Except for the themes mentioned above on the Prism repos, this repo contains more colorschemes, collected (<i>stolen</i>) from elsewhere and further adapted (<i>tweaked</i>).</br>
When possible, backlinks to their origin, and information about their creators are included.</p>

<ol>
  <li><a href="//github.com/atelierbram/syntax-highlighting/blob/archive/docs/prism/demo/assets/css/prism-xonokai.css">Xonokai</a>,
    original scheme by <a href="//moox.fr/">Maxime Thirouin</a>,
    <a href="//github.com/MoOx/sass-prism-theme-base">colorscheme on Github </a></li>
  <li><a href="//github.com/atelierbram/syntax-highlighting/blob/archive/docs/prism/demo/assets/css/prism-cb.css">CB</a>, original scheme by <a href="//bavotasan.com/tag/syntax-highlighter/">C. Bavota</a></li>
  <li><a href="//github.com/atelierbram/syntax-highlighting/blob/archive/docs/prism/demo/assets/css/prism-pojoaque.css">Pojoaque</a>,
    original scheme by <a href="//web-cms-designs.com/ftopict-10-pojoaque-style-for-highlight-js-code-highlighter.html">Jason Tate</a></li>
</ol>

<h3 id="base16-schemes">Base16 Schemes</h3>
<p>Colorschemes produced, and if not tributed to someone else, also made by <a href="//chriskempson.com">Chris Kempson</a> with <a href="//github.com/chriskempson/base16-builder">base16 builder</a>. Download them <a href="//github.com/atelierbram/syntax-highlighting/tree/archive/docs/prism/demo/assets/css/themes">from here</a>.
</p>

<h3 id="duotone-schemes">Base2Tone - Duotone Color Schemes</h3>
<p>Duotone themes can be found in a dedicated repo: <a href="//github.com/atelierbram/Base2Tone-prism/">Base2Tone Prism</a>, which comes with a <a href="//atelierbram.github.io/Base2Tone-prism/evening/dark/">demo for Prism</a> as well.</p>

<h3 id="minimal-schemes">Base4Tone - Minimal Color Schemes</h3>
<p>Other themes with a limited color palette can be found in another dedicated repo: <a href="//github.com/atelierbram/Base4Tone-prism/">Base4Tone Prism</a>, which also comes with a <a href="//atelierbram.github.io/Base4Tone-prism/b4t_classic-a/dark/">demo for Prism</a>.</p>

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
  <li><a href="//lea.verou.me/">Lea Verou &#8211; creator of Prism &#8211; personal website and blog</a></li>
</ul>

@endsection

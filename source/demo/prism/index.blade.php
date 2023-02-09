<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Demos for Prism highlighting themes - Atelier Schemes by Atelierbram"/>
    <title>Demos for Atelier Schemes with Prism syntax highlighting</title>
    <style id="fontfaceMonochrome">@include('_partials.fontface-monospace-css')</style>
    @if ($page->server === "local")
      <style id="fontfaceLocalCss">@include('_partials.fontface-local-css')</style>
      <link rel="stylesheet" href="{{ $page->localAssetPath }}{{ ('css/prism/demo.css') }}">
      <link rel="stylesheet" href="{{ $page->localAssetPath }}{{ ('css/prism/schemes/prism-atelier-sulphurpool-dark.css') }}" id="styleLink">
      <link rel="icon" href="http://localhost/favicon.ico">
    @else
      <style id="fontfaceRemoteCss">@include('_partials.fontface-remote-css')</style>
      <link rel="stylesheet" href="{{ $page->baseUrl }}{{ ('assets/css/prism/demo.min.css') }}">
      <link rel="stylesheet" href="{{ $page->baseUrl }}{{ ('assets/css/prism/schemes/prism-atelier-sulphurpool-dark.css') }}" id="styleLink">>
      <link rel="icon" href="/favicon.ico">
    @endif
<script>if ( 'querySelector' in document && 'addEventListener' in window && Array.prototype.forEach ) { document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/g, '') + ' js '; }</script>
  </head>
  <body>
  <header>
    <div class="masthead col pad-h">
      <h1>Prism</h1>
      <p>themes</p>
    </div>

    <div class="col pad-h">
      <label for="styleSwitcher">Choose a theme:&nbsp;</label>
      <div class="button styleswitcher">
        <select id="styleSwitcher">
          <option value="prism-atelier-cave-dark">Atelier Cave-dark</option>
          <option value="prism-atelier-cave-light">Atelier Cave-light</option>
          <option value="prism-atelier-dune-dark">Atelier Dune-dark</option>
          <option value="prism-atelier-dune-light">Atelier Dune-light</option>
          <option value="prism-atelier-estuary-dark">Atelier Estuary-dark</option>
          <option value="prism-atelier-estuary-light">Atelier Estuary-light</option>
          <option value="prism-atelier-forest-dark">Atelier Forest-dark</option>
          <option value="prism-atelier-forest-light">Atelier Forest-light</option>
          <option value="prism-atelier-heath-dark">Atelier Heath-dark</option>
          <option value="prism-atelier-heath-light">Atelier Heath-light</option>
          <option value="prism-atelier-plateau-dark">Atelier Plateau-dark</option>
          <option value="prism-atelier-plateau-light">Atelier Plateau-light</option>
          <option value="prism-atelier-savanna-dark">Atelier Savanna-dark</option>
          <option value="prism-atelier-savanna-light">Atelier Savanna-light</option>
          <option value="prism-atelier-lakeside-dark">Atelier Lakeside-dark</option>
          <option value="prism-atelier-lakeside-light">Atelier Lakeside-light</option>
          <option value="prism-atelier-seaside-dark">Atelier Seaside-dark</option>
          <option value="prism-atelier-seaside-light">Atelier Seaside-light</option>
          <option value="prism-atelier-sulphurpool-dark">Atelier Sulphurpool-dark</option>
          <option value="prism-atelier-sulphurpool-light">Atelier Sulphurpool-light</option>
        </select>
      </div>
    </div>
  </header>

  <main>
  <div class="col">
    <h2>HTML</h2>
    <pre class="language-markup line-numbers"><code>&lt;!doctype html&gt;
&lt;html class=&quot;no-js&quot; lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;meta http-equiv=&quot;x-ua-compatible&quot; content=&quot;ie=edge&quot;&gt;
        &lt;title&gt;Demo&lt;/title&gt;
        &lt;meta name=&quot;description&quot; content=&quot;Demo&quot;&gt;
        &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;

        &lt;link rel=&quot;apple-touch-icon&quot; href=&quot;apple-touch-icon.png&quot;&gt;
        &lt;!-- Place favicon.ico in the root directory --&gt;

        &lt;link rel=&quot;stylesheet&quot; href=&quot;/normalize.css"&gt;
        &lt;link rel=&quot;stylesheet&quot; href=&quot;/main.css"&gt;</code></pre>
  </div>
  <div class="col">
    <h2>CSS</h2>
    <pre class="language-css line-numbers"><code>h1 {
  font-size: 2em;
  margin: 0.67em 0;
}
mark {
  background: #ff0;
  color: #000;
}
small {
  font-size: 80% !important;
}</code></pre>
  </div>

  <div class="col">
    <h2>Sass <small>scss</small></h2>
    <pre class="language-scss line-numbers"><code>.visuallyhidden {
// Hide only visually, but have it available for screen readers:
// http://snook.ca/archives/html_and_css/hiding-content-for-accessibility
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
}

.inner-wrap {
  max-width: 50em;
  margin: 0 auto;
  padding-left: emCalc(24);
  padding-right: emCalc(24);
}

@media only screen and (min-width: 550px) {
  article {
    ul {
      list-style: circle;
    }
    ol {
      list-style: decimal;
    }
  }
  .inner-wrap {
    padding-left: emCalc(48);
    padding-right: emCalc(48);
  }
}</code></pre>
  </div>

  <div class="col">
    <h2>Javascript</h2>
    <pre class="language-javascript line-numbers"><code>/*! loadJS: load a JS file asynchronously. [c]2014 @scottjehl, Filament Group, Inc. (Based on http://goo.gl/REQGQ by Paul Irish). Licensed MIT */
(function( w ){
  var loadJS = function( src, cb ){
    "use strict";
    var ref = w.document.getElementsByTagName( "script" )[ 0 ];
    var script = w.document.createElement( "script" );
    script.src = src;
    script.async = true;
    ref.parentNode.insertBefore( script, ref );
    if (cb &amp;&amp; typeof(cb) === "function") {
      script.onload = cb;
    }
    return script;
  };
  // commonjs
  if( typeof module !== "undefined" ){
    module.exports = loadJS;
  }
  else {
    w.loadJS = loadJS;
  }
}( typeof global !== "undefined" ? global : this )); }</code></pre></div>

  <div class="col">
    <h2>&nbsp;</h2>
    <pre class="language-javascript line-numbers">
<code>
function foo(bar) {
    var a = 42,
        b = &#39;Prism&#39;;
    return a + bar(b);
}</code></pre></div>

  <div class="col">
    <h2>PHP</h2>
    <pre class="language-php line-numbers">
<code>&lt;?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

  /**
   * Get a validator for an incoming registration request.
   *
   * @param  array  $data
   * @return \Illuminate\Contracts\Validation\Validator
   */
public function validator(array $data)</code></pre></div>

   <div class="col">
    <h2>Ruby</h2>
    <pre class="language-ruby line-numbers">
<code>##
# Array ISO Test

assert(&#39;Array&#39;, &#39;15.2.12&#39;) do
  assert_equal(Class, Array.class)
end

assert(&#39;Array inclueded modules&#39;, &#39;15.2.12.3&#39;) do
  assert_true(Array.include?(Enumerable))
end

assert(&#39;Array.[]&#39;, &#39;15.2.12.4.1&#39;) do
  assert_equal([1, 2, 3], Array.[](1,2,3))
end</code></pre></div>

    <div class="col">
    <h2>Python</h2>
    <pre class="language-python line-numbers">
<code>class _BaseHTMLProcessor(sgmllib.SGMLParser):
    elements_no_end_tag = [&#39;area&#39;, &#39;base&#39;, &#39;basefont&#39;, &#39;br&#39;, &#39;col&#39;, &#39;frame&#39;, &#39;hr&#39;,
      &#39;img&#39;, &#39;input&#39;, &#39;isindex&#39;, &#39;link&#39;, &#39;meta&#39;, &#39;param&#39;]

    _r_barebang = re.compile(r&#39;&lt;!((?!DOCTYPE|--|\[))&#39;, re.IGNORECASE)
    _r_bareamp = re.compile(&quot;&amp;(?!#\d ;|#x[0-9a-fA-F] ;|\w ;)&quot;)
    _r_shorttag = re.compile(r&#39;&lt;([^&lt;\s] ?)\s*/&gt;&#39;)

    def __init__(self, encoding):
        self.encoding = encoding
        if _debug: sys.stderr.write(&#39;entering BaseHTMLProcessor, encoding=%s\n&#39; % self.encoding)
        sgmllib.SGMLParser.__init__(self)</code></pre></div>

  </main>
  <footer>
    <small><a href="http://github.com/prismjs/prism-themes">Prism themes repo on Github</a></small>
  </footer>

  @if ($page->server === "local")
  <!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
  <script src="{{ $page->localAssetPath }}{{ ('js/prism.js') }}"></script>
  <script src="{{ $page->localAssetPath }}{{ ('js/styleswitcher.min.js') }}"></script>
  @else
  <script src="{{ $page->baseUrl }}{{ ('assets/js/prism.js') }}"></script>
  <script src="{{ $page->baseUrl }}{{ ('assets/js/styleswitcher.min.js') }}"></script>
  @endif

<a href="https://github.com/atelierbram/syntax-highlighting" class="github-corner"><span class="visuallyhidden">This repo on Github</span><svg width="48" height="48" viewBox="0 0 250 250" style="fill:#73868c;color:#121516;position:absolute;top:0;border:0;right:0;z-index:4"><path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path><path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2" fill="currentColor" style="transform-origin: 130px 106px;" class="octo-arm"></path><path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z" fill="currentColor" class="octo-body"></path></svg></a>
  </body>
</html>

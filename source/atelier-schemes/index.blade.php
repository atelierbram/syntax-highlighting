---
extends: _layouts.main
page_title: Atelier Schemes colorschemes for syntax highlighting
page_type: landingpage
page_id: atelier-schemes
slug: atelier-schemes
---

@section('body')

<header class="tc"><h2 class="visuallyhidden"><a href="{{ $page->baseUrl }}/atelier-schemes/">Atelier colorschemes</a></h2>
@include('_partials.atelier-schemes-logo_900x300_svg')
</header>

<p>For the construction of these colorschemes, <a href="//ethanschoonover.com/solarized">Solarized colorscheme</a> stood as a model, and  <a href="//github.com/chriskempson/base16-builder">Base16 Builder</a> was a building tool. Like in <a href="//github.com/altercation/solarized/">Solarized</a>, the colorschemes come in a light &#8211; and in a dark background version. It&#8217;s really just variations on the same idea, but each with it&#8217;s own color-value relations, interdependent on each other and their base (background-)color, giving each colorscheme it’s own character.</p>
<p>More about the thought process behind some of the <a href="changelog/">documented updates and changes</a> made halfway during the time of creation.</p>

    <h3 id="forest"><a href="{{ $page->baseUrl }}{{ $page->slug }}/forest">Forest</a></h3>
    <p>Base color for Forest is orange, and the idea is to have brownish colors for the background, not unlike a colorscheme like <a href="//joebergantine.com/projects/color-schemes/birds-of-paradise/">&#8220;Birds of Paradise&#8221;</a>, but a bit muddier on the browns, less red and more greyed out, like clay.</p>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 300" class="svg-colortiles"><g><rect x="0" y="0" width="150" height="150" fill="#1b1918" /><rect x="150" y="0" width="150" height="150" fill="#2c2421" /><rect x="300" y="0" width="150" height="150" fill="#68615e" /><rect x="450" y="0" width="150" height="150" fill="#766e6b" /><rect x="600" y="0" width="150" height="150" fill="#9c9491" /><rect x="750" y="0" width="150" height="150" fill="#a8a19f" /><rect x="900" y="0" width="150" height="150" fill="#e6e2e0" /><rect x="1050" y="0" width="150" height="150" fill="#f1efee" /><rect x="0" y="150" width="150" height="150" fill="#c38418" /><rect x="150" y="150" width="150" height="150" fill="#df5320" /><rect x="300" y="150" width="150" height="150" fill="#f22c40" /><rect x="450" y="150" width="150" height="150" fill="#c33ff3" /><rect x="600" y="150" width="150" height="150" fill="#6666ea" /><rect x="750" y="150" width="150" height="150" fill="#407ee7" /><rect x="900" y="150" width="150" height="150" fill="#3d97b8" /><rect x="1050" y="150" width="150" height="150" fill="#7b9726" /></g></svg>

    <p>More <a href="{{ $page->baseUrl }}/{{ $page->slug }}/forest">information</a> on code, color-values and more &hellip;.</p>

    <h3 id="plateau" class="mtm"><a href="{{ $page->baseUrl }}/{{ $page->slug }}/plateau">Plateau</a></h3>

    <p>Base color for Plateau is red, and here the background-colors have these chocolate brown/grey colors for the background, while the “color-wheel colors” are quite desaturated. A warm palette; no real green in here, (<i>see also “Cave”</i>).</p>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 300" class="svg-colortiles"><g><rect x="0" y="0" width="150" height="150" fill="#1b1818" /><rect x="150" y="0" width="150" height="150" fill="#292424" /><rect x="300" y="0" width="150" height="150" fill="#585050" /><rect x="450" y="0" width="150" height="150" fill="#655d5d" /><rect x="600" y="0" width="150" height="150" fill="#7e7777" /><rect x="750" y="0" width="150" height="150" fill="#8a8585" /><rect x="900" y="0" width="150" height="150" fill="#e7dfdf" /><rect x="1050" y="0" width="150" height="150" fill="#f4ecec" /><rect x="0" y="150" width="150" height="150" fill="#a06e3b" /><rect x="150" y="150" width="150" height="150" fill="#b45a3c" /><rect x="300" y="150" width="150" height="150" fill="#ca4949" /><rect x="450" y="150" width="150" height="150" fill="#bd5187" /><rect x="600" y="150" width="150" height="150" fill="#8464c4" /><rect x="750" y="150" width="150" height="150" fill="#7272ca" /><rect x="900" y="150" width="150" height="150" fill="#5485b6" /><rect x="1050" y="150" width="150" height="150" fill="#4b8b8b" /></g></svg>

    <p>More <a href="{{ $page->baseUrl }}/{{ $page->slug }}/plateau">information</a> on code, color-values and more &hellip;.</p>

    <h3 id="heath" class="mtm"><a href="{{ $page->baseUrl }}/{{ $page->slug }}/heath">Heath</a></h3>
    <p>Base color for Heath is magenta, and here the background-colors have these cool-red colors for the background, but then obviously toned down quite a bit &hellip;.</p>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 300" class="svg-colortiles"><g><rect x="0" y="0" width="150" height="150" fill="#1b181b" /><rect x="150" y="0" width="150" height="150" fill="#292329" /><rect x="300" y="0" width="150" height="150" fill="#695d69" /><rect x="450" y="0" width="150" height="150" fill="#776977" /><rect x="600" y="0" width="150" height="150" fill="#9e8f9e" /><rect x="750" y="0" width="150" height="150" fill="#ab9bab" /><rect x="900" y="0" width="150" height="150" fill="#d8cad8" /><rect x="1050" y="0" width="150" height="150" fill="#f7f3f7" /><rect x="0" y="150" width="150" height="150" fill="#bb8a35" /><rect x="150" y="150" width="150" height="150" fill="#a65926" /><rect x="300" y="150" width="150" height="150" fill="#ca402b" /><rect x="450" y="150" width="150" height="150" fill="#cc33cc" /><rect x="600" y="150" width="150" height="150" fill="#7b59c0" /><rect x="750" y="150" width="150" height="150" fill="#516aec" /><rect x="900" y="150" width="150" height="150" fill="#159393" /><rect x="1050" y="150" width="150" height="150" fill="#918b3b" /></g></svg>

    <h3 id="heath" class="mtm"></h3>
    <p>More <a href="{{ $page->baseUrl }}/{{ $page->slug }}/heath">information</a> on code, color-values and more &hellip;.</p>

    <h3 id="cave" class="mtm"><a href="{{ $page->baseUrl }}/{{ $page->slug }}/cave">Cave</a></h3>
    <p>Base color for Cave is violet, and although the colors are regularly spaced out, there is no real green in here, (<i>see also “Plateau”</i>) a “cool-warm” palette; not for the claustrophobic.</p>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 300" class="svg-colortiles"><g><rect x="0" y="0" width="150" height="150" fill="#19171c" /><rect x="150" y="0" width="150" height="150" fill="#26232a" /><rect x="300" y="0" width="150" height="150" fill="#585260" /><rect x="450" y="0" width="150" height="150" fill="#655f6d" /><rect x="600" y="0" width="150" height="150" fill="#7e7887" /><rect x="750" y="0" width="150" height="150" fill="#8b8792" /><rect x="900" y="0" width="150" height="150" fill="#e2dfe7" /><rect x="1050" y="0" width="150" height="150" fill="#efecf4" /><rect x="0" y="150" width="150" height="150" fill="#a06e3b" /><rect x="150" y="150" width="150" height="150" fill="#aa573c" /><rect x="300" y="150" width="150" height="150" fill="#be4678" /><rect x="450" y="150" width="150" height="150" fill="#bf40bf" /><rect x="600" y="150" width="150" height="150" fill="#955ae7" /><rect x="750" y="150" width="150" height="150" fill="#576ddb" /><rect x="900" y="150" width="150" height="150" fill="#398bc6" /><rect x="1050" y="150" width="150" height="150" fill="#2a9292" /></g></svg>

    <p>More <a href="{{ $page->baseUrl }}/{{ $page->slug }}/cave">information</a> on code, color-values and more &hellip;.</p>


    <h3 id="sulphurpool" class="mtm"><a href="{{ $page->baseUrl }}/{{ $page->slug }}/sulphurpool">Sulphurpool</a></h3>
    <p>Base color for sulphurpool is purple, and here the background-colors have these grey purplish colors for the background. Darkest background-color needed not to be as desaturated as some of the warmer palettes, giving this colorscheme it’s otherworldly character. Yellow and green are close, because of avoidance of too greenish hues. In all: easy on the eye.</p>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 300" class="svg-colortiles"><g><rect x="0" y="0" width="150" height="150" fill="#202746" /><rect x="150" y="0" width="150" height="150" fill="#293256" /><rect x="300" y="0" width="150" height="150" fill="#5e6687" /><rect x="450" y="0" width="150" height="150" fill="#6b7394" /><rect x="600" y="0" width="150" height="150" fill="#898ea4" /><rect x="750" y="0" width="150" height="150" fill="#979db4" /><rect x="900" y="0" width="150" height="150" fill="#dfe2f1" /><rect x="1050" y="0" width="150" height="150" fill="#f5f7ff" /><rect x="0" y="150" width="150" height="150" fill="#c08b30" /><rect x="150" y="150" width="150" height="150" fill="#c76b29" /><rect x="300" y="150" width="150" height="150" fill="#c94922" /><rect x="450" y="150" width="150" height="150" fill="#9c637a" /><rect x="600" y="150" width="150" height="150" fill="#6679cc" /><rect x="750" y="150" width="150" height="150" fill="#3d8fd1" /><rect x="900" y="150" width="150" height="150" fill="#22a2c9" /><rect x="1050" y="150" width="150" height="150" fill="#ac9739" /></g></svg>

    <p>More <a href="{{ $page->baseUrl }}/{{ $page->slug }}/sulphurpool">information</a> on code, color-values and more &hellip;.</p>

    <h3 id="lakeside" class="mtm"><a href="{{ $page->baseUrl }}/{{ $page->slug }}/lakeside">Lakeside</a></h3>
    <p>Base color for Lakeside is blue, which means bluish colors for the background. Coolest colorscheme of the bunch, works very well in the light-background variant, for example on a webpage (<i>with Prism, or Higlight.js, e.g.</i>).</p>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 300" class="svg-colortiles"><g><rect  x="0" y="0" width="150" height="150" fill="#161b1d" /><rect  x="150" y="0" width="150" height="150" fill="#1f292e" /><rect  x="300" y="0" width="150" height="150" fill="#516d7b" /><rect  x="450" y="0" width="150" height="150" fill="#5a7b8c" /><rect  x="600" y="0" width="150" height="150" fill="#7195a8" /><rect  x="750" y="0" width="150" height="150" fill="#7ea2b4" /><rect  x="900" y="0" width="150" height="150" fill="#c1e4f6" /><rect  x="1050" y="0" width="150" height="150" fill="#ebf8ff" /><rect  x="0" y="150" width="150" height="150" fill="#8a8a0f" /><rect  x="150" y="150" width="150" height="150" fill="#935c25" /><rect  x="300" y="150" width="150" height="150" fill="#d22d72" /><rect  x="450" y="150" width="150" height="150" fill="#b72dd2" /><rect  x="600" y="150" width="150" height="150" fill="#6b6bb8" /><rect  x="750" y="150" width="150" height="150" fill="#257fad" /><rect  x="900" y="150" width="150" height="150" fill="#2d8f6f" /><rect  x="1050" y="150" width="150" height="150" fill="#568c3b" /></g></svg>

    <p>More <a href="{{ $page->baseUrl }}/{{ $page->slug }}/lakeside">information</a> on code, color-values and more &hellip;.</p>

    <h3 id="savanna" class="mtm"><a href="{{ $page->baseUrl }}/{{ $page->slug }}/savanna">Savanna</a></h3>
    <p>Base color for Savanna is green, it has greenish colors for the background. “Color-wheel colors” are desaturated considerably, giving this colorscheme a rather understated appeal and, dear I say it, a ‘natural’ look and feel.</p>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 300" class="svg-colortiles"><g><rect x="0" y="0" width="150" height="150" fill="#171c19" /><rect x="150" y="0" width="150" height="150" fill="#232a25" /><rect x="300" y="0" width="150" height="150" fill="#526057" /><rect x="450" y="0" width="150" height="150" fill="#5f6d64" /><rect x="600" y="0" width="150" height="150" fill="#78877d" /><rect x="750" y="0" width="150" height="150" fill="#87928a" /><rect x="900" y="0" width="150" height="150" fill="#dfe7e2" /><rect x="1050" y="0" width="150" height="150" fill="#ecf4ee" /><rect x="0" y="150" width="150" height="150" fill="#a07e3b" /><rect x="150" y="150" width="150" height="150" fill="#9f713c" /><rect x="300" y="150" width="150" height="150" fill="#b16139" /><rect x="450" y="150" width="150" height="150" fill="#867469" /><rect x="600" y="150" width="150" height="150" fill="#55859b" /><rect x="750" y="150" width="150" height="150" fill="#478c90" /><rect x="900" y="150" width="150" height="150" fill="#1c9aa0" /><rect x="1050" y="150" width="150" height="150" fill="#489963" /></g></svg>

    <p>More <a href="{{ $page->baseUrl }}/{{ $page->slug }}/savanna">information</a> on code, color-values and more &hellip;.</p>

    <h3 id="seaside" class="mtm"><a href="{{ $page->baseUrl }}/{{ $page->slug }}/seaside">Seaside</a></h3>
    <p>Base color for Seaside is green: greenish colors for the background. Very saturated color-palette; comes popping at you.</p>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 300" class="svg-colortiles"><g><rect  x="0" y="0" width="150" height="150" fill="#131513" /><rect  x="150" y="0" width="150" height="150" fill="#242924" /><rect  x="300" y="0" width="150" height="150" fill="#5e6e5e" /><rect  x="450" y="0" width="150" height="150" fill="#687d68" /><rect  x="600" y="0" width="150" height="150" fill="#809980" /><rect  x="750" y="0" width="150" height="150" fill="#8ca68c" /><rect  x="900" y="0" width="150" height="150" fill="#cfe8cf" /><rect  x="1050" y="0" width="150" height="150" fill="#f4fbf4" /><rect  x="0" y="150" width="150" height="150" fill="#98981b" /><rect  x="150" y="150" width="150" height="150" fill="#87711d" /><rect  x="300" y="150" width="150" height="150" fill="#e6193c" /><rect  x="450" y="150" width="150" height="150" fill="#e619c3" /><rect  x="600" y="150" width="150" height="150" fill="#ad2bee" /><rect  x="750" y="150" width="150" height="150" fill="#3d62f5" /><rect  x="900" y="150" width="150" height="150" fill="#1999b3" /><rect  x="1050" y="150" width="150" height="150" fill="#29a329" /></g></svg>

    <p>More <a href="{{ $page->baseUrl }}/{{ $page->slug }}/seaside">information</a> on code, color-values and more &hellip;.</p>

    <h3 id="estuary"><a href="{{ $page->baseUrl }}/{{ $page->slug }}/estuary">Estuary</a></h3>
    <p>Base color for Estuary is yellow-green, no real blue, red or purple in here, (<i>red goes to the orange</i>), only the yellow/greenish colors are saturated. Colors are all very close in terms of (mid-range) tonal-contrast (‘“grey value”). A bit of a poisonous colorscheme, be aware of the crocodiles &hellip;, they’re hiding in there.</p>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 300" class="svg-colortiles"><g><rect x="0" y="0" width="150" height="150" fill="#22221b" /><rect x="150" y="0" width="150" height="150" fill="#302f27" /><rect x="300" y="0" width="150" height="150" fill="#5f5e4e" /><rect x="450" y="0" width="150" height="150" fill="#6c6b5a" /><rect x="600" y="0" width="150" height="150" fill="#878573" /><rect x="750" y="0" width="150" height="150" fill="#929181" /><rect x="900" y="0" width="150" height="150" fill="#e7e6df" /><rect x="1050" y="0" width="150" height="150" fill="#f4f3ec" /><rect x="0" y="150" width="150" height="150" fill="#a5980d" /><rect x="150" y="150" width="150" height="150" fill="#ae7313" /><rect x="300" y="150" width="150" height="150" fill="#ba6236" /><rect x="450" y="150" width="150" height="150" fill="#9d6c7c" /><rect x="600" y="150" width="150" height="150" fill="#5f9182" /><rect x="750" y="150" width="150" height="150" fill="#36a166" /><rect x="900" y="150" width="150" height="150" fill="#5b9d48" /><rect x="1050" y="150" width="150" height="150" fill="#7d9726" /></g></svg>

    <p>More <a href="{{ $page->baseUrl }}/{{ $page->slug }}/estuary">information</a> on code, color-values and more &hellip;.</p>

    <h3 id="dune"><a href="{{ $page->baseUrl }}/{{ $page->slug }}/dune">Dune</a></h3>
    <p>Base color for Dune is yellow, and then warm yellowish brown greyed colors for the background. A welcoming, soothing friendly but also bright, colorscheme.</p>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 300" class="svg-colortiles"><g><rect x="0" y="0" width="150" height="150" fill="#20201d" /><rect x="150" y="0" width="150" height="150" fill="#292824" /><rect x="300" y="0" width="150" height="150" fill="#6e6b5e" /><rect x="450" y="0" width="150" height="150" fill="#7d7a68" /><rect x="600" y="0" width="150" height="150" fill="#999580" /><rect x="750" y="0" width="150" height="150" fill="#a6a28c" /><rect x="900" y="0" width="150" height="150" fill="#e8e4cf" /><rect x="1050" y="0" width="150" height="150" fill="#fefbec" /><rect x="0" y="150" width="150" height="150" fill="#ae9513" /><rect x="150" y="150" width="150" height="150" fill="#b65611" /><rect x="300" y="150" width="150" height="150" fill="#d73737" /><rect x="450" y="150" width="150" height="150" fill="#d43552" /><rect x="600" y="150" width="150" height="150" fill="#b854d4" /><rect x="750" y="150" width="150" height="150" fill="#6684e1" /><rect x="900" y="150" width="150" height="150" fill="#1fad83" /><rect x="1050" y="150" width="150" height="150" fill="#60ac39" /></g></svg>

    <p>More <a href="{{ $page->baseUrl }}/{{ $page->slug }}/dune">information</a> on code, color-values and more &hellip;.</p>

    <h3 id="downloads" class="mtm">Downloads</h3>
    <p>Some of the first themes for different apps can be <a href="https://github.com/atelierbram/syntax-highlighting/tree/archive/docs/archive/atelier-schemes/output">found in the archived output folder</a>.</p>
    <p class="note">Note: Visual Studio Code has it’s own <a href="https://github.com/atelierbram/Atelier-VSCode-Themes">dedicated implementation and repository</a>). It’s on <a href="https://marketplace.visualstudio.com/items?itemName=Atelierbram.atelier-vscode-themes#overview">Visual Studio Marketplace</a> as well. Looking for extensions within VS Code, search for atelier or atelier-vscode-themes.<br>For Sublime Text, go to <a href="https://github.com/atelierbram/syntax-highlighting/tree/archive/docs/archive/atelier-schemes/output/textmate">Textmate folder</a>, or <a href="https://github.com/atelierbram/syntax-highlighting/tree/archive/docs/archive/atelier-schemes/output/textmate/textmate.zip">download the zip-file directly</a>.</p>

    <p>For <a href="https://github.com/tpope/vim-pathogen">Vim with Pathogen</a> you can clone <a href="https://github.com/atelierbram/vim-colors_atelier-schemes">the dedicated repo for this purpose</a> in the <code>~/.vim/bundle</code> directory like so:</p>
    <pre class="language-bashrc"><code class="language-bash">
cd ~/.vim/bundle
git clone https://github.com/atelierbram/vim-colors_atelier-schemes.git
      </code></pre>

<h3 class="mtm">NeoVim</h3>
<p>For NeoVim there is <a href="https://github.com/RRethy/base16-nvim">this repository base16-nvim</a> which contains a large collection of colorschemes that were build with base16.</p>
<p>In <code>plugins/colorscheme.lua</code>:</p>

<pre class="language-lua" style="background:#ebf8ff;color:#516d7b;padding:1em;border:1px solid #d6eefb"><code class="language-lua" style="background:#ebf8ff;color:#516d7b">
{
    "RRethy/base16-nvim",
    priority = 1000, -- make sure to load this before all the other start plugins
    config = function()
      -- load the colorscheme here
      vim.cmd([[colorscheme base16-atelier-sulphurpool]])
    end,
  },

</code></pre>

<p>In <code>plugins/lualine.lua</code> set <code>base-16</code> as theme. In that way lualine is <a href="https://github.com/nvim-lualine/lualine.nvim/blob/master/THEMES.md#base16">automagically picking up the right colorscheme</a>:</p>
<pre class="language-lua" style="background:#ebf8ff;color:#516d7b;padding:1em;border:1px solid #d6eefb"><code class="language-lua" style="background:#ebf8ff;color:#516d7b">
return {
  "nvim-lualine/lualine.nvim",
  -- dependencies = { "nvim-tree/nvim-web-devicons" },
  -- config = true,
  -- See `:help lualine.txt`
  opts = {
    options = {
      icons_enabled = false,
      theme = 'base16',
      component_separators = "|",
      section_separators = "",
    },
  },
}
</code></pre>

<h3 id="terminal-emulators" class="mtm">Terminal emulators</h3>
<ul>
<li><a href="https://github.com/atelierbram/AtelierSchemes-kitty">kitty</a></li>
<li><a href="https://github.com/atelierbram/atelier-schemes-alacritty">Alacritty</a></li>
<li><a href="https://github.com/atelierbram/atelier-schemes-terminal">Mac terminal</a></li>
</ul>

    <h3 id="demo" class="mtm">Demo</h3>
    <ul>
      <li><a href="//atelierbram.github.io/syntax-highlighting/atelier-schemes/demo/highlight-js.html">Demo for Highlight.js</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/atelier-schemes/demo/prettify">Demo for <i>(Google Code)</i> Prettify</a></li>
      <li><a href="//atelierbram.github.io/syntax-highlighting/prism">Demo for Prism</a></li>
    </ul>

    <h3 id="#lab" class="mtm">Lab</h3>
    <ul>
      <li><a href="http://codepen.io/atelierbram/pen/JnbIt">Colorscheme Lab on CodePen</a></li>
      <li><a href="https://gist.github.com/atelierbram/6283373">Colorscheme Lab as Github Gist</a></li>
    </ul>

    <h3 id="credits" class="mtm">Credits</h3>
    <ul class="inline-block-list">
      <li>Credits to <a href="http://ethanschoonover.com/solarized">Ethan Schoonover</a>  whose <a href="http://github.com/altercation/solarized">Solarized colorscheme</a> was a model for these colorschemes</li>
      <li>And credits to <a href="http://chriskempson.com/">Chris Kempson</a>, whose <a href="https://github.com/chriskempson/base16-builder">Base16 Builder</a>  was used for conversion to the different output formats. It&#8217;s a remarkable building tool, and I would also recommend trying out <a href="https://github.com/chriskempson/base16">the colorschemes</a> he made with them.</li>
    </ul>
@endsection

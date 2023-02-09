---
extends: _layouts.main
page_title: Base4Tone colorschemes for syntax highlighting
page_type: landingpage
page_id: base4tone
slug: base4tone
---

@section('body')

<header class="tc"><h2 class="visuallyhidden"><a href="{{ $page->baseUrl }}/base4tone/">Base4Tone</a></h2>
@include('_partials.base4tone-header_912x180_svg')
</header>

<p class="mtl">Base4Tone is an opinionated system for working with variables in webdesign, and is also used to generate a collection of colorthemes for many different applications in dark - and light versions. Applications like:</p>
<ul>
  <li><a href="https://github.com/atelierbram/Base4Tone-iterm2/">iTerm2</a></li>
  <li><a href="https://github.com/atelierbram/Base4Tone-hyper/">Hyper</a></li>
  <li><a href="https://github.com/atelierbram/Base4Tone-alacritty/">Alacritty</a></li>
  <li><a href="https://github.com/atelierbram/Base4Tone-vim/">Vim</a></li>
  <li><a href="https://github.com/atelierbram/Base4Tone-VSCode-Themes">VSCode</a></li>
  <li><a href="https://github.com/atelierbram/Base4Tone-prism/">Prism</a></li>
</ul>

<p>Please go to <a href="https://atelierbram.github.io/Base4Tone-prism/b4t_classic-a/dark/">the live demo for Prism</a> to see the themes in action!</p>

<figure><img src="https://atelierbram.github.io/Base4Tone-vim/img/Base4Tone_Modern_W_Dark.png" alt="screenshot of Base4Tone_Modern_W_Dark in Vim" /><figcaption><pre>screenshot of Base4Tone_Modern_W_Dark in Vim</pre></figcaption></figure>

@endsection

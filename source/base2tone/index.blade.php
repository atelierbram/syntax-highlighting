---
extends: _layouts.main
page_title: Base2Tone duotone colorschemes for syntax highlighting
page_type: landingpage
page_id: base2tone
slug: 'base2tone'
---

@section('body')

<header class="tc">
<h2 class="visuallyhidden"><a href="{{ $page->baseUrl; }}base2tone/">Base2Tone</a></h2>

@include('_partials.base2tone-logo-infini_896x176_svg')
</header>

  <p>Based on <a href="http://simurai.com/projects/2016/01/01/duotone-themes">DuoTone themes</a> by <a href="http://simurai.com/">Simurai</a> for Atom.</p>

  <blockquote>“DuoTone themes use only 2 hues (7 shades in total). It <strong>tones down</strong> less important parts (like punctuation and brackets) and highlights only the <strong>important</strong> ones. This leads to a more calm color scheme, but still lets you find the stuff you’re looking for.”</blockquote>

<p>Base2Tone has it’s own <a href="//github.com/atelierbram/Base2Tone">dedicated repository</a>, and demopage on <a href="//base2t.one/">base2t.one</a> where one can find links to dedicated repositories for generating syntax-highlighting themes for specific applications, like VS Code, Vim, iTerm2, HyperTerm and Prism.</p>

@endsection

@include('_partials.head')
  <body class="page-{{ $page->page_id }} type-{{ $page->page_type }}" id="id-{{ $page->page_id }}">
    @include('_partials.icons-svg')
    <div class="page-wrap">
    @include('_partials.header')
    @include('_partials.nav')

    <main class="container" id="main">
      <article class="article article--demo">
        @yield('body')
      </article>
    </main><!-- /.container #main -->

    @include('_partials.footer')
    @include('_partials.gototop')

    @if ($page->id === "id_404")
    <script id="insertScriptJs">@include('_partials.script-id_404-js')</script>
    @endif

    @if ($page->server === "localX")
      <script src="http://localhost/github.com/atelierbram/blog/source/assets/js/prism-custom.min.js"></script>
    @elseif ($page->server === "remoteX")
      <script src="https://atelierbram.github.io/blog/assets/js/prism-custom.min.js"></script>
    @endif

    </div><!-- ./page-wrap -->
  </body>
</html>

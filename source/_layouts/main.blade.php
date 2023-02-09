@include('_partials.head')
  <body class="page-{{ $page->page_id }} type-{{ $page->page_type }}" id="id-{{ $page->page_id }}">
    @include('_partials.icons-svg')
    <div class="page-wrap">
    @include('_partials.header')
    @include('_partials.nav')

    <main class="container" id="main">
      <article>
        @yield('body')
      </article>
    </main><!-- /.container-flex #main -->

    @include('_partials.footer')
    @include('_partials.gototop')

    </div><!-- ./page-wrap -->
  </body>
</html>

@extends('_layouts.default')

@section('body')
  <h2 class="project-title">Atelier colorscheme</h2>
  @yield('content')

@include('_partials.atelierschemes-downloads')
@include('_partials.atelierschemes-credits')

<nav class="prevnext">
  @if ($previous = $page->getPrevious())
  <h5 class="prevnext_left">
    <a href="{{ $previous->getUrl() }}" rel="prev"><span class="icon icon-arrow-left"><svg class="shape-icon" viewBox="0 0 50 50" width="16" height="16"><use xlink:href="#shape-arrow-point-left"></use></svg></span><span class="prevnext_name">{{ $previous->slug }}</a></h5>
  @endif
  @if ($next = $page->getNext())
    <h5 class="prevnext_right"><a href="{{ $next->getUrl() }}" rel="next"><span class="prevnext_name">{{ $next->slug }}</span><span class="icon icon-arrow-right"><svg class="shape-icon" viewBox="0 0 50 50" width="16" height="16"><use xlink:href="#shape-arrow-point-right"></use></svg></span></a></h5>
  @endif
</nav>

@endsection


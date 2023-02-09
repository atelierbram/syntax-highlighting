<nav class="nav nav-site container">
  <ul class="nav_list nav-site_list">
    <li class='nav_list_item @if ($page->page_id === ("home"))current @endif'><a href="{{ $page->baseUrl }}">Home</a></li>
    <li class='nav_list_item {{ $page->isActive("/atelier-schemes/") ? "current" : "" }}'><a href="{{ $page->baseUrl }}atelier-schemes/">Atelier Schemes</a></li>
    <li class='nav_list_item {{ $page->isActive("/base2tone/") ? "current" : "" }}'><a href="{{ $page->baseUrl }}base2tone/">Base2Tone</a></li>
    <li class='nav_list_item {{ $page->isActive("/base4tone/") ? "current" : "" }}'><a href="{{ $page->baseUrl }}base4tone/">Base4Tone</a></li>
    <li class='nav_list_item {{ $page->isActive("/prism/") ? "current" : "" }}'><a href="{{ $page->baseUrl }}prism/">Prism</a></li>
  </ul>
</nav>


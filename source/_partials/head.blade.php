<!doctype html>
<html class="no-js core @if ($page->server === "local") server-local @else server-remote @endif" lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->siteName }} - @if ($page->page_title) {{ $page->page_title }} @else {{ $page->siteDescription }} @endif"/>
    <meta name="author" content="Bram de Haan">
    <meta property="og:title" content="{{ $page->siteName }} | @if ($page->page_title) {{ $page->page_title }} @else {{ $page->siteDescription }} @endif"/>
    <meta property="og:type" content="{{ $page->type ?? 'website' }}" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->siteName }} - @if ($page->page_title) {{ $page->page_title }} @else {{ $page->siteDescription }} @endif"/>
    <title>{{ $page->siteName }} | @if ($page->page_title) {{ $page->page_title }} @else {{ $page->siteDescription }} @endif</title>
    <style id="fontfaceMonochrome">@include('_partials.fontface-monospace-css')</style>
    @if ($page->server === "local")
      <style id="fontfaceLocalCss">@include('_partials.fontface-local-css')</style>
      <link href="{{ $page->localAssetPath }}{{ ('css/style-redesign-v1.css') }}" rel="stylesheet" media="all">
      <link href="{{ $page->localAssetPath }}{{ ('css/local.css') }}" rel="stylesheet" media="all">
      <link rel="icon" href="http://localhost/favicon.ico">
    @else
      <style id="fontfaceRemoteCss">@include('_partials.fontface-remote-css')</style>
      <link rel="prefetch" href="{{ $page->baseUrl }}assets/css/style-redesign-v1.css">
      <link href="{{ $page->baseUrl }}{{ ('assets/css/style-redesign-v1.min.css?v1') }}" rel="stylesheet" media="print" onload="this.media='all'">
      <link rel="icon" href="/favicon.ico">
    @endif
    <script id="headDetectJs">@include('_partials.head-detect-js')</script>

    @if ( ($page->page_type === "themepage") &&  ($page->server === "local"))
      <link href="{{ $page->localAssetPath }}{{ ('css/single.css?v2') }}" rel="stylesheet" media="all">
    @endif

    @if ( ($page->page_type === "themepage") &&  ($page->server === "remote"))
      <link href="{{ $page->baseUrl }}{{ ('assets/css/single.min.css?v1') }}" rel="stylesheet" media="print" onload="this.media='all'">
    @endif

    @if ($page->page_id === "cave")
    <style id="caveCss">@include('_partials.cave-css')</style>
    @elseif ($page->page_id === "dune")
    <style id="duneCss">@include('_partials.cave-css')</style>
    @elseif ($page->page_id === "estuary")
    <style id="estruaryCss">@include('_partials.estuary-css')</style>
    @elseif ($page->page_id === "forest")
    <style id="forestCss">@include('_partials.forest-css')</style>
    @elseif ($page->page_id === "heath")
    <style id="forestCss">@include('_partials.heath-css')</style>
    @elseif ($page->page_id === "lakeside")
    <style id="lakesideCss">@include('_partials.lakeside-css')</style>
    @elseif ($page->page_id === "plateau")
    <style id="plateauCss">@include('_partials.plateau-css')</style>
    @elseif ($page->page_id === "savanna")
    <style id="plateauCss">@include('_partials.savanna-css')</style>
    @elseif ($page->page_id === "seaside")
    <style id="seasideCss">@include('_partials.seaside-css')</style>
    @elseif ($page->page_id === "sulphurpool")
    <style id="sulphurpoolCss">@include('_partials.sulphurpool-css')</style>
    @endif
  </head>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>{{ setting('site.title') }}</title>
	@include('includes.head')
</head>
<body>

<div id="main" class="uk-offcanvas-content">
	<!-- Header -->
	@include('components.header')
	
	<div id="map" uk-height-viewport="offset-top: true"></div>
	
	<!-- Sidebars -->
	@include('components.filters')
	@include('components.nav')
</div>


@include('includes.foot')
</body>
</html>
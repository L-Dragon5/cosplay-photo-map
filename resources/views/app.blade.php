<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>{{ setting('site.title') }}</title>
	@include('includes.head')
</head>
<body>

<div id="main" class="uk-offcanvas-content">
	<!-- Header -->
	<div class="header uk-navbar uk-navbar-container uk-box-shadow-medium-bottom">
		<div class="uk-navbar-left">
			<button class="uk-navbar-item uk-button uk-button-default uk-float-left">Filters</button>
		</div>
		
		<div class="uk-navbar-center">
			<a href="/" class="header__title uk-navbar-item uk-logo">{{ setting('site.title') }}</a>
		</div>
		
		<div class="uk-navbar-right">
			<a class="uk-navbar-item uk-navbar-toggle uk-button uk-float-right" uk-navbar-toggle-icon href="#" uk-toggle="target: #sidebar-nav">Menu&nbsp;</a>
		</div>
	</div>
	
	<div class="uk-flex uk-flex-center uk-flex-middle uk-background-muted" uk-height-viewport="offset-top: true">
		Map goes here
	</div>

	<!-- Sidebar content -->
	@include('includes.nav')
</div>


<script src="js/app.js" type="text/javascript"></script>
</body>
</html>
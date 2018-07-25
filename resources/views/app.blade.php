<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>{{ setting('site.title') }}</title>
	@include('includes.head')
</head>
<body>

<div class="container">
	<div id="main" class="row">
		<!-- Sidebar content -->
		<div id="sidebar" class="col-md-4">
			@include('includes.nav')
		</div>
	</div>
</div>

<script src="js/app.js" type="text/javascript"></script>
</body>
</html>
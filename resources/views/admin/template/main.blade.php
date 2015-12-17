<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset='UTF-8'>
		<title>@yield('title', 'Default') | Panel de administración</title>
		<link rel="stylesheet" href="{{ asset('assets/stylesheets/frontend.css') }}">
	</head>
	<body>
		@include('admin.template.partials.nav')
		
		<section>
			@include('flash::message')
			@include('admin.template.partials.errors')
			@yield('content')
		</section>

		<script src="{{ asset('assets/javascript/frontend.js') }}"></script>
	</body>
</html>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset='UTF-8'>
		<title>@yield('title', 'Default') | Panel de administración</title>
		<link rel="stylesheet" href="{{ asset('assets/stylesheets/frontend.css') }}">
	</head>
	<body>
		<header>
			@include('admin.template.partials.nav')
		</header>
		
		<section>
			@include('flash::message')
			@include('admin.template.partials.errors')
			@yield('content')
		</section>
		<footer>
			<br>
			<hr>
			Todos los derechos reservados &copy {{date('Y')}}
			<div class="pull-right">simonppg</div>
		</footer>

		<script src="{{ asset('assets/javascript/frontend.js') }}"></script>
		@yield('js')
	</body>
</html>
<!DOCTYPE html>
<html lang="es" class="animated fadeIn">
	<head>
		<meta charset='UTF-8'>
		<title>@yield('title', 'Default') | Blog</title>
		<link rel="stylesheet" href="{{ asset('assets/stylesheets/frontend.css') }}">
	</head>
	<body>
		<header>
		</header>
		
		<section>
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
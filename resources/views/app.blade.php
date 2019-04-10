<!DOCTYPE html>
<html>
<head>
	@include('partials.head')
	<title>@yield('title') - La Plata News</title>
</head>
<body>

	<header>
		@include('partials.header')
	</header>

	<section class="conteiner">
		<main class="container">
			@yield('main')
		</main>
	</section>

	<footer>
		@include('partials.footer')
	</footer>
	
	@include('partials.scripts')
	<script src="/js/menu-mobile.js"></script>


</body>
</html>
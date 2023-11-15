<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{ mix('css/app.css') }}">
	<script type="{{mix('js/app.js')}}" defer></script>
	<style>

	</style>
	<link rel="shortcut icon" href="/img/a.png" />
</head>
<body>
	<div id="app" class="d-flex flex-column h-screen 
		justify-content-between">
		<header>
			@include('partials.nav')
			@include('partials.session-status')
		</header>
		<main class="py-3">
			@yield('content')
		</main>	

		<footer class="bg-white text-center 
		text-black-50 py-3 shadow">
			{{ config('app.name')}}| copyrigth @ {{date('y')}}
		</footer>

	</div>
</body>
</html>
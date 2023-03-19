<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="author" content="Alif">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content=" Automatic Link Establishment">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content=" Automatic Link Establishment,ale,lapan,brin">

	<title>{{ config('app.name', 'Radio ALE') }}</title>
	{{-- <title>Keterbukaan Informasi Radio ALE</title> --}}

	<!-- Fonts -->
	<link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">
	<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

	<!-- Scripts -->
	<script src="/js/Chart.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/datepicker.min.js"></script>
	@vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gray-100 text-slate-500 antialiased dark:bg-slate-900 dark:text-slate-400">
	<div class="min-h-screen">
		@yield('content')
	</div>
</body>

</html>

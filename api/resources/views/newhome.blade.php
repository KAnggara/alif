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

	<!-- Fonts -->
	<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

	<link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">
	<title>Keterbukaan Informasi Radio ALE</title>
	<script src="js/Chart.bundle.min.js"></script>

	<!-- Scripts -->
	@vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased">
	@php
		date_default_timezone_set('Asia/Jakarta');
		$now = date('D, d M Y | H:i');
	@endphp
	<div class="min-h-screen bg-gray-100 dark:bg-gray-900">

	</div>
</body>

</html>

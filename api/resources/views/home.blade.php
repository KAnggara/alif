<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="UTF-8">
	<meta name="author" content="SiListrik">
	<meta name="description" content="SiListrik">
	<meta name="keywords" content="api,wa,listrik">
	<link href="css/app.css" rel="stylesheet">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	@vite('resources/css/app.css')

	<link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">
	<title>Keterbukaan Informasi Radio</title>
	<script src="js/Chart.bundle.min.js"></script>

</head>

<body class="bg-gray-300 py-4 font-sans leading-normal tracking-normal dark:bg-gray-800">
	@php
		date_default_timezone_set('Asia/Jakarta');
		$now = date('D, d M Y | H:i');
	@endphp
	<main>
		<div
			class="items-top relative m-10 min-h-fit flex-1 justify-center rounded-3xl bg-gray-100 py-4 sm:items-center sm:pt-0"
			id="main">
			@if (Route::has('login'))
				<div class="fixed top-0 right-0 mt-4 mr-10 hidden sm:block">
					@auth
						<a class="mr-3 text-xl text-gray-900 underline dark:text-gray-100" href="{{ url('/dashboard') }}">Dashboard</a>
						<a class="text-xl text-gray-900 underline dark:text-gray-100" href="{{ route('login') }}">Log out</a>
					@else
						<a class="text-xl text-gray-900 underline dark:text-gray-100" href="{{ route('login') }}">Log in</a>
					@endauth
				</div>
			@endif

			<div
				class="items-center justify-center rounded-t-3xl bg-gradient-to-r from-blue-400 to-blue-700 p-4 text-2xl text-white shadow">
				<h1 class="pl-2 text-center text-3xl font-bold">
					<i class="fas fa-calendar-alt fa-inverse"></i>
					{{ $now }} WIB
				</h1>
			</div>

			<div class="flex flex-wrap">

				<div class="w-full p-6 md:w-1/4">
					<div class="rounded-lg border-b-4 border-green-500 bg-gradient-to-b from-green-200 to-green-100 p-5 shadow-xl">
						<div class="flex flex-row items-center">
							<div class="flex-shrink pr-4">
								<div class="rounded-full bg-green-600 p-5">
									<i class="fas fa-broadcast-tower fa-2x fa-inverse"></i>
								</div>
							</div>
							<div class="flex-1 text-right md:text-center">
								<h2 class="font-bold uppercase text-gray-600">Tower</h2>
								<p class="text-3xl font-bold">
									{{-- {{ $last->voltase }} Volt --}}
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="w-full p-6 md:w-1/4">
					<div class="rounded-lg border-b-4 border-green-500 bg-gradient-to-b from-green-200 to-green-100 p-5 shadow-xl">
						<div class="flex flex-row items-center">
							<div class="flex-shrink pr-4">
								<div class="rounded-full bg-green-600 p-5">
									<i class="far dark:far fa-file fa-2x fa-inverse"></i>
								</div>
							</div>
							<div class="flex-1 text-right md:text-center">
								<h2 class="font-bold uppercase text-gray-600">File</h2>
								<p class="text-3xl font-bold">
									{{-- {{ $last->voltase }} Volt --}}
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="w-full p-6 md:w-1/4">
					<div class="rounded-lg border-b-4 border-green-500 bg-gradient-to-b from-green-200 to-green-100 p-5 shadow-xl">
						<div class="flex flex-row items-center">
							<div class="flex-shrink pr-4">
								<div class="rounded-full bg-green-600 p-5">
									<i class="fas fa-satellite-dish fa-2x fa-inverse"></i>
								</div>
							</div>
							<div class="flex-1 text-right md:text-center">
								<h2 class="font-bold uppercase text-gray-600">Satellite</h2>
								<p class="text-3xl font-bold">
									{{-- {{ $last->voltase }} Volt --}}
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="w-full p-6 md:w-1/4">
					<div class="rounded-lg border-b-4 border-green-500 bg-gradient-to-b from-green-200 to-green-100 p-5 shadow-xl">
						<div class="flex flex-row items-center">
							<div class="flex-shrink pr-4">
								<div class="rounded-full bg-green-600 p-5">
									<i class="fas fa-signal fa-2x fa-inverse"></i>
								</div>
							</div>
							<div class="flex-1 text-right md:text-center">
								<h2 class="font-bold uppercase text-gray-600">Signal</h2>
								<p class="text-3xl font-bold">
									{{-- {{ $last->voltase }} Volt --}}
								</p>
							</div>
						</div>
					</div>
				</div>

			</div>

			{{-- Log chart --}}
			<div class="mt-2 flex flex-grow flex-row flex-wrap">
				<div class="w-full p-6 md:w-1/2 xl:w-1/2">
					<!--Graph Card-->
					<div class="rounded-lg border-transparent bg-white shadow-xl">
						<div
							class="rounded-tl-lg rounded-tr-lg border-b-2 border-gray-300 bg-gradient-to-b from-blue-300 to-blue-100 p-2 uppercase text-gray-800">
							<h class="font-bold uppercase text-gray-600">Histori Frekwensi (hz)</h>
						</div>
						<div class="p-2 md:p-5">

							<canvas class="chartjs" id="chartjs-daya"></canvas>
							<script>
								const ctxA = document.getElementById("chartjs-daya");

								let daya = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
								let dateA = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
								new Chart(ctxA, {
									type: "line",
									data: {
										labels: dateA,
										datasets: [{
											label: "Daya (VA)",
											data: daya.reverse(),
											borderColor: "rgba(255, 0, 132, 1)",
											reverse: true,
											fill: true
										}]
									},
									options: {
										rotation: (0.5 * Math.PI),
										legend: {
											display: false,
										},
									}
								});
							</script>
						</div>
					</div>
				</div>

				<div class="w-full p-6 md:w-1/2 xl:w-1/2">
					<div class="rounded-lg border-transparent bg-white shadow-xl">
						<div
							class="rounded-tl-lg rounded-tr-lg border-b-2 border-gray-300 bg-gradient-to-b from-blue-300 to-blue-100 p-2 uppercase text-gray-800">
							<h2 class="font-bold uppercase text-gray-600">Histori Channel</h2>
						</div>
						<div class="p-2 md:p-5">
							<canvas class="chartjs" id="chart-suhu"></canvas>
							<script>
								const ctxB = document.getElementById("chart-suhu");
								let suhu = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
								let date = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
								new Chart(ctxB, {
									type: "line",
									data: {
										labels: date,
										datasets: [{
											data: suhu.reverse(),
											label: "Suhu (C)",
											lineTension: 0.5,
											borderColor: "rgb(75, 192, 50)",
										}]
									},
									options: {
										legend: {
											display: false,
										},
									}
								});
							</script>
						</div>
					</div>
				</div>

			</div>

	</main>

	<script src="js/script.js"></script>
	<script src="js/app.js"></script>

</body>

</html>

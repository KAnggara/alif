<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="UTF-8">
	<meta name="author" content="SiListrik">
	<meta name="description" content="SiListrik">
	<meta name="keywords" content="api,wa,listrik">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	@vite('resources/css/app.css')

	<link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">
	<title>Keterbukaan Informasi Radio</title>
	<script src="js/Chart.bundle.min.js"></script>

</head>

<body class="bg-gray-300 font-sans leading-normal tracking-normal dark:bg-gray-800 md:py-4">
	@php
		date_default_timezone_set('Asia/Jakarta');
		$now = date('D, d M Y | H:i');
	@endphp
	<main>
		<div
			class="items-top relative mx-4 mb-10 min-h-fit items-center justify-center rounded-3xl bg-gray-100 sm:items-center md:mx-8"
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
			<script>
				let radios = {!! json_encode($radios, JSON_HEX_TAG) !!};

				let stationsID = Object.keys(radios);
				let propertyValues = Object.values(radios);

				let chartTarget;
				let ber = [];
				let snr = [];
				let timeLabel = [];
				let frq = [];
				let stationID;
				let date;
				let year;
				let month;
				let day;
				let hours;
				let minutes;
				let seconds;
			</script>

			@foreach ($locations as $location)
				<div class="mt-10 w-full p-6">
					<div class="rounded-lg border-transparent bg-white shadow-xl">
						<div
							class="rounded-tl-lg rounded-tr-lg border-b-2 border-gray-300 bg-gradient-to-b from-blue-300 to-blue-100 p-2 uppercase text-gray-800">
							<h2 class="font-bold uppercase text-gray-600">{{ $location->location }} | {{$location->station_id}}</h2>
						</div>
						<div class="p-2 md:p-5">
							<canvas class="chartjs" id="{{ $location->station_id }}" />

							<script>
								ber = [];
								snr = [];
								timeLabel = [];
								chartTarget = document.getElementById("{{ $location->station_id }}");
								stationID = "{{ $location->station_id }}";
								station = radios[stationID];


								Object.values(station).forEach(val => {

									ber.push(val.ber);
									snr.push(val.sn);
									frq.push((val.frequency) / (1000 * 1000));

									date = new Date(0);
									date.setUTCSeconds(val.time);
									year = date.getFullYear();
									month = date.getMonth() + 1;
									day = date.getDate();
									hours = date.getHours();
									minutes = date.getMinutes();
									seconds = date.getSeconds();
									date = year + "-" + month + "-" + day + " " + hours + ":" + minutes + ":" + seconds + " WIB";

									timeLabel.push(date);
								});

								new Chart(chartTarget, {
									type: timeLabel.length < 5 ? 'bar' : 'line',
									data: {
										labels: timeLabel,
										datasets: [{
											fill: true,
											label: "FRQ",
											data: frq,
											pointBorderColor: '#fff',
											borderColor: 'rgb(87, 204, 153)',
											pointHoverBackgroundColor: '#fff',
											pointBackgroundColor: 'rgb(87, 204, 153)',
											pointHoverBorderColor: 'rgb(87, 204, 153)',
											backgroundColor: 'rgba(87, 204, 153, 0.3)',

										}, {
											fill: true,
											label: "SNR",
											data: snr,
											pointBorderColor: '#fff',
											borderColor: 'rgb(189, 224, 254)',
											pointHoverBackgroundColor: '#fff',
											pointBackgroundColor: 'rgb(189, 224, 254)',
											pointHoverBorderColor: 'rgb(189, 224, 254)',
											backgroundColor: 'rgba(189, 224, 254, 0.7)',

										}, {
											fill: true,
											label: "BER",
											data: ber,
											pointBorderColor: '#fff',
											borderColor: 'rgb(255, 99, 132)',
											pointHoverBackgroundColor: '#fff',
											pointBackgroundColor: 'rgb(255, 99, 132)',
											pointHoverBorderColor: 'rgb(255, 99, 132)',
											backgroundColor: 'rgba(255, 99, 132, 0.2)',
										}]
									},
									options: {
										elements: {
											line: {
												borderWidth: 3
											}
										},
										legend: {
											display: true,
										},
									}
								});
							</script>
						</div>
					</div>

				</div>
			@endforeach
	</main>

	{{-- <script src="js/script.js"></script> --}}
	{{-- <script src="js/app.js"></script> --}}
</body>

</html>

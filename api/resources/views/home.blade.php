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
	{{-- <script src="js/Chart.bundle.min.js"></script> --}}
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
				<!-- component -->
				<div class="container mx-auto px-4 sm:px-8">
					<div class="py-8">
						{{ $data->onEachSide(1)->links() }}
						<div class="-mx-4 overflow-x-auto px-4 py-4 sm:-mx-8 sm:px-8">
							<div class="inline-block min-w-full overflow-hidden rounded-lg shadow">
								<table class="min-w-full leading-normal">
									<thead>
										<tr>
											<th class="border-b-2 border-gray-900 bg-gray-200 px-2 py-2 text-center uppercase text-gray-600">
												Time
											</th>
											<th class="border-b-2 border-gray-900 bg-gray-200 px-2 py-2 text-center uppercase text-gray-600">
												Frequency
											</th>
											<th class="border-b-2 border-gray-900 bg-gray-200 px-2 py-2 text-center uppercase text-gray-600">
												State
											</th>
											<th class="border-b-2 border-gray-900 bg-gray-200 px-2 py-2 text-center uppercase text-gray-600">
												Status
											</th>
											<th class="border-b-2 border-gray-900 bg-gray-200 px-2 py-2 text-center uppercase text-gray-600">
												Station Id
											</th>
											<th class="border-b-2 border-gray-900 bg-gray-200 px-2 py-2 text-center uppercase text-gray-600">
												Bit error Ratio
											</th>
											<th class="border-b-2 border-gray-900 bg-gray-200 px-2 py-2 text-center uppercase text-gray-600">
												Signal to Noise
											</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($data as $d)
											<tr>
												<td class="w-1/7 border-b border-gray-300 bg-white px-5 py-5 text-center">
													<div class="flex items-center">
														<div class="ml-3">
															<p class="text-gray-900">
																{{ date('d/m/y', $d['time']) }}
																</br>
																{{ date('h:i:s', $d['time']) }}
															</p>
														</div>
													</div>
												</td>
												<td class="w-1/7 border-b border-gray-300 bg-white px-5 py-5">
													<div class="ml-3">
														<p class="text-gray-900">
															{{ $d['frequency'] }}
														</p>
													</div>
												</td>
												<td class="w-1/7 border-b border-gray-300 bg-white px-5 py-5">
													<div class="ml-3">
														<p class="text-gray-900">
															{{ $d['state'] }} {{ $d['destination'] }}
														</p>
													</div>
												</td>
												<td class="w-1/7 border-b border-gray-300 bg-white px-5 py-5">
													<div class="ml-3">
														<p class="text-gray-900">
															{{ $d['status'] }}
														</p>
													</div>
												</td>
												<td class="w-1/7 border-b border-gray-300 bg-white px-5 py-5">
													<div class="ml-3">
														<p class="text-gray-900">
															{{ $d['station_id'] }}
														</p>
													</div>
												</td>
												<td class="w-1/7 border-b border-gray-300 bg-white px-5 py-5">

													<div class="ml-3">
														<p class="text-gray-900">
															{{ $d['ber'] }}
														</p>
													</div>
												</td>
												<td class="w-1/7 border-b border-gray-300 bg-white px-5 py-5">
													<div class="ml-3">
														<p class="text-gray-900">
															{{ $d['sn'] }}
														</p>
													</div>
												</td>
											</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</main>
	{{-- {{ $data }} --}}
	<script src="js/script.js"></script>
	<script src="js/app.js"></script>
</body>

</html>

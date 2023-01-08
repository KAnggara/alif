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
	{{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}

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
			{{-- Search --}}
			<div
				class="mt-10 block items-center justify-center rounded-t-3xl bg-gradient-to-r from-blue-400 to-blue-700 py-2 text-white shadow md:flex md:justify-between md:p-4">
				<h1 class="text-md flex items-center justify-center font-bold md:text-3xl">
					<i class="fas fa-calendar-alt fa-inverse"></i>
					{{ $now }} WIB
				</h1>
				<form action="/" method="get">
					<div class="mt-2 flex items-center justify-center px-2">
						<input class="w-24 rounded-l-full pl-2 text-sm text-black md:px-4 md:py-2" id="search" name="search"
							type="text" value="{{ request('search') }}" placeholder="Search...">

						<label for="category" hidden>Choose a category:</label>
						<select class="w-16 bg-gray-300 text-base font-semibold text-gray-700" id="category" name="category">

							<option class="text-sm" value="all">All</option>
							@php
								$ignore = ['time', 'state', 'destination', 'status'];
								for ($i = 0; $i < count($ignore); $i++) {
								    $key = array_search($ignore[$i], $columns);
								    unset($columns[$key]);
								}
							@endphp
							@foreach ($columns as $column)
								<option class="text-sm md:text-2xl" value="{{ $column }}"
									{{ request('category') == $column ? 'selected' : '' }}>
									{{ strtoupper($column) }}
								</option>
							@endforeach

						</select>

						<button class="w-20 rounded-r-full bg-gray-600 text-sm text-white md:text-xl" type="submit">
							Search
						</button>
					</div>
				</form>
			</div>
			{{-- items per Page  --}}
			<div class="mt-2 flex justify-center text-sm font-medium text-gray-700">
				<a
					class="{{ request('item') == '10' ? 'bg-blue-200' : 'bg-white' }} ml-px mr-1 rounded-md border border-gray-300 px-4 py-2 md:mr-5"
					href="?search={{ request('search') }}&category={{ request('category') }}&order={{ !request('order') }}&item=10"
					aria-label="10">
					10
				</a>
				<a
					class="{{ request('item') == '25' ? 'bg-blue-200' : 'bg-white' }} ml-px mr-1 rounded-md border border-gray-300 px-4 py-2 md:mr-5"
					href="?search={{ request('search') }}&category={{ request('category') }}&order={{ !request('order') }}&item=25"
					aria-label="25">
					25
				</a>
				<a
					class="{{ request('item') == '50' ? 'bg-blue-200' : 'bg-white' }} ml-px mr-1 rounded-md border border-gray-300 px-4 py-2 md:mr-5"
					href="?search={{ request('search') }}&category={{ request('category') }}&order={{ !request('order') }}&item=50"
					aria-label="50">
					50
				</a>
				<a
					class="{{ request('item') == '100' ? 'bg-blue-200' : 'bg-white' }} ml-px mr-1 rounded-md border border-gray-300 px-4 py-2 md:mr-5"
					href="?search={{ request('search') }}&category={{ request('category') }}&order={{ !request('order') }}&item=100"
					aria-label="100">
					100
				</a>
			</div>

			{{-- Mobile --}}
			<div class="mt-2 flex flex-wrap justify-center md:hidden">
				<!-- component -->
				<div class="container px-2 pb-4 md:px-8">
					<div class="overflow-x-auto px-2 py-2 text-xs sm:-mx-8 sm:px-8">
						<div class="mb-4 overflow-hidden rounded-lg shadow">
							<table class="leading-normal">
								<thead>
									<tr class="cursor-pointer border-b-2 border-gray-900 bg-gray-200 text-center uppercase text-gray-600">
										<th>
											<a
												href="?search={{ request('search') }}&category={{ request('category') }}&order={{ !request('order') }}&column=time">
												Time
												<i
													class="fas {{ request('order') && request('column') == 'time' ? 'fa-sort-numeric-down' : 'fa-sort-numeric-down-alt' }}"></i>
											</a>
										</th>
										<th>
											<a
												href="?search={{ request('search') }}&category={{ request('category') }}&order={{ !request('order') }}&column=frequency">Freq
												<i
													class="fas {{ request('order') && request('column') == 'frequency' ? 'fa-sort-numeric-down' : 'fa-sort-numeric-down-alt' }}"></i>
											</a>
										</th>
										<th>
											<a
												href="?search={{ request('search') }}&category={{ request('category') }}&order={{ !request('order') }}&column=station_id">Station
												<i
													class="fas {{ request('order') && request('column') == 'station_id' ? 'fa-sort-amount-down-alt' : 'fa-sort-amount-down' }}"></i>
											</a>
										</th>
										<th>
											<a
												href="?search={{ request('search') }}&category={{ request('category') }}&order={{ !request('order') }}&column=ber">BER
												<i
													class="fas {{ request('order') && request('column') == 'ber' ? 'fa-sort-numeric-down' : 'fa-sort-numeric-down-alt' }}"></i>
											</a>
										</th>
										<th>
											<a
												href="?search={{ request('search') }}&category={{ request('category') }}&order={{ !request('order') }}&column=sn">SN
												<i
													class="fas {{ request('order') && request('column') == 'sn' ? 'fa-sort-numeric-down' : 'fa-sort-numeric-down-alt' }}"></i>
											</a>
										</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($radios as $r)
										<tr>
											<td class="w-1/5 border-b border-gray-300 bg-white p-2">
												<div class="flex items-center">
													<div class="ml-3">
														<p class="text-gray-900">
															{{ date('d/m/y', $r['time']) }}
															</br>
															{{ date('h:i:s', $r['time']) }}
														</p>
													</div>
												</div>
											</td>
											<td class="w-1/5 border-b border-gray-300 bg-white p-2">
												<div class="ml-3">
													<p class="text-gray-900">
														{{-- {{ (float) ($r['frequency'] / 1000000) }} MHz --}}
														{{ (float) $r['frequency'] }}
													</p>
												</div>
											</td>

											<td class="w-1/5 border-b border-gray-300 bg-white p-2">
												<div class="ml-3">
													<p class="text-gray-900">
														<a href="https://www.qrzcq.com/?q={{ $r['station_id'] }}" target="_blank">
															{{ $r['station_id'] }}
														</a>
													</p>
												</div>
											</td>
											<td class="w-1/5 border-b border-gray-300 bg-white p-2">
												<div class="ml-3">
													<p class="text-gray-900">
														{{ $r['ber'] }}
													</p>
												</div>
											</td>
											<td class="w-1/5 border-b border-gray-300 bg-white p-2">
												<div class="ml-3">
													<p class="text-gray-900">
														{{ $r['sn'] }}
													</p>
												</div>
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						{{ $radios->links() }}
					</div>
				</div>
			</div>

			{{-- Desktop --}}
			<div class="hidden flex-wrap md:flex">
				<!-- component -->
				<div class="container mx-auto px-4 pb-8 md:px-8">
					<div class="-mx-4 overflow-x-auto px-4 py-4 sm:-mx-8 sm:px-8">
						<div class="inline-block min-w-full overflow-hidden rounded-lg shadow">
							<table class="min-w-full leading-normal">
								<thead>
									<tr class="cursor-pointer border-b-2 border-gray-900 bg-gray-200 text-center uppercase text-gray-600">
										<th class="p-2">
											<a
												href="?search={{ request('search') }}&category={{ request('category') }}&order={{ !request('order') }}&column=time">
												Time
												<i
													class="fas {{ request('order') && request('column') == 'time' ? 'fa-sort-numeric-down' : 'fa-sort-numeric-down-alt' }}"></i>
											</a>
										</th>
										<th class="p-2">
											<a
												href="?search={{ request('search') }}&category={{ request('category') }}&order={{ !request('order') }}&column=frequency">Frequency
												<i
													class="fas {{ request('order') && request('column') == 'frequency' ? 'fa-sort-numeric-down' : 'fa-sort-numeric-down-alt' }}"></i>
											</a>
										</th>
										<th class="p-2">
											<a
												href="?search={{ request('search') }}&category={{ request('category') }}&order={{ !request('order') }}&column=state">State
												<i
													class="fas {{ request('order') && request('column') == 'state' ? 'fa-sort-amount-down-alt' : 'fa-sort-amount-down' }}"></i>
											</a>
										</th>
										<th class="p-2">
											<a
												href="?search={{ request('search') }}&category={{ request('category') }}&order={{ !request('order') }}&column=status">Status
												<i
													class="fas {{ request('order') && request('column') == 'status' ? 'fa-sort-amount-down-alt' : 'fa-sort-amount-down' }}"></i>
											</a>
										</th>
										<th class="p-2">
											<a
												href="?search={{ request('search') }}&category={{ request('category') }}&order={{ !request('order') }}&column=station_id">Station
												Id
												<i
													class="fas {{ request('order') && request('column') == 'station_id' ? 'fa-sort-amount-down-alt' : 'fa-sort-amount-down' }}"></i>
											</a>
										</th>
										<th class="p-2">
											<a
												href="?search={{ request('search') }}&category={{ request('category') }}&order={{ !request('order') }}&column=ber">Bit
												error Ratio
												<i
													class="fas {{ request('order') && request('column') == 'ber' ? 'fa-sort-numeric-down' : 'fa-sort-numeric-down-alt' }}"></i>
											</a>
										</th>
										<th class="p-2">
											<a
												href="?search={{ request('search') }}&category={{ request('category') }}&order={{ !request('order') }}&column=sn">Signal
												to Noise
												<i
													class="fas {{ request('order') && request('column') == 'sn' ? 'fa-sort-numeric-down' : 'fa-sort-numeric-down-alt' }}"></i>
											</a>
										</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($radios as $r)
										<tr>
											<td class="w-1/7 border-b border-gray-300 bg-white text-center">
												<p class="text-gray-900">
													{{ date('d/m/y', $r['time']) }}
													</br>
													{{ date('h:i:s', $r['time']) }}
												</p>
											</td>
											<td class="w-1/7 border-b border-gray-300 bg-white text-center">
												<p class="text-gray-900">
													{{ $r['frequency'] }}
												</p>
											</td>
											<td class="w-1/7 border-b border-gray-300 bg-white text-center">
												<div class="ml-3">
													<p class="text-gray-900">
														{{ $r['state'] }} {{ $r['destination'] }}
													</p>
												</div>
											</td>
											<td class="w-1/7 border-b border-gray-300 bg-white text-center">
												<div class="ml-3">
													<p class="text-gray-900">
														{{ $r['status'] }}
													</p>
												</div>
											</td>
											<td class="w-1/7 border-b border-gray-300 bg-white text-center">
												<div class="ml-3">
													<p class="text-gray-900">
														<a href="https://www.qrzcq.com/?q={{ $r['station_id'] }}" target="_blank">
															{{ $r['station_id'] }}
														</a>
													</p>
												</div>
											</td>
											<td class="w-1/7 border-b border-gray-300 bg-white text-center">

												<div class="ml-3">
													<p class="text-gray-900">
														{{ $r['ber'] }}
													</p>
												</div>
											</td>
											<td class="w-1/7 border-b border-gray-300 bg-white text-center">
												<div class="ml-3">
													<p class="text-gray-900">
														{{ $r['sn'] }}
													</p>
												</div>
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
					{{ $radios->links() }}
				</div>
			</div>
		</div>
	</main>

	<script src="js/script.js"></script>
	<script src="js/app.js"></script>
</body>

</html>

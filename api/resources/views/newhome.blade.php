@extends('layouts.app')
@section('content')
	@php
		date_default_timezone_set('Asia/Jakarta');
		$year = date('Y');
		$now = date('D, d M Y | H:i');
	@endphp
	<div class="flex h-screen flex-col justify-between">
		{{-- Header --}}
		<header
			class="supports-backdrop-blur:bg-white/60 text-slate-900 dark:border-slate-50/[0.06] dark:text-slate-300 lg:border-slate-900/10 sticky top-0 z-40 w-full flex-none bg-white/95 backdrop-blur transition-colors duration-500 dark:bg-transparent lg:z-50 lg:border-b">
			<nav class="border-gray-200 bg-white dark:bg-gray-900">
				<div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between p-4">
					<a class="flex items-center" href="https://alif.restwa.my.id">
						<span class="self-center whitespace-nowrap text-2xl font-semibold dark:text-white">Keterbukaan Informasi Radio
							ALE</span>
					</a>
					<button
						class="ml-3 inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden"
						data-collapse-toggle="navbar-default" type="button" aria-controls="navbar-default" aria-expanded="false">
						<span class="sr-only">Open main menu</span>
						<svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd"
								d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
								clip-rule="evenodd"></path>
						</svg>
					</button>
					<div class="hidden w-full md:block md:w-auto" id="navbar-default">
						<ul
							class="mt-4 flex flex-col rounded-lg border border-gray-100 bg-gray-50 p-4 font-medium dark:border-gray-700 dark:bg-gray-800 md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-white md:p-0 md:dark:bg-gray-900">
							<li>
								<a
									class="{{ $nav == 'data' ? 'bg-blue-700 text-white md:bg-transparent md:text-blue-700 md:dark:text-blue-500' : 'text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:bg-transparent md:dark:hover:text-blue-500' }} block rounded py-2 pl-3 pr-4 dark:text-white md:p-0"
									href="/">Modus</a>
							</li>
							{{-- MODUS FRQ YG SERING --}}
							{{-- JUMLAH PENGUNJUNG --}}
							{{-- ABOUT PEMBUAT --}}
							<li>
								<a
									class="{{ $nav == 'home' ? 'bg-blue-700 text-white md:bg-transparent md:text-blue-700 md:dark:text-blue-500' : 'text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:bg-transparent md:dark:hover:text-blue-500' }} block rounded py-2 pl-3 pr-4 dark:text-white md:p-0"
									href="/home">Home</a>
							</li>
							<li>
								<a
									class="{{ $nav == 'about' ? 'bg-blue-700 text-white md:bg-transparent md:text-blue-700 md:dark:text-blue-500' : 'text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:bg-transparent md:dark:hover:text-blue-500' }} block rounded py-2 pl-3 pr-4 dark:text-white md:p-0"
									href="about">About</a>
							</li>
							<li>
								<a
									class="block rounded py-2 pl-3 pr-4 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:bg-transparent md:dark:hover:text-blue-500"
									href="#">Log In</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>

		</header>
		{{-- Main Content --}}
		<main class="flex h-screen bg-gray-100 dark:bg-gray-900">
			<!-- Fixed sidebar -->
			<div class="h-auto w-64">
				<!-- Sidebar content -->
				<nav class="relative px-4 py-6 lg:text-sm" id="nav">
					<div class="form-control">
						<form class="mt-5" action="/" method="post">

							<div class="relative max-w-sm">
								<div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
									<svg class="h-5 w-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
										xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
											clip-rule="evenodd"></path>
									</svg>
								</div>
								<input
									class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pl-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
									name="start" type="text" datepicker placeholder="{{ $start }}">
							</div>
							<label class="text-sky-500 dark:text-sky-400 label sticky top-0 text-lg font-bold">To</label>
							<div class="relative max-w-sm">
								<div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
									<svg class="h-5 w-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
										xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
											clip-rule="evenodd"></path>
									</svg>
								</div>
								<input
									class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pl-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
									name="end" type="text" datepicker placeholder="{{ $end }}">
							</div>

							<div class="divider"></div>
							<label class="text-sky-500 dark:text-sky-400 label sticky top-0 text-2xl font-bold">Stasiun</label>
							@foreach ($listlocations as $location)
								<label class="label cursor-pointer">
									<span
										class="text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300 label-text text-sm font-semibold hover:text-base">{{ $location->location }}</span>
									<input class="checkbox-accent checkbox checkbox-xs" id="{{ $location->station_id }}" name="stationsId[]"
										type="checkbox" value="{{ $location->station_id }}" {{ $location->state ? 'checked' : '' }} />
								</label>
							@endforeach
							<div class="divider"></div>
							<select class="select-bordered select-info select select-sm w-full max-w-xs text-xs" name="limit">
								<option disabled selected>Data to Show ({{ $limit }})</option>
								<option>50</option>
								<option>100</option>
								<option>150</option>
								<option>500</option>
							</select>
							<div class="divider"></div>
							<input class="btn-sm" type="reset" value="Reset" />
							<button class="btn-accent btn-sm" type="submit">Save</button>
							@csrf
						</form>
					</div>
				</nav>
			</div>
			<!-- Scroll wrapper -->
			<div class="flex flex-1 overflow-hidden">
				<!-- Scrollable container -->
				<div class="flex-1 overflow-y-scroll">
					<div class="px-6 pt-6 pb-10">
						<!-- Your content -->
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
							<div class="mt-6 w-full">
								<div class="rounded-lg border-transparent bg-white shadow-xl">
									<div
										class="{{ $colorsList[rand(0, 8)] }} rounded-tl-lg rounded-tr-lg border-b-2 border-gray-300 bg-gradient-to-b p-2 uppercase text-gray-800">
										<h2 class="font-bold uppercase text-gray-600">PKU - {{ $location->location }} | {{ $location->station_id }}
										</h2>
									</div>
									<div class="p-2 md:p-5">
										<canvas class="chartjs" id="{{ $location->station_id }}-chart"></canvas>

										<script>
											ber = [];
											snr = [];
											timeLabel = [];
											chartTarget = document.getElementById("{{ $location->station_id }}-chart");

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
												if (day < 10) day = '0' + day;
												if (month < 10) month = '0' + month;
												if (hours < 10) hours = '0' + hours;
												if (minutes < 10) minutes = '0' + minutes;
												date = hours + ":" + minutes + " " + day + "/" + month + "/" + year;

												timeLabel.push(date);
											});

											new Chart(chartTarget, {
												type: timeLabel.length < 5 ? 'bar' : 'line',
												data: {
													labels: timeLabel,
													datasets: [{
														fill: true,
														label: "SNR",
														data: snr,
														pointBorderColor: '#fff',
														borderColor: 'rgb(100, 200, 254)',
														pointHoverBackgroundColor: '#fff',
														pointBackgroundColor: 'rgb(189, 224, 254)',
														pointHoverBorderColor: 'rgb(189, 224, 254)',
														backgroundColor: 'rgba(189, 224, 254, 0.5)',
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
													}, {
														fill: true,
														label: "FRQ",
														data: frq,
														pointBorderColor: '#fff',
														borderColor: 'rgb(87, 204, 153)',
														pointHoverBackgroundColor: '#fff',
														pointBackgroundColor: 'rgb(87, 204, 153)',
														pointHoverBorderColor: 'rgb(87, 204, 153)',
														backgroundColor: 'rgba(87, 204, 153, 0.3)',
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
													}
												}
											});
										</script>
									</div>
								</div>

							</div>
						@endforeach

					</div>
				</div>
			</div>
		</main>
		{{-- Footer --}}
		<footer class="text-sm leading-3">
			<div
				class="border-slate-200 text-slate-500 dark:border-slate-200/5 justify-between border-t px-20 pt-3 pb-10 sm:flex">
				<div class="mb-6 sm:mb-0 sm:flex">
					<p>
						<a class="hover:text-slate-900 dark:hover:text-slate-400 text-xl" href="#">
							Lab. Telekomunikasi Teknik Elektro UIN SUSKA | {{ $year }}</a>
					</p>
				</div>
				<a class="hover:text-slate-900 dark:hover:text-slate-400 text-xl" href="#">By Alif Ramadhan</a>
			</div>
		</footer>
	</div>
	<div class="invisible">
		<div class="bg-red-50 from-red-200 to-red-50"></div>
		<div class="bg-green-50 from-green-200 to-green-50"></div>
		<div class="bg-blue-50 from-blue-200 to-blue-50"></div>
		<div class="bg-yellow-50 from-yellow-200 to-yellow-50"></div>
		<div class="bg-indigo-50 from-indigo-200 to-indigo-50"></div>
		<div class="bg-pink-50 from-pink-200 to-pink-50"></div>
		<div class="bg-purple-50 from-purple-200 to-purple-50"></div>
		<div class="bg-gray-50 from-gray-200 to-gray-50"></div>
		<div class="bg-orange-50 from-orange-200 to-orange-50"></div>
	</div>

	{{-- <div class="max-w-8xl mx-auto px-4 sm:px-6 md:px-10"></div> --}}
@endsection

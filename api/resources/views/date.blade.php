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
									href="/">Home</a>

							</li>
							<li>
								<a
									class="{{ $nav == 'home' ? 'bg-blue-700 text-white md:bg-transparent md:text-blue-700 md:dark:text-blue-500' : 'text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:bg-transparent md:dark:hover:text-blue-500' }} block rounded py-2 pl-3 pr-4 dark:text-white md:p-0"
									href="/home">Data</a>
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
		<main class="flex justify-center bg-gray-100 text-black dark:bg-gray-900">
			<!-- Fixed sidebar -->
			<!-- Scroll wrapper -->

			<!-- Scrollable container -->

			<div class="m-6">
				<table class="max-w-screen table-auto border-separate border border-black">
					<thead>
						<tr>
							<th class="border border-black p-1">Time</th>
							<th class="border border-black p-1">Station ID</th>
							<th class="border border-black p-1">Frekuensi Kanal Terbuka</th>
							<th class="border border-black p-1">SNR</th>
							<th class="border border-black p-1">BER</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($radioSelected as $data)
							<tr class="{{ $data->frequency == $frq ? 'bg-green-300' : 'bg-slate-300' }}">
								<td class="border border-black p-2 text-left">{{ date('d/m/y H:i:s', substr($data->time, 0, 10)) }} WIB</td>
								<td class="border border-black p-2 text-right">{{ $data->station_id }} </td>
								<td class="border border-black p-2 text-right">{{ number_format($data->frequency / 1000000, 4) }} MHz</td>
								<td class="border border-black p-2 text-right">{{ $data->sn }} </td>
								<td class="border border-black p-2 text-right">{{ $data->ber }} </td>

							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</main>
		{{-- <div class="flex justify-center">
			{{ $radioDatas->links() }}
		</div> --}}

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
@endsection

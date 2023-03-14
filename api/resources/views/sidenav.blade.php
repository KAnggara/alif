<div class="bg-white">
	<div>
		<!--
						Mobile filter dialog

						Off-canvas filters for mobile, show/hide based on off-canvas filters state.
				-->
		<div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
			<!--
								Off-canvas menu backdrop, show/hide based on off-canvas menu state.

								Entering: "transition-opacity ease-linear duration-300"
										From: "opacity-0"
										To: "opacity-100"
								Leaving: "transition-opacity ease-linear duration-300"
										From: "opacity-100"
										To: "opacity-0"
						-->
			<div class="fixed inset-0 bg-black bg-opacity-25"></div>

			<div class="fixed inset-0 z-40 flex">
				<!--
										Off-canvas menu, show/hide based on off-canvas menu state.

										Entering: "transition ease-in-out duration-300 transform"
												From: "translate-x-full"
												To: "translate-x-0"
										Leaving: "transition ease-in-out duration-300 transform"
												From: "translate-x-0"
												To: "translate-x-full"
								-->
				<div class="relative ml-auto flex h-full w-full max-w-xs flex-col overflow-y-auto bg-white py-4 pb-12 shadow-xl">
					<div class="flex items-center justify-between px-4">
						<h2 class="text-lg font-medium text-gray-900">Filters</h2>
						<button class="-mr-2 flex h-10 w-10 items-center justify-center rounded-md bg-white p-2 text-gray-400"
							type="button">
							<span class="sr-only">Close menu</span>
							<svg class="h-6 w-6" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
								stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
							</svg>
						</button>
					</div>

					<!-- Filters -->
					<form class="mt-4 border-t border-gray-200">
						<h3 class="sr-only">Stasiun</h3>

						<div class="border-t border-gray-200 px-4 py-6">
							<h3 class="-mx-2 -my-3 flow-root">
								<!-- Expand/collapse section button -->
								<button class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500"
									type="button" aria-controls="filter-section-mobile-0" aria-expanded="false">
									<span class="font-medium text-gray-900">Color</span>
									<span class="ml-6 flex items-center">
										<!-- Expand icon, show/hide based on section open state. -->
										<svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
											<path
												d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
										</svg>
										<!-- Collapse icon, show/hide based on section open state. -->
										<svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
												clip-rule="evenodd" />
										</svg>
									</span>
								</button>
							</h3>
							<!-- Filter section, show/hide based on section state. -->
							<div class="pt-6" id="filter-section-mobile-0">
								<div class="space-y-6">
									<div class="flex items-center">
										<input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
											id="filter-mobile-color-0" name="color[]" type="checkbox" value="white">
										<label class="ml-3 min-w-0 flex-1 text-gray-500" for="filter-mobile-color-0">White</label>
									</div>

									<div class="flex items-center">
										<input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
											id="filter-mobile-color-1" name="color[]" type="checkbox" value="beige">
										<label class="ml-3 min-w-0 flex-1 text-gray-500" for="filter-mobile-color-1">Beige</label>
									</div>

									<div class="flex items-center">
										<input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
											id="filter-mobile-color-2" name="color[]" type="checkbox" value="blue" checked>
										<label class="ml-3 min-w-0 flex-1 text-gray-500" for="filter-mobile-color-2">Blue</label>
									</div>

									<div class="flex items-center">
										<input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
											id="filter-mobile-color-3" name="color[]" type="checkbox" value="brown">
										<label class="ml-3 min-w-0 flex-1 text-gray-500" for="filter-mobile-color-3">Brown</label>
									</div>

									<div class="flex items-center">
										<input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
											id="filter-mobile-color-4" name="color[]" type="checkbox" value="green">
										<label class="ml-3 min-w-0 flex-1 text-gray-500" for="filter-mobile-color-4">Green</label>
									</div>

									<div class="flex items-center">
										<input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
											id="filter-mobile-color-5" name="color[]" type="checkbox" value="purple">
										<label class="ml-3 min-w-0 flex-1 text-gray-500" for="filter-mobile-color-5">Purple</label>
									</div>
								</div>
							</div>
						</div>

						<div class="border-t border-gray-200 px-4 py-6">
							<h3 class="-mx-2 -my-3 flow-root">
								<!-- Expand/collapse section button -->
								<button class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500"
									type="button" aria-controls="filter-section-mobile-1" aria-expanded="false">
									<span class="font-medium text-gray-900">Category</span>
									<span class="ml-6 flex items-center">
										<!-- Expand icon, show/hide based on section open state. -->
										<svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
											<path
												d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
										</svg>
										<!-- Collapse icon, show/hide based on section open state. -->
										<svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
												clip-rule="evenodd" />
										</svg>
									</span>
								</button>
							</h3>
							<!-- Filter section, show/hide based on section state. -->
							<div class="pt-6" id="filter-section-mobile-1">
								<div class="space-y-6">
									<div class="flex items-center">
										<input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
											id="filter-mobile-category-0" name="category[]" type="checkbox" value="snr">
										<label class="ml-3 min-w-0 flex-1 text-gray-500" for="filter-mobile-category-0">New Arrivals</label>
									</div>

									<div class="flex items-center">
										<input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
											id="filter-mobile-category-1" name="category[]" type="checkbox" value="ber">
										<label class="ml-3 min-w-0 flex-1 text-gray-500" for="filter-mobile-category-1">Sale</label>
									</div>

									<div class="flex items-center">
										<input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
											id="filter-mobile-category-2" name="category[]" type="checkbox" value="freq" checked>
										<label class="ml-3 min-w-0 flex-1 text-gray-500" for="filter-mobile-category-2">Travel</label>
									</div>

									<div class="flex items-center">
										<input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
											id="filter-mobile-category-3" name="category[]" type="checkbox" value="organization">
										<label class="ml-3 min-w-0 flex-1 text-gray-500" for="filter-mobile-category-3">Organization</label>
									</div>

									<div class="flex items-center">
										<input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
											id="filter-mobile-category-4" name="category[]" type="checkbox" value="accessories">
										<label class="ml-3 min-w-0 flex-1 text-gray-500" for="filter-mobile-category-4">Accessories</label>
									</div>
								</div>
							</div>
						</div>

						<div class="border-t border-gray-200 px-4 py-6">
							<h3 class="-mx-2 -my-3 flow-root">
								<!-- Expand/collapse section button -->
								<button class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500"
									type="button" aria-controls="filter-section-mobile-2" aria-expanded="false">
									<span class="font-medium text-gray-900">Size</span>
									<span class="ml-6 flex items-center">
										<!-- Expand icon, show/hide based on section open state. -->
										<svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
											<path
												d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
										</svg>
										<!-- Collapse icon, show/hide based on section open state. -->
										<svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
												clip-rule="evenodd" />
										</svg>
									</span>
								</button>
							</h3>
							<!-- Filter section, show/hide based on section state. -->
							<div class="pt-6" id="filter-section-mobile-2">
								<div class="space-y-6">
									<div class="flex items-center">
										<input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
											id="filter-mobile-size-0" name="size[]" type="checkbox" value="2l">
										<label class="ml-3 min-w-0 flex-1 text-gray-500" for="filter-mobile-size-0">2L</label>
									</div>

									<div class="flex items-center">
										<input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
											id="filter-mobile-size-1" name="size[]" type="checkbox" value="6l">
										<label class="ml-3 min-w-0 flex-1 text-gray-500" for="filter-mobile-size-1">6L</label>
									</div>

									<div class="flex items-center">
										<input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
											id="filter-mobile-size-2" name="size[]" type="checkbox" value="12l">
										<label class="ml-3 min-w-0 flex-1 text-gray-500" for="filter-mobile-size-2">12L</label>
									</div>

									<div class="flex items-center">
										<input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
											id="filter-mobile-size-3" name="size[]" type="checkbox" value="18l">
										<label class="ml-3 min-w-0 flex-1 text-gray-500" for="filter-mobile-size-3">18L</label>
									</div>

									<div class="flex items-center">
										<input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
											id="filter-mobile-size-4" name="size[]" type="checkbox" value="20l">
										<label class="ml-3 min-w-0 flex-1 text-gray-500" for="filter-mobile-size-4">20L</label>
									</div>

									<div class="flex items-center">
										<input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
											id="filter-mobile-size-5" name="size[]" type="checkbox" value="40l" checked>
										<label class="ml-3 min-w-0 flex-1 text-gray-500" for="filter-mobile-size-5">40L</label>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

		<main class="mx-auto max-w-7xl px-4 lg:px-0">
			<section class="pt-6 pb-24" aria-labelledby="products-heading">
				<h2 class="sr-only" id="products-heading">Products</h2>

				<div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">
					<!-- Filters -->
					<form class="hidden lg:block">

						<div class="border-b border-gray-200 pb-6">
							<h3 class="-my-3 flow-root">
								<!-- Expand/collapse section button -->
								<button
									class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
									type="button" aria-controls="filter-section-0" aria-expanded="false">
									<span class="font-medium text-gray-900">Stasiun</span>
									<span class="ml-6 flex items-center">
										<!-- Expand icon, show/hide based on section open state. -->
										<svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
											<path
												d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
										</svg>
										<!-- Collapse icon, show/hide based on section open state. -->
										<svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
												clip-rule="evenodd" />
										</svg>
									</span>
								</button>
							</h3>
							<!-- Filter section, show/hide based on section state. -->
							<div class="pt-6" id="filter-section-0">
								<div class="space-y-4">
									<div class="flex items-center">
										<input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" id="filter-color-0"
											name="color[]" type="checkbox" value="white">
										<label class="ml-3 text-sm text-gray-600" for="filter-color-0">White</label>
									</div>

									<div class="flex items-center">
										<input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" id="filter-color-1"
											name="color[]" type="checkbox" value="beige">
										<label class="ml-3 text-sm text-gray-600" for="filter-color-1">Beige</label>
									</div>

									<div class="flex items-center">
										<input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" id="filter-color-2"
											name="color[]" type="checkbox" value="blue" checked>
										<label class="ml-3 text-sm text-gray-600" for="filter-color-2">Blue</label>
									</div>

									<div class="flex items-center">
										<input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" id="filter-color-3"
											name="color[]" type="checkbox" value="brown">
										<label class="ml-3 text-sm text-gray-600" for="filter-color-3">Brown</label>
									</div>

									<div class="flex items-center">
										<input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" id="filter-color-4"
											name="color[]" type="checkbox" value="green">
										<label class="ml-3 text-sm text-gray-600" for="filter-color-4">Green</label>
									</div>

									<div class="flex items-center">
										<input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" id="filter-color-5"
											name="color[]" type="checkbox" value="purple">
										<label class="ml-3 text-sm text-gray-600" for="filter-color-5">Purple</label>
									</div>
								</div>
							</div>
						</div>

						<div class="border-gray-200 py-6">
							<h3 class="-my-3 flow-root">
								<!-- Expand/collapse section button -->
								<button
									class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
									type="button" aria-controls="filter-section-1" aria-expanded="false">
									<span class="font-medium text-gray-900">Data</span>
									<span class="ml-6 flex items-center">
										<!-- Expand icon, show/hide based on section open state. -->
										<svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
											<path
												d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
										</svg>
										<!-- Collapse icon, show/hide based on section open state. -->
										<svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
												clip-rule="evenodd" />
										</svg>
									</span>
								</button>
							</h3>
							<!-- Filter section, show/hide based on section state. -->
							<div class="pt-6" id="filter-section-1">
								<div class="space-y-4">
									<div class="flex items-center">
										<input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" id="filter-category-0"
											name="category[]" type="checkbox" value="snr">
										<label class="ml-3 text-sm text-gray-600" for="filter-category-0">Signal Noise Ratio</label>
									</div>

									<div class="flex items-center">
										<input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" id="filter-category-1"
											name="category[]" type="checkbox" value="ber">
										<label class="ml-3 text-sm text-gray-600" for="filter-category-1">Bit Error Rate</label>
									</div>

									<div class="flex items-center">
										<input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" id="filter-category-2"
											name="category[]" type="checkbox" value="freq" checked>
										<label class="ml-3 text-sm text-gray-600" for="filter-category-2">Frequency</label>
									</div>
								</div>
							</div>
						</div>
					</form>

					<!-- Product grid -->
					<div class="lg:col-span-3">
						<!-- Your content -->
						{{ $now }}
					</div>
				</div>
			</section>
		</main>
	</div>
</div>

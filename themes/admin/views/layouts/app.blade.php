<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>{{ config('app.name', 'Laravel') }}</title>

		<!-- Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

		<!-- Styles -->
		<link rel="stylesheet" href="{{ mix('css/app.css', 'themes/admin') }}">

		<!-- Scripts -->
		<script src="{{ mix('js/app.js', 'themes/admin') }}" defer></script>
	</head>
	<body class="antialiased">
		<div class="flex-col w-full md:flex md:flex-row md:h-screen">
			@include('layouts.sidebar')
			<div class="flex flex-col flex-grow">
				@include('layouts.navigation')
				<div class="flex-grow p-6 overflow-auto bg-gray-200">
					<h2 class="mb-4 font-bold text-lg text-gray-700">{{ $header }}</h2>
					<div class="grid grid-cols-3 gap-6">
						{{ $slot }}
					</div>
				</div>
			</div>
		</div>
	</body>
</html>

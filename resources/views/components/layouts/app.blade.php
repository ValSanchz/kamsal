<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KAMSAL - {{ $title ?? '' }}</title>
	<meta name="description" content="{{ $metaDescription ?? 'Default meta description' }}" />
	@vite(['resources/css/app.css'])
</head>
<body>
	{{-- Tailwind --}}
	<div class="mx-auto">
		<x-layouts.navigation/>

		@if(session('status'))
		<div>{{ session('status') }}</div>
		@endif

		{{ $slot }}
	</div>

		<footer class="bg-green-km text-center text-white py-3 shadow">
			{{ config('app.name') }} | Copyright @ {{ date('Y') }}
		</footer>
</body>
</html>
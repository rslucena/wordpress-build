<!doctype html>
<html @php(language_attributes())>

	{{-- GET PARTIALS > HEAD --}}
	@include('partials.head')

	<body @php(body_class())>

	{{-- GET DEFAULT HEADER --}}
	@php(do_action('get_header'))

	{{-- GET PARTIALS > HEADER --}}
	@include('partials.header')

	<div class="wrap" role="document">

		{{-- MAIN --}}
		<main class="main">
			@yield('content')
		</main>

		{{-- SIDEBAR --}}
		@if (App\display_sidebar())
			<aside class="sidebar">
				@include('partials.sidebar')
			</aside>
		@endif
	</div>

	{{-- GET DEFAULT FOOTER --}}
	@php(do_action('get_footer'))

	{{-- FOOTER --}}
	@include('partials.footer')

	{{-- START FOOTER --}}
	@php(wp_footer())

	</body>
</html>

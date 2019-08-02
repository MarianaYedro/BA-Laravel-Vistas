<!DOCTYPE html>
<html lang="en" dir="ltr">

	<head>
		<meta charset="utf-8">
		<title>@yield('pageTitle')</title>
		@yield('link_style')
	</head>

	<body>
    <div class="container">
			{{-- Barra de navegación --}}
      @include('front.navbar')

			@yield('header')
      {{-- Contenido --}}
			@yield('mainContent')

      @yield('secondContent')

      @yield('thirdContent')

      @yield('fourthContent')
      {{-- Footer --}}
      @include('front.footer')
      {{-- Lugar para javaScript --}}
      @yield('javaScript')

		</div>

	</body>

</html>

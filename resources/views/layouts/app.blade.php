<!DOCTYPE html>
<html>
	<head>
	    @include('layouts.header')
	    @include('layouts.nav')
	</head>
	<body class="app">
	    @yield('content')
	</body>
	@include('layouts.footer')
</html>

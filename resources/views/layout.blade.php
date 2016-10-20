<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="csrf-token" content="{{ csrf_token() }}" />
		<title>Laravel</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

        @yield('header')

	</head>
	<body>
		<div class="container">
			@yield('content')
		</div>

        @yield('footer')

    </body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') | {{ env('APP_NAME', 'Anforcom') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/auth/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/auth/main.css') }}">
    <!--===============================================================================================-->
</head>

<body>
    @yield('content')

	<!--===============================================================================================-->
	<script src="{{ asset('assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('assets/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('assets/js/auth/main.js') }}"></script>

	<script type="text/javascript">
		$(document).ready(function () {
			$("a").click(function (event) {
				var $this = $(this),
					url = $this.data("url");

				$(document.body).load(url);
				event.preventDefault();
			});
		});
	</script>

</body>

</html>

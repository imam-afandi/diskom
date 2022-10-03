<!DOCTYPE html>
<html>
	<head>
		<title>Diskominfo Login</title>
		<link href="{{ url('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
		<link href={{ url('login_form/css/style.css') }} rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
		<script src="https://kit.fontawesome.com/a81368914c.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
		<body>
			<img class="wave" src="{{ url('login_form/img/wave.png')}}">
			<div class="container">
				<div class="img">
					<img src="{{ url('login_form/img/bg4.svg')}}">
				</div>
				<div class="login-content">
					@yield('content')
				</div>
			</div>
			<script type="text/javascript" src="{{ url('login_form/js/main.js')}}"></script>
		</body>
</html>

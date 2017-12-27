<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<link href="{{ asset('css/common.css') }}" rel="stylesheet">
	<title>YCO</title>

</head>
<body>
  	<div class="initialContainer">
  		<div class="initialLogo" id="initialLogo">
			<img src="{{ asset('img/icons/iconMain.png') }}" class="initialLogoSize"> 
		</div>
  	</div>
  	{{ header("refresh:3;url=http://192.168.1.6:8011/home") }}
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('js/initial.js') }}"></script>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}"></link>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#82E0AA ;">
		<a class="navbar-brand" href="#">T-Bucket</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
		  <ul class="navbar-nav">
			<li class="nav-item active">
			  <a class="nav-link" href="#">Tentang </a>
			</li>
		  </ul>
		</div>
	  </nav>
	@yield('content')

<script src="{{ asset('js/jquery.slim.min.js') }}"> </script>
<script src="{{ asset('js/popper.min.js') }}"> </script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"> </script>


</body>
</html>